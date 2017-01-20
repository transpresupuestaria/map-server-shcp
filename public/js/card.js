//var DatosGobMxURL = "http://localhost:8000/api/test";
var hash = window.location.hash;
var DatosGobMxURL = "http://api.datos.gob.mx/v1/proyectos-opa?" + encodeURIComponent("cve-ppi") + "='0518T4M0007";


//console.log(window.location.hash);


d3.json(DatosGobMxURL)
  .get(function(e, d){

    console.log(e,d.results[0]["cve-ppi"]);
    var res = d.results[0],
        data = {
          cve_ppi : res["cve-ppi"],
          nombre : res["nombre"]
        },
    GFapp = new Vue({
      el   : '#GF-card',
      data : data
    })
  });
    

