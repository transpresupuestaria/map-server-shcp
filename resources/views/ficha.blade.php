<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@{{nombre}}</title>
  <meta name="description" content="@{{desc_ppi}}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/styles.css"/>
  <script src="js/modernizr.custom.js"></script>
</head>
<body class="record">
  <!--header-->
  <div class="col-sm-3 zero">
    <header class="top">
     <a class="tp">Transparencia Presupuestaria</a>
    </header>
  </div>
  <div class="col-sm-9 zero">
    <header class="top title_side">
      <a href="index.html" class="link_back">&lt; Ir a Mapa de Obra Pública</a>
    </header>
  </div>
  <div class="clearfix"></div>
<div class="container">
  <!--content-->
  <section class="GF-card">
    <!--titles -->
    <div class="row">
      <div class="col-sm-10">
        <div class="row">
          <div class="col-sm-6">
            <h3>Programa o Proyecto de Inversión
              <!--tooltip-->
              <span class="tooltip">
                <span class="tooltip-item">(PPI) <b>?</b></span>
                <span class="tooltip-content clearfix">
                  <span class="tooltip-text"><strong>Programa o Proyecto de Inversión,</strong> es el nombre del programa o proyecto de inversión establecido por cada unidad responsable, que lo identifica claramente.</span>
                </span>
              </span>
            </h3>
          </div>
          <!--- clave de cartera-->
          <div class="col-sm-6">
            <h3 class="right">Clave de Cartera: <span>@{{cve_ppi}}</span></h3>
          </div>
        </div>
        <h1>@{{nombre}}</h1>




        <div class="row">
          <div class="col-sm-10">
            <p>@{{desc_ppi}}</p>
          </div>
          <div class="col-sm-2">
            <h3 class="right">Fase: <span class="active">Vigente</span></h3>
          </div>
        </div>
      </div>
      <div id="arc_side" class="col-sm-2 side">
        <h3>Avance Físico</h3>
      </div>
    </div>

    <!--mapa y montos-->
    <div class="row">
      <div class="col-sm-9">
        <div class="row">
          <!-- Ramo-->
          <div class="col-sm-4">
            <h3 class="title line">
              <!--tooltip-->
              <span class="tooltip">
                <span class="tooltip-item">Ramo <b>?</b></span>
                <span class="tooltip-content clearfix">
                  <span class="tooltip-text"><strong>Ramo</strong>. Categoría administrativa a la que pertenece el programa presupuestario, de acuerdo con la estructura programática del PEF vigente</span>
                </span>
              </span>


            </h3>
            <p class="fichas_ramo"><b class="pemex"></b>@{{id_ramo}} - @{{desc_ramo}}</p>
          </div>
          <!-- Ejecutor-->
          <div class="col-sm-4">
            <h3 class="title line">Ejecutor del Proyecto</h3>
            <p>@{{id_ur}} - @{{desc_ur}}</p>
          </div>
          <!-- Tipo de proyecto-->
          <div class="col-sm-4">
            <h3 class="title line">
              <!--tooltip-->
              <span class="tooltip">
                <span class="tooltip-item">Tipo de Proyecto <b>?</b></span>
                <span class="tooltip-content clearfix">
                  <span class="tooltip-text">Descripción del tipo de programa o proyecto de inversión a ejecutar, de acuerdo con su finalidad y función</span>
                </span>
              </span>
            </h3>
            <p>@{{ tipo_ppi }}</p>
          </div>
        </div>

        <!--mapa-->
        <iframe width="100%" height="350px" frameborder="0" scrolling="no" v-bind:src="map_src"></iframe>

        <div class="info location">
          <div class="row">
            <div class="col-sm-4">
              <h3 class="title">Programa Presupuestario</h3>
              <p><a href="#" title="Conoce su desempeño">11S243 – Programa Nacional de Petróleo</a></p>
            </div>
            <!---entidad-->
            <div class="col-sm-4">
              <h3 class="title">Entidad Federativa</h3>
              <p>	@{{entidad_federativa}}</p>
            </div>
            <!---coordenadas---->
            <div class="col-sm-4">
              <h3 class="title">Coordenadas Geográficas</h3>
              <p>Latitud: @{{latitud_inicial}} <br> Longitud: @{{longitud_inicial}}</p>
            </div>


          </div>
        </div>
      </div>
      <div class="col-sm-3 side">
        <!-- monto total-->
        <h3>
          <!--tooltip-->
          <span class="tooltip">
            <span class="tooltip-item">Monto total de inversión <b>?</b></span>
            <span class="tooltip-content clearfix">
              <span class="tooltip-text">La suma de la totalidad de recursos destinados a la ejecución de un programa o proyecto de inversión, incluyendo los recursos fiscales y los recursos que se obtienen de otras fuentes de financiamiento</span>
            </span>
          </span>
        </h3>
        <p class="amount big right">$<strong>@{{monto_total_inversion}}</strong> <span>MXN</span></p>
        <div class="bar">
          <span class="bar inside total"></span>
        </div>
        <!-- pef-->
        <h3>Presupuesto aprobado en el PEF 2016</h3>
        <p class="amount right">$<strong>@{{aprobado}}</strong> <span>MXN</span></p>
        <div class="bar">
          <span class="bar inside pef" v-bind:style="presupuesto_style"></span>
        </div>
        <!-- ejercido-->
        <h3>Monto ejercido 2016</h3>
        <p class="amount right">$<strong>@{{+ejercido}}</strong> <span>MXN</span></p>
        <div class="bar">
        <span class="bar inside ejercido" v-bind:style="total_ejercido_style"></span>

        </div>
        <!-- modificado-->
        <h3>Presupuesto modificado</h3>
        <p class="amount right">$<strong>@{{modificado}}</strong> <span>MXN</span></p>
        <div class="bar">
          <span class="bar inside modificado" v-bind:style="modificado_style"></span>
        </div>
        <!-- reporta obra-->
        <button id="show-modal" @click="showModal = true" class="btn report trigger">Reporta esta obra</button>
  
  
      </div>
    </div>
  </section>

  <!--calendario fiscal-->
  <section class="GF-card">
    <div class="row">
      <div class="col-sm-12">
        <h2>Calendario Fiscal
          <!--tooltip-->
          <span class="tooltip">
            <span class="tooltip-item"> <b>?</b> <span class="h2title">Calendario Fiscal</span></span>
            <span class="tooltip-content clearfix">
              <span class="tooltip-text">Monto máximo de recursos programados por la dependencia para ejercer durante el año. Se diferencia del aprobado porque no depende de sus capacidades de pago sino de estimaciones propias de la dependencia.</span>
            </span>
          </span>
        </h2>
      </div>
      <!--inicio-->
      <div class="col-sm-4">
        <h3>Fecha de inicio de inversión:</h3>
        <p>@{{fecha_ini_cal_fiscal}}</p>
      </div>
      <!--término-->
      <div class="col-sm-4">
        <h3>Fecha de término de inversión:</h3>
        <p>@{{fecha_fin_cal_fiscal}}</p>
      </div>
      <!--total-->
      <div class="col-sm-4">
        <h3>Monto total de inversión:</h3>
        <p>@{{monto_total_inversion}}</p>
      </div>
      <!--gráfica-->
      <div class="col-sm-9">
        <div id="graph" class="graph">
        </div>
      </div>
      <!--tabla-->
      <div class="col-sm-3 side">
        <table class="table">
          <thead>
            <tr>
              <th>Año de Inversión</th>
              <th>Monto</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>2017</td>
            <td class="right"><strong>$109,814,311</strong></td></tr>
            <tr><td>2016</td>
            <td class="right"><strong>$101,313,120</strong></td></tr>
            <tr><td>2015</td>
            <td class="right"><strong>$208,539,823</strong> </td></tr>
            <tr><td>2014</td>
            <td class="right"><strong>$54,564,412 </strong>  </td></tr>
            <tr><td>2013</td>
            <td class="right"><strong>$300,157,683</strong> </td></tr>
            <tr><td>2012</td>
            <td class="right"><strong>$215,044,846</strong> </td></tr>
            <tr><td>2011</td>
            <td class="right"><strong>$25,873,394 </strong>  </td></tr>
            <tr><td>2010</td>
            <td class="right"><strong>$25,741,318 </strong>  </td></tr>
            <tr><td>2009</td>
            <td class="right"><strong>$12,287,059 </strong>  </td></tr>
            <tr><td>2008</td>
            <td class="right"><strong>$4,337,408  </strong>  </td></tr>
            <tr><td>2007</td>
            <td class="right"><strong>$0      </strong>  </td></tr>
            <tr><td>2006</td>
            <td class="right"><strong>$2,385    </strong>  </td></tr>

          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!--otras fuentes-->
  <section class="GF-card">
    <div class="row">
      <div class="col-sm-12">
        <h2>Otras fuentes de financiamiento</h2>
        <p>No se ha reportado información sobre otras fuentes de financiamiento de este PPI.</p>
      </div>
    </div>
  </section>

  <!--operación-->
  <section class="GF-card">
    <div class="row">
      <div class="col-sm-12">
        <h2>Datos sobre la etapa de operación</h2>
      </div>
      <!--años-->
      <div class="col-sm-3">
        <p class="amount"><strong>@{{anios_he}}</strong> años</p>
        <p class="lead">Número estimado de años de operación en el horizonte de evaluación
          <!--tooltip-->
          <span class="tooltip">
            <span class="tooltip-item"><b>?</b></span>
            <span class="tooltip-content clearfix">
              <span class="tooltip-text">Período que comprende tanto la etapa de ejecución como de operación de un programa o proyecto de inversión</span>
            </span>
          </span>
        </p>
      </div>
      <!--gastos-->
      <div class="col-sm-3">
        <p class="amount">$<strong>@{{total_gasto_operacion_he}}</strong></p>
        <p class="lead">Gastos estimados totales de mantenimiento y operación del activo en el horizonte de evaluación </p>
      </div>
      <!--otros costos-->
      <div class="col-sm-3">
        <p class="amount">$@{{total_gasto_no_consid}}</p>
        <p class="lead">Otros costos y gastos asociados al PPI que no forman parte del gasto de inversión ni de los gastos de operación y mantenimiento </p>
      </div>
      <!--costo total-->
      <div class="col-sm-3">
        <p class="amount">$<strong>@{{costo_total_ppi}}</strong></p>
        <p class="lead">Costo Total del PPI  </p>
      </div>
    </div>
  </section>

  <!--metas -->
  <section class="GF-card">
    <div class="row">
      <div class="col-sm-12">
        <h2>Metas</h2>
      </div>
      <!--física-->
      <div class="col-sm-6">
        <h3 class="title">
          <!--tooltip-->
          <span class="tooltip">
            <span class="tooltip-item">Meta Física <b>?</b></span>
            <span class="tooltip-content clearfix">
              <span class="tooltip-text">La producción de bienes y servicios que se pretenden alcanzar con el programa o proyecto de inversión</span>
            </span>
          </span>
        </h3>
        <p>@{{meta_fisica}}</p>
      </div>
      <!--física-->
      <div class="col-sm-6">
        <h3 class="title">

          <!--tooltip-->
          <span class="tooltip">
            <span class="tooltip-item">Beneficios esperados del PPI <b>?</b></span>
            <span class="tooltip-content clearfix">
              <span class="tooltip-text">@{{meta_beneficios}}</span>
            </span>
          </span>
        </h3>
        <p>Reducir el gasto de operación por concepto del flete en el suministro de combustibles a la TAR Tapachula desde Salina Cruz, para asegurar el abasto en la zona.</p>
      </div>
    </div>
  </section>

  <!--responsable---------->
  <section class="GF-card">
    <div class="row">
      <div class="col-sm-12">
        <h2>Responsable</h2>
        <table class="table">
          <thead>
            <th>Nombre</th>
            <th>Apellido Materno</th>
            <th>Apellido Paterno  </th>
            <th>Cargo       </th>
            <th>Correo electrónico  </th>
            <th>Teléfono      </th>
          </thead>
          <tbody>
            <tr>
              <td>@{{nombre_admin}}              </td>
              <td>@{{ap_paterno_admin}}            </td>
              <td>@{{ap_materno_admin}}               </td>
              <td>@{{cargo_admin}}             </td>
              <td><a v-bind:href="mail_to_admin">@{{mail_admin}}</a></td>
              <td>@{{telefono_admin}}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!--documentos adjuntos-
  <section class="GF-card">
    <div class="row">
      <div class="col-sm-12">
        <h2>Documentos Adjuntos</h2>
        <table class="table">
          <thead>
            <th>Nombre</th>
            <th>Tipo de Documento</th>
            <th>Fecha</th>
          </thead>
          <tbody>
            <tr>
              <td><a href="#" download>12 0518T4M0007 TAPACHULA CMYA pib.pdf</a></td>
              <td>Análisis Costo y Beneficio</td>
              <td>30-06-2015 18:16:01</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>
