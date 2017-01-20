<!DOCTYPE html>
<html>
<head>
  <title>MAPA puntos</title>
  <link rel="stylesheet" type="text/css" href="js/bower_components/leaflet/dist/leaflet.css">
</head>
<body>
  <h1>Mapa</h1>

  <!-- los controles :D -->
  <form id="GF-SHCP-controls">
    <p>
      <label>ciclo</label>
      <select name="ciclo">
        <option value="all">todos</option>
        <option value="2017">2017</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
      </select>
    </p>

    <p>
      <label>estado</label>
      <select name="estado">
        <option value="all">todos</option>
      </select>
    </p>

    <p>
      <label>ramo</label>
      <select name="ramo">
        <option value="all">todos</option>
      </select>
    </p>

    <p>
      <label>avance</label>
      <select name="avance">
        <option value="all">todos</option>
        <option value="all">75-100%</option>
        <option value="all">50-75%</option>
        <option value="all">25-50%</option>
        <option value="all">0-25%</option>
      </select>
    </p>
  </form>

  <!-- el mapa! -->
  <div id="GF-SHCP-map" style="width: 500px; height: 500px; background: black"></div>

<!-- http://localhost:8000/api/data -->
<script src="js/bower_components/d3/d3.min.js"></script>
<script src="js/bower_components/leaflet/dist/leaflet.js"></script>
<script src="js/bower_components/underscore/underscore.js"></script>
<script src="js/main.js"></script>
</body>
</html>