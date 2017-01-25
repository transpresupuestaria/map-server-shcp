var GFSHCPMap =  function(){

  // the map settings
  var MAP = {
    div         : "GF-SHCP-map",
    lat         : 22.442167,
    lng         : -100.110350,
    zoom        : 5,
    maxZoom     : 18,
    baseURL     : 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
    attribution : 'Map data © <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
    data        : "api/data"
  },

  STYLE = {
    // el estilo para las comercializadoras
    points : {
      radius      : 2,
      fillColor   : "#334D5C", //1cb68d
      color       : "white",
      weight      : 1,
      opacity     : 0.3,
      fillOpacity : 0.9
    },

    // la posición del panel de opciones
    selectorPanel : {
      position : 'topright'
    }
  },

  //
  //[ la maroma que aparece al pasar el mouse sobre un punto]
  //
  //
  point_popup = null;//_.template("key: <%=key%>");






  /*
   * [ D A T A   P A N E L S   C O N S T R U C T O R S ]
   * --------------------------------------------------------------------------------
   *
   *
   */

  //
  // [ define el constructor para el diplay de los datos por municipio ]
  //
  //
  var InfoPanel = L.Control.extend({

    initialize : function(app, options){
      var div = L.DomUtil.create('div', 'info'),
          h3  = document.createElement("h3"),
          p   = document.createElement("p");
    
      div.appendChild(h3);
      div.appendChild(p);

      this.app  = app;
      this._div = div;
    },

    onAdd : function(map){
      this.update();
      return this._div;
    },

    update : function(props){
    /*
    var selected = this.app.selected,
        p        = this._div.querySelector("p"),
        h3       = this._div.querySelector("h3"),
        label    = this.app.labels.findWhere({key : selected}),
        template = _.template(label.get('text')),
        data     = props ? {
          municipio : props.mango_mpo,
          estado    : props.mango_Estado,
          value     : this.app.formatNum(props[selected])
        } : null,
        html     = data ? template(data) : default_label;
    h3.innerHTML = label.get("name");
    p.innerHTML  = html;
    */
    }
  });

  /*
   * [ T H E   A P P ]
   * --------------------------------------------------------------------------------
   *
   *
   */
  var app = {
    //
    // [ comentar otro día n_____n ]
    //
    //
    initialize : function(data, map, style, states){
      var that = this;

      this.settings = Object.create(MAP);
      this.brew     = null;
      this.selected = null;
      this.data     = null;
      this.current  = {};
      this.legend   = null;
      this.base_map = null;
      this.map      = null;
      this.states   = null;
      this._points  = null;
      this.points   = null;
      this.style    = Object.create(STYLE);

      // UGLY HARD CODE, update later
      this.yearSelector = document.getElementById("GF-SHCP-year-selector");
      this.yearSelector.addEventListener("change", function(e){
        that.current.year = this.value;
        //that.filterData();
        that.redrawPoints( that.filterData() );
      });

      /*
      this.collection   = new Backbone.Collection(data);
      this.labels       = new Backbone.Collection(Selector);
      this.cities_layer = this.make_geojson(this.collection.toArray());
      */
    
      this.drawMap();
      this.getData();
      /*
      this.drawCities(this.map, this.cities_layer, style.city);
      this.drawStates(states, style.state);

      this.selector = new SelectorPanel(this, Selector, STYLE.selectorPanel);
      this.selector.addTo(this.map);

      this.data_display = new InfoPanel(this, {});
      this.data_display.addTo(this.map);

      this.drawPoints();
      this.drawPoints2();
      */

    },

    getData : function(){
      var that = this;
      d3.json(this.settings.data, function(error, d){
        that.data    = d.slice(0);
        //that.current = d.slice(0);
        that._points = that.makeGeojson(d);
        that.drawPoints(that._points);
      });
    },

    filterData : function(){
      var that = this,
          data = this.data.slice(0);
      if(Number(this.current.year)){
        data = data.filter(function(d){
          return +d.ciclo == +that.current.year;
        });
      }

      return data;
    },

    //
    // [ comentar otro día n_____n ]
    //
    //
    drawMap : function(){
      this.map = L.map(this.settings.div).setView([this.settings.lat, this.settings.lng], this.settings.zoom);

      L.tileLayer(this.settings.baseURL, {
        id : "main-map",//this.settings.id,
        maxZoom : this.settings.maxZoom,
        attribution : this.settings.attribution,
      }).addTo(this.map);

      this.map.attributionControl.addAttribution('SHCP');

      return this.map;
    },

    //
    // [ comentar otro día n_____n ]
    //
    //
    drawPoints : function(d){
      console.log(d);
      var that = this;
      this.points = L.geoJson(d, {
        pointToLayer : function(feature, latlng){
          var p = L.circleMarker(latlng, that.style.points),
              content = {
                //nombre : feature.properties["Nombre"],
                estado : feature.properties["Estado"],
                //municipio : feature.properties["Municipio"],
                //destino : feature.properties["Destino 1"]
              };

              p.on("click", function(e){
                //alert(feature.properties.cvePPI);
                window.open('/ficha#' + feature.properties.cvePPI, '_blank');
                // window.location.href = "";
              });

              /*
              p.on("mouseover", function(e){

                L.popup()
                  .setLatLng(latlng)
                  .setContent(point_popup(content))
                  .openOn(that.map);
              });
              */
          return p;
        }
      }).addTo(this.map);
    },

    redrawPoints : function(d){
      var that = this;
      this.map.removeLayer(this.points);
      this.drawPoints(this.makeGeojson(d));
    },

    //
    // [ comentar otro día n_____n ]
    //
    //
    makeGeojson : function(data){
      return{
        "type":"FeatureCollection",
        "crs":{
          "type":"name",
          "properties":{
            "name":"urn:ogc:def:crs:EPSG::4019"
          }
        },
        "features" : data.map(function(d){
          return {
            type : "Feature",
            properties : {
              "Municipio" : "Aguascalientes", 
              "Estado"    : "Aguascalientes", 
              "Long"      : d.lng, 
              "Lat"       : d.lat,
              "cvePPI" : d.key
            },
            geometry : {
              "type": "Point", 
              "coordinates": [ d.lng, d.lat ]
            }
          }
        })
      }
    },
  }

  return app;
};

var _App = new GFSHCPMap();
_App.initialize();