--------->
  <!-- reportar-->
  <section class="GF-card">
    <div class="row">
      <div class="col-sm-12">
        <p class="update right">Información actualizada al primer trimestre de 2016</p>
      </div>
      <div class="col-sm-12">
        <a id="red" class="btn report large trigger" data-dialog="somedialog">Reporta esta Obra</a>
      </div>
    </div>
    
    <!-- use the modal component, pass in the prop -->
	  <modal v-if="showModal" @close="showModal = false">
	  <!-- content-->
	  <h2 slot="header">Reporta esta obra</h2>
	  
  <!--  -->
    <p slot="header">Realiza tu reporte ciudadano para este proyecto:</p>
    <div class="dialog-container" slot="body">
      <div class="row">
        <div class="col-sm-4">
          <a href="#" class="btn_type">
            <span class="btn-content">No coincide el avance físico  que aparece en el PTP con el que ves en la obra</span>
            <span class="btn-symbol" id ="rpt-advance">Reportar</span>
          </a>
        </div>
        <div class="col-sm-4">
          <a href="#" class="btn_type">
            <span class="btn-content">La obra ha sido abandonada</span>
            <span class="btn-symbol">Reportar</span>
          </a>
        </div>
        <div class="col-sm-4">
          <a href="#" class="btn_type">
            <span class="btn-content">Existe un error en la localización</span>
            <span class="btn-symbol">Reportar</span>
          </a>
        </div>
      </div>
      <h3 slot="footer">Preguntas Frecuentes</h3>
      <ul id="toggle-view" slot="footer">
        <li>
          <h4>¿Qué es un reporte ciudadano?</h4>
          <span>+</span>
          <div class="panel">
          Aviso que realiza cualquier interesado, a través de medios electrónicos, sobre posibles observaciones relacionadas con la ubicación, avances físicos y financieros o condiciones físicas de los programas y proyectos de inversión registrados en la Cartera de Inversión y en proceso de ejecución, susceptibles de ser georreferenciados.</div>
        </li>
        <li><h4>¿Puedo presentar una queja o denuncia sobre algún funcionario público en particular a través de la plataforma?</h4>
          <span>+</span>
          <div class="panel">Para ello, la Secretaría de la Función Pública pone a disposición de los ciudadanos distintos mecanismos que se pueden consultar a través de la página <a href="http://www.funcionpublica.gob.mx/index.php/temas/quejas-y-denuncias.html">http://www.funcionpublica.gob.mx/index.php/temas/quejas-y-denuncias.html</a></div>
        </li>
        <li><h4>¿Qué es la Cartera de Inversión?</h4>
          <span>+</span>
          <div class="panel">La Cartera es un sistema electrónico que contiene la información de todos los programas y proyectos de inversión que las dependencias y entidades de la Administración Pública Federal registraron y que demostraron tener beneficios para la población (rentables socioeconómicamente).</div>
        </li>
        <li>
          <h4>¿Cuál es el procedimiento para registrar un proyecto de inversión?</h4>
          <span>+</span>
          <div class="panel">El proceso comienza con la identificación de necesidades de la población por parte de las dependencias y entidades de la Administración Pública Federal, las cuales analizan, evalúan y formulan proyectos o programas de inversión con el fin de satisfacer dichas necesidades. La solicitud de registro, la cual debe cumplir con la normatividad vigente, la realizan las dependencias y entidades mediante los sistemas informáticos de la Secretaría de Hacienda y Crédito Público (SHCP). Posteriormente, la solicitud es revisada por la Unidad de Inversiones de la SHCP y una vez que el proyecto demuestra que tiene beneficios para la población, se le otorga el registro en la Cartera de Inversión.</div>
        </li>
        <li><h4>¿Por qué no se ha aprobado mi proyecto?</h4>
          <span>+</span>
          <div class="panel">Sólo los programas y proyectos que las dependencias y entidades de la Administración Pública Federal registran en los sistemas informáticos de la SHCP son susceptibles de registro en la Cartera. Para que los proyectos puedan ser aprobados, deben cumplir los requisitos establecidos en la normatividad vigente, por lo que son revisados estrictamente para poder ser autorizados.</div>
        </li>
        <li>
          <h4>¿Por qué mi proyecto no recibió recursos?</h4>
          <span>+</span>
          <div class="panel">Derivado del hecho que los recursos son limitados, la dependencia o entidad determina, de acuerdo con su planeación, qué proyectos son prioritarios para asignarles recursos durante el ejercicio fiscal, además, dichos recursos son aprobados por la Cámara de Diputados, junto con la totalidad del Presupuesto de Egresos de la Federación, en el mes de noviembre de cada año.</div>
        </li>
        <li>
          <h4>¿Cuál es la normatividad vigente para registrar un proyecto de inversión?</h4>
          <span>+</span>
          <div class="panel">Para llevar a cabo el registro de un programa o proyecto de inversión se debe cumplir lo establecido en los Lineamientos para el registro en la cartera de programas y proyectos de inversión, los cuales se encuentran disponibles en la página de la SHCP: <a href="http://www.shcp.gob.mx/LASHCP/MarcoJuridico/ProgramasYProyectosDeInversion/Paginas/lineamientos.aspx">http://www.shcp.gob.mx/LASHCP/MarcoJuridico/ProgramasYProyectosDeInversion/Paginas/lineamientos.aspx</a></div>
        </li>
      </ul>
      <a href="http://transparenciapresupuestaria.gob.mx/es/PTP/PreguntasFrecuentes" class="btn more">Más preguntas frecuentes</a>
	  
	  </modal>
    
  </section>
  
