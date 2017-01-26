//var DatosGobMxURL = "http://localhost:8000/api/test";
var hash = window.location.hash.replace("#", "");
var DatosGobMxURL = "http://api.datos.gob.mx/v1/proyectos-opa?" + encodeURIComponent("cve-ppi") + "='" + hash;
//console.log(window.location.hash);

d3.json(DatosGobMxURL)
  .get(function(e, d){
    var res  = d.results[0],
        data = {


          _id              : res["_id"],
          anios_he         : res["anios-he"],
          ap_materno_admin : res["ap-materno-admin"],
          ap_paterno_admin : res["ap-paterno-admin"],
          aprobado         : res["aprobado"],
          avance_fisico : res["avance-fisico"],
          calendario_fiscal_del_ciclo : res["calendario-fiscal-del-ciclo"],
          cargo_admin : res["cargo-admin"],
          ciclo : res["ciclo"],
          costo_total_ppi : res["costo-total-ppi"],
          cve_ppi : res["cve-ppi"],
          date_insert : res["date_insert"],
          desc_ppi : res["desc-ppi"],
          desc_ramo : res["desc-ramo"],
          desc_ur : res["desc-ur"],
          ejercido : res["ejercido"],
          entidad_federativa : res["entidad-federativa"],
          fecha : res["fecha"],
          fecha_fin_cal_fiscal : res["fecha-fin-cal-fiscal"],
          fecha_fin_ff : res["fecha-fin-ff"],
          fecha_ini_cal_fiscal : res["fecha-ini-cal-fiscal"],
          fecha_ini_ff : res["fecha-ini-ff"],
          id_entidad_federativa : res["id-entidad-federativa"],
          id_ppi : res["id-ppi"],
          id_ramo : res["id-ramo"],
          id_ur : res["id-ur"],
          latitud_inicial : res["latitud-inicial"],
          localizacion : res["localizacion"],
          longitud_inicial : res["longitud-inicial"],
          mail_admin : res["mail-admin"],
          meta_beneficios : res["meta-beneficios"],
          meta_fisica : res["meta-fisica"],
          modificado : res["modificado"],
          monto_total_inversion : res["monto-total-inversion"],
          nombre : res["nombre"],
          nombre_admin : res["nombre-admin"],
          telefono_admin : res["telefono-admin"],
          tipo_ppi : res["tipo-ppi"],
          total_gasto_no_consid : res["total-gasto-no-consid"],
          total_gasto_operacion_he : res["total-gasto-operacion-he"],

          // valores extra
          total_ejercido_style : "width:" + ((res["ejercido"] * 100) / res["costo-total-ppi"]) + "%",

        };

        var fun = [],
            els = document.querySelectorAll(".GF-card");
        for(let i = 0; i < els.length; i++){
          fun.push(new Vue({
               el  : els[i],
              data : data
            })
          );
        }
        /*
        GFapp = new Vue({
          el   : '.GF-card',
          data : data
        });
        */

    console.log(res, data.nombre_admin);
  });
