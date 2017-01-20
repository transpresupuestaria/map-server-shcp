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
        <option>Todos</option>
        <option>2016</option>
        <option>2015</option>
        <option>2014</option>
        <option>2013</option>
        <option>2012</option>
      </select>
      <!--state-->
      <h3>Entidad Federativa</h3>
      <select>
        <option>Todos</option>
        <option>Oaxaca</option>
        <option>Puebla</option>
      </select>
      <!--branch-->
      <h3>Ramo</h3>
      <select>
        <option>Selecciona un Ramo</option>
        
      </select>
      <h3>Ejecutor</h3>
      <select>
        <option>Todos los Ejecutores</option>
      
      </select>
      <!--pojects
      <h3>Proyectos</h3>
      <a href="#" class="agp selected"><b></b> Agricultura, Ganadería y Pesca <span>(22)</span></a>
      <a href="#" class="asp"><b></b> Asociación público-privada<span>(7)</span></a>
      -->
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
<script src="js/main.js"></script>
  
</body>
</html>