</div><!--ends container-->

  <!--footer------->
  <footer>
    <div class="container">
      <div class="content">
        <div class="row">
          <div class="col-sm-4">
            <h3>Contacto</h3>
             <p class="data">Palacio Nacional <br>
               Plaza de la Constitución s/n<br>
               Colonia Centro, Delegación Cuauhtémoc<br>
               México, Ciudad de México</p>
          </div>

          <div class="col-sm-4">
            <ul>
              <li><a class="linksfoot" href="/es/PTP/Glosario">Glosario</a></li>
              <li><a class="linksfoot" href="/es/PTP/Mapa_de_Sitio">Mapa de sitio</a></li>
              <li><a class="linksfoot" href="/es/PTP/Estadisticas">Estadísticas del Portal</a></li>
            </ul>
            <ul>
              <!--fb-->
              <li><a href="http://www.facebook.com/TransparenciaPresupuestaria" class="fb" target="_blank">Facebook</a></li>
              <!--tw-->
              <li><a href="//twitter.com/TPresupuestaria" class="tw" target="_blank">Twitter</a></li>                 <!--youtube-->
              <li> <a href="http://www.youtube.com/channel/UCokAhIwndny0k2ROksI-qqg?sub_confirmation=1" class="youtube" title="Youtube" target="_blank">Youtube</a>
              </li>
              <li> <a href="mailto:trans_presupuestaria@hacienda.gob.mx" target="_blank" class="email" title="trans_presupuestaria@hacienda.gob.mx">Email</a></li>
            </ul>
          </div>

          <div class="col-sm-4 right">
            <h3>Última actualización:</h3>
             <p class="data">Jueves 1 de diciembre de 2016 a las 14:25 hrs.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="author">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <p class="data"><a href="http://www.transparenciapresupuestaria.gob.mx/" class="tp">Transparencia Presupuestaria</a> <a href="#" class="linksfoot">Términos y Condiciones del uso de la información.</a></p>
          </div>
          <div class="col-sm-4">
            <p class="data center"><a href="http://www.gobiernofacil.com" class="gobiernofacil" title="Ir a Gobierno Fácil">Gobierno Fácil</a></p>
          </div>
          <div class="col-sm-4">
            <p class="data right"><a href="http://www.hacienda.gob.mx" class="shcp">Secretaría de Hacienda y Crédito Público</a><span class="clearfix"></span></p>

          </div>
        </div>
      </div>
    </div>
  </footer>

