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
        <option value="all">todas</option>
        <option value="0">Todos</option>
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45473222-14', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>