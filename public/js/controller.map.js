// MAPA MÚLTIPLE - TRANSPARENCIA PRESUPUESTARIA
// @package : GFSHCP
// @location : /js
// @file     : controller.map.js
// @author  : Gobierno fácil <howdy@gobiernofacil.com>
// @url     : http://gobiernofacil.com

define(function(require){
  // obtiene el archivo de configuración
  var CONFIG  = require("json!config.map.json"),
      d3      = require("d3"),
      leaflet = require("leaflet"),
      ESTADOS = require("assets/estados-area");


  /*
   * E L   S I N G L E T O N   D E L   M A P A (main obj)
   * ------------------------------------------------------------
   */
  var GFSHCPMap = {

    //
    // FUNCIÓN DE INICIO
    // ------------------------------
    // cuando el objeto se carga mediante require, es la primera 
    // función que se ejecuta
    //
    initialize : function(){
      // inicia las propiedades a usar
      this.map = null;
      this.layersConfig = [];
      this.settings = Object.create(CONFIG);

      // inicia el mapa
      this.drawMap();
      this.loadMapsConfig();

      ESTADOS.edos.features.forEach(function(estado){
        estado.properties.CVE_ENT = +estado.properties.CVE_ENT;

        if(estado.properties.CVE_ENT == 31){
          estado.properties.NOM_ENT = "Yucatán";
        }
        if(estado.properties.CVE_ENT == 24){
          estado.properties.NOM_ENT = "San Luis Potosí";
        }
        if(estado.properties.CVE_ENT == 22){
          estado.properties.NOM_ENT = "Querétaro";
        }
        if(estado.properties.CVE_ENT == 19){
          estado.properties.NOM_ENT = "Nuevo León";
        }
        if(estado.properties.CVE_ENT == 16){
          estado.properties.NOM_ENT = "Michoacán";
        }
        if(estado.properties.CVE_ENT == 15){
          estado.properties.NOM_ENT = "México";
        }
        if(estado.properties.CVE_ENT == 9){
          estado.properties.NOM_ENT = "Ciudad de México";
        }
        //console.log(estado.geometry.coordinates);

      });
    },

    //
    // DIBUJA EL MAPA PRINCIPAL
    //
    //
    drawMap : function(){
      // inicia el mapa de leaflet con los settings de config.map.json
      this.map = L.map(this.settings.map.div)
                  .setView([this.settings.map.lat, this.settings.map.lng], this.settings.map.zoom);

      // agrega el layer de tiles
      L.tileLayer(this.settings.map.tileServer, this.settings.map.tileServerConfig).addTo(this.map);

      // agrega los demas créditos
      if(this.settings.map.attributions.length){
        this.settings.map.attributions.forEach(function(attr){
          this.map.attributionControl.addAttribution(attr);
        }, this);
      }
    },

    //
    // CARGA LA CONFIGUACIÓN DE LOS MAPAS EXTERNOS
    //
    //
    loadMapsConfig : function(){
      var that = this;
      this.settings.maps.maps.forEach(function(url, index){
        
        var path   = this.settings.maps.basePath + "/" + url,
            active = this.settings.maps.current; 

        d3.json(path, function(error, data){
          var item = {
            src    : path, 
            config : data,
            index  : index,
            data   : null
          };

          that.layersConfig.push(item);

          if(+index === +active){
            that.getLayer(item);
          }
        });
      }, this);
    },

    //
    // OBTIENE LA INFORMACIÓN DEL LAYER SELECCIONADO
    //
    //
    getLayer : function(item){
      var that = this, 
          conf = item.config;
      console.log(conf);

      // conf.file puede ser CSV, TSV, JSON, etc.
      d3[conf.file](conf.src, function(error, data){
        item.data = data;
        that.renderLayer(item);
      });
    },

    //
    // DIBUJA EL LAYER SELECCIONADO
    //
    //
    renderLayer : function(item){
      this.states = L.geoJson(ESTADOS.edos, {
      style : this._stateStyle,
    }).addTo(this.map);
    },

    drawLayer : function(){
      
    },

    /*
     * F U N C I O N E S   D E   S O P O R T E 
     * ------------------------------------------------------------
     */

    _stateStyle : function(feature){
      console.log(feature);
      return {
        weight      : .4,
        opacity     : 0.1,
        color       : 'black',
        dashArray   : '',
        fillOpacity : 1,
        fillColor   : "#f2f2f2"
      }
    },



  };

  return GFSHCPMap;
});