<!-- dialog -->
<div id="somedialog" class="dialog">
  <div class="dialog__overlay"></div>
  <div class="dialog__content">
    
    </div>

  </div>
</div>

<!-- template for the modal component -->
<script type="text/x-template" id="modal-template">
  <transition name="modal">
    <div class="modal-mask">
      <div class="modal-wrapper">
        <div class="modal-container">

          <div class="modal-header">
            <slot name="header">
              default header
            </slot>
          </div>

          <div class="modal-body">
            <slot name="body">
              default body
            </slot>
          </div>

          <div class="modal-footer">
            <slot name="footer">
              default footer
              <button class="modal-default-button" @click="$emit('close')">
                OK
              </button>
            </slot>
          </div>
        </div>
      </div>
    </div>
  </transition>
</script>


  


<!-- scripts -->
<script src="js/d3.v3.min.js"></script>
<script src="js/jquery-3.1.1.min.js"></script>


<!-- la dona del avance-->
<script>
	
function avance_GF_donitas(elvalor){	
	var width = 160,
	    height = 130,
		radius = Math.min(width, height) / 2;

		var color = d3.scale.ordinal()
		    .range(["rgb(190,205,81)","rgb(210,210,210)"]);
		
		var arc = d3.svg.arc()
		    //.outerRadius(radius - 10)
		    .outerRadius(function(d,i) {
		      if(i==0) {
		        return radius - 10;
		      }
		      else {
		       return radius - 20;
		      }
		   })
		  //.innerRadius(radius - 25);
		    .innerRadius(function(d,i) {
		      if(i==0) {
		        return radius - 25;
		      }
		      else {
		       return radius - 15;
		      }
		   });
		
		var pie = d3.layout.pie()
		    .sort(null)
		    .value(function(d) { return d.amount; });
		
		var svg = d3.select("#arc_side").append("svg")
		    .attr("width", width)
		    .attr("height", height)
		  .append("g")
		    .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")");
		
		var data = [
		    {"amount": elvalor },
		    {"amount": 100-elvalor}
		  ];
		
		var g = svg.selectAll(".arc")
		      .data(pie(data))
			  .enter().append("g")
		      .attr("class", "arc");
		
		  g.append("path")
		      .attr("d", arc)
		      .style("fill", function(d) { return color(d.data.amount); });
		
		  g.append("text")
		      .attr("transform",  "translate(-25)")
		      .attr("dy", ".35em")
		      .text(function(d, i) {
		        if(i==0) {
		         return d.data.amount + "%";
		        }
		      })
		    .attr("class", "text_arc");
		
		
		function type(d) {
			d.amount = +d.amount;
			return d;
		} 
}	
</script>

<script>
var margin = {top: 20, right: 20, bottom: 30, left: 120},
    width = 800 - margin.left - margin.right,
    height = 450 - margin.top - margin.bottom;


var x = d3.scale.linear()
    .range([0, width]);

var y = d3.scale.linear()
    .range([height, 0]);

var xAxis = d3.svg.axis()
    .scale(x)
    .orient("bottom");

var yAxis = d3.svg.axis()
    .scale(y)
    .orient("left");

var line = d3.svg.line()
    .x(function(d) { return x(d.year); })

    .y(function(d) { return y(d.amount); });


var svg = d3.select("#graph").append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

  var data = [

  {
    "year": 2017,
    "amount": 109814311
  },
  {
    "year": 2016,
    "amount": 101313120
  },
  {
    "year": 2015,
    "amount": 208539823
  },
  {
    "year": 2014,
    "amount": 54564412
  },
  {
    "year": 2013,
    "amount": 300157683
  },
  {
    "year": 2012,
    "amount": 215044846
  },
  {
    "year": 2011,
    "amount": 25873394
  },
  {
    "year": 2010,
    "amount": 25741318
  },
  {
    "year": 2009,
    "amount": 12287059
  },
  {
    "year": 2008,
    "amount": 4337408
  },
  {
    "year": 2007,
    "amount": 0
  },
  {
    "year": 2006,
    "amount": 2385
  }

  ];



  x.domain(d3.extent(data, function(d) { return d.year; }));
  y.domain([0, d3.max(data, function(d) { return d.amount; })]);



  svg.append("g")
      .attr("class", "x axis")
      .attr("transform", "translate(0," + height + ")")
      .call(xAxis);

  svg.append("g")
      .attr("class", "y axis")
      .call(yAxis);

       svg.append("path")
      .datum(data)
      .attr("class", "line")
      .attr("d", line);


</script>

    

    <script>
$(document).ready(function () {

   
  $('#toggle-view li').click(function () {

    var text = $(this).children('div.panel');

    if (text.is(':hidden')) {
      text.slideDown('200');
      $(this).children('span').html('-');
    } else {
      text.slideUp('200');
      $(this).children('span').html('+');
    }

  });
  
  
  /*
  (function() {

        var dlgtrigger = document.querySelector( '[data-dialog]' ),
          somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialog' ) ),
          dlg = new DialogFx( somedialog );

        dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );

      })();
  */
});
</script>

  <script src="js/bower_components/vue/dist/vue.min.js"></script>
  <script src="js/card.js"></script>
  <script>
  /****** API **********/
  var appKey = '5825343BB68F29D2A881B2E8D205B98846C95558';
  $(document).ready(function(){

   //Reporte por inconsistencia en avance físico
   $('#rpt-advance').click(function(){
     var carteraId = "",
         ejecutor  = "",
         programa  = "",
         entidad   = "",
         motivo    = "",
         dependencia = "asd",
         estadoId ="",
         paisId="";
    var dataAPI = {"ciudadano":{"anonimo":true,"genero":"HOMBRE"},"dependencia":dependencia,"estado":4,"motivoPeticion":"Prueba","otroPais":null,"pais":2,"queSolicitaron":null,"solictaronDinero":false};
console.log(dataAPI);
     $.ajax({
       beforeSend: function(xhrObj){
                 xhrObj.setRequestHeader("app-key",appKey);
         },
       type: "POST",
       url: "http://devretociudadano.funcionpublica.gob.mx/SidecWS/resources/quejadenuncia/registrarPeticion",
       contentType: 'application/json; charset=utf-8',
       dataType:"json",
       headers:{"app-key":appKey},
       data: JSON.stringify(dataAPI),
       success: function(dataRe){
           console.log(dataRe);
         }
     });
   });
  });
  </script>
</body>
</html>
