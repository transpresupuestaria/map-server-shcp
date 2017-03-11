// MAPA MÚLTIPLE - TRANSPARENCIA PRESUPUESTARIA
// @package : GFSHCP
// @location : /js
// @file     : controller.map.js
// @author  : Gobierno fácil <howdy@gobiernofacil.com>
// @url     : http://gobiernofacil.com

define(function(require){
  // obtiene el archivo de configuración
  var CONFIG  = require("json!config.map.json"),
      leaflet = require("leaflet");


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
      this.settings = Object.create(CONFIG);

      // inicia el mapa
      this.drawMap();
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
    }
  };

  return GFSHCPMap;
});