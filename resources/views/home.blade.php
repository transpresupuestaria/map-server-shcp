<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Transparencia presupuestaria</title>
  <meta name="description" content="Mapas">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/styles.css"/>
  <link rel="stylesheet" type="text/css" href="js/bower_components/leaflet/dist/leaflet.css">
</head>
<body>
  <div id="map"> 
    <!--<iframe width="100%" height="100%" frameborder="0" scrolling="no" src="http://www.openstreetmap.org/export/embed.html?bbox=-129.94628906250003%2C7.100892668623654%2C-78.26660156250001%2C36.94989178681327&amp;layer=mapnik"></iframe>-->
    <!--<div id="GF-SHCP-map" style="width: 500px; height: 500px; background: black"></div>-->
    <div id="GF-SHCP-map" style="width:100%; height:100%; frameborder:0; scrolling:no;"></div>
  </div>
  
  <div class="col-sm-3 zero sidebar">
    <header class="top">
     <a class="tp">Transparencia Presupuestaria</a>
    </header>
    <div class="col-sm-2 zero">
      <ul class="main_nav">
        <li><a href="#" class="i_money">money</a></li>
        <li><a href="#" class="i_alert">alert</a></li>
        <li class="current"><a href="#" class="i_opa">Obra Pública Abierta</a></li>
        <li><a href="#" class="i_ramo23">Ramo 23</a></li>
        <li><a href="#" class="i_escuelas">Escuelas</a></li>
      </ul>
    </div>
    <div class="col-sm-10 filter_container">
      <!--year-->
      <h3>Año</h3>
      <select id="GF-SHCP-year-selector">
        <option value="all">Todos</option>
        <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
      </select>
      <!--state-->
      <h3>Entidad Federativa</h3>
      <select id="GF-SHCP-state-selector">
        <option value="all">Todas</option>
        <option value="1">Aguascalientes</option>
        <option value="2">Baja California</option>
        <option value="3">Baja California Sur</option>
        <option value="4">Campeche</option>
        <option value="5">Coahuila de Zaragoza</option>
        <option value="6">Colima</option>
        <option value="7">Chiapas</option>
        <option value="8">Chihuahua</option>
        <option value="9">Distrito Federal</option>
        <option value="10">Durango</option>
        <option value="11">Guanajuato</option>
        <option value="12">Guerrero</option>
        <option value="13">Hidalgo</option>
        <option value="14">Jalisco</option>
        <option value="15">México</option>
        <option value="16">Michoacán de Ocampo</option>
        <option value="17">Morelos</option>
        <option value="18">Nayarit</option>
        <option value="19">Nuevo León</option>
        <option value="20">Oaxaca</option>
        <option value="21">Puebla</option>
        <option value="22">Querétaro</option>
        <option value="23">Quintana Roo</option>
        <option value="24">San Luis Potosí</option>
        <option value="25">Sinaloa</option>
        <option value="26">Sonora</option>
        <option value="27">Tabasco</option>
        <option value="28">Tamaulipas</option>
        <option value="29">Tlaxcala</option>
        <option value="30">Veracruz de Ignacio de la Llave</option>
        <option value="31">Yucatán</option>
        <option value="32">Zacatecas</option>
      </select>
      <!--branch-->
      <h3>Ramo</h3>

      <select id="GF-SHCP-branch-selector">
        <option value="all">todos</option>
        <option value="2">Oficina de la Presidencia de la República</option>
        <option value="4">Gobernación</option>
        <option value="5">Relaciones Exteriores</option>
        <option value="6">Hacienda y Crédito Público</option>
        <option value="7">Defensa Nacional</option>
        <option value="8">Agricultura, Ganadería, Desarrollo Rural, Pesca y Alimentación</option>
        <option value="9">Comunicaciones y Transportes</option>
        <option value="10">Economía</option>
        <option value="11">Educación Pública</option>
        <option value="12">Salud</option>
        <option value="13">Marina</option>
        <option value="14">Trabajo y Previsión Social</option>
        <option value="15">Desarrollo Agrario, Territorial y Urbano</option>
        <option value="16">Medio Ambiente y Recursos Naturales</option>
        <option value="17">Procuraduría General de la República</option>
        <option value="18">Energía</option>
        <option value="20">Desarrollo Social</option>
        <option value="21">Turismo</option>
        <option value="27">Función Pública</option>
        <option value="31">Tribunales Agrarios</option>
        <option value="32">Tribunal Federal de Justicia Administrativa</option>
        <option value="37">Consejería Jurídica del Ejecutivo Federal</option>
        <option value="38">Consejo Nacional de Ciencia y Tecnología</option>
        <option value="47">Entidades no Sectorizadas</option>
        <option value="50">Instituto Mexicano del Seguro Social</option>
        <option value="51">Instituto de Seguridad y Servicios Sociales de los Trabajadores del Estado</option>
        <option value="52">Petróleos Mexicanos</option>
        <option value="53">Comisión Federal de Electricidad</option>
      </select>
      
      <h3>Clasificación</h3>
      <select id="GF-SHCP-class-selector">
        <option value="all">Todas</option>
        <option value="Agricultura, Ganadería, Desarrollo Rural, Pesca y Alimentación">Agricultura, Ganadería, Desarrollo Rural, Pesca y Alimentación</option>
        <option value="Asociación Público-Privada">Asociación Público-Privada</option>
        <option value="Comunicaciones y Transportes">Comunicaciones y Transportes</option>
        <option value="Desarrollo económico">Desarrollo económico</option>
        <option value="Desarrollo Social">Desarrollo Social</option>
        <option value="Educación">Educación</option>
        <option value="Energía">Energía</option>
        <option value="Gobierno">Gobierno</option>
        <option value="Medio Ambiente">Medio Ambiente</option>
        <option value="Salud">Salud</option>
        <option value="Seguridad">Seguridad</option>
        <option value="Turismo">Turismo</option>
        <!--<option value="">Sin clasificación</option>-->
      </select>
      
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="col-sm-9 col-sm-offset-3 zero">
    <header class="top title_side">
      <h1>Obra Pública Abierta: <span>Todo México</span></h1>
    </header>
    
  </div>

  <!-- http://localhost:8000/api/data -->
<script src="js/bower_components/d3/d3.min.js"></script>
<script src="js/bower_components/leaflet/dist/leaflet.js"></script>
<script src="js/bower_components/underscore/underscore.js"></script>
<script src="js/main.js"></script>
  
</body>
</html>