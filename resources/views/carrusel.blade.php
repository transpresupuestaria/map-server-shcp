<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@{{nombre}}</title>
  <meta name="description" v-bind:content="desc_ppi">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/styles.css"/>
  <link rel="stylesheet" type="text/css" href="js/bower_components/leaflet/dist/leaflet.css">
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
      <a href="http://www.transparenciapresupuestaria.gob.mx/en/PTP/Obra_Publica_Abierta" class="link_back">&lt; Ir a Mapa de Obra Pública</a>
    </header>
  </div>
  <div class="clearfix"></div>
<div class="container">
  <!--content-->
  <div id="chupar-faros" style="display: none;">
	  <section>
  	<div class="row">
	  	<div class="col-sm-10 col-sm-offset-1">
	  		<h1>Lo sentimos, algo falló en nuestro sitio</h1>
	  		<h2>¿Qué pudo fallar?</h2>
	  		<ol>
		  		<li>Algo técnico falló</li>
		  		<li>El enlace pudo ser viejo y no se encuentra en el sitio</li>
		  		<li>Accidentalmente escribiste mal la dirección URL </li>
	  		</ol>
	  		<h2>¿Qué puedes hacer?</h2>
	  		<p>Puedes consultar esta página más tarde, o intentar escribir la URL otra vez.</p>
	  		<p>O puedes regresar al mapa de <a href="http://www.transparenciapresupuestaria.gob.mx/en/PTP/Obra_Publica_Abierta" class="link_back">Obra Pública</a>.</p>
	  	</div>
  	</div>
	  </section>
  </div>
  <section class="GF-card">
    
  </section>



 
  <!--calendario fiscal-->
  <section class="GF-card">
    <div class="row">
      <div class="col-sm-12">
	      <div id="demo">
                <vue-images :imgs="images"
                            :modalclose="modalclose"
                            :keyinput="keyinput"
                            :mousescroll="mousescroll"
                            :showclosebutton="showclosebutton"
                            :showcaption="showcaption"
                            :imagecountseparator="imagecountseparator"
                            :showimagecount="showimagecount"
                            :showthumbnails="showthumbnails">
                </vue-images>
              </div>
        </div>
  
    </div>
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
             <p class="right"><a href="http://www.hacienda.gob.mx" class="shcp">Secretaría de Hacienda y Crédito Público</a><span class="clearfix"></span></p>

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
            <p class="data center">Forjado artesanalmente por <a href="http://www.gobiernofacil.com" class="gobiernofacil" title="Ir a Gobierno Fácil">Gobierno Fácil</a></p>
          </div>
          <div class="col-sm-4">
            <p class="data right"><span class="usaid">USAID</span></p>

          </div>
        </div>
      </div>
    </div>
  </footer>


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
            <button class="modal-default-button action" @click="$emit('close')">X</button>
          </div>

          <div class="modal-body">
            <slot name="body">
              default body
            </slot>
          </div>

		 <!--
          <div class="modal-footer">
            <slot name="footer">
              default footer
            </slot>
          </div>
          -->
        </div>
      </div>
    </div>
  </transition>
</script>


<!-- libraries -->
<script src="js/d3.v3.min.js"></script>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bower_components/vue/dist/vue.min.js"></script>
<script src="js/vue-images.js"></script>
<script src="js/bower_components/leaflet/dist/leaflet.js"></script>




<script>
new Vue({
  el: '#demo',
  data () {
    return {
      images: [
        {
          imageUrl: 'https://images.unsplash.com/photo-1454991727061-be514eae86f7?dpr=2&auto=format&w=1024',
          caption: '<a href="#">Photo by 1</a>'
        },
       
        {
          imageUrl: 'https://images.unsplash.com/photo-1460899960812-f6ee1ecaf117?dpr=2&auto=format&w=1024',
          caption: 'Photo by 3'
        },
        {
          imageUrl: 'https://images.unsplash.com/photo-1456926631375-92c8ce872def?dpr=2&auto=format&w=1024',
          caption: 'Photo by 4'
        },
        
      ],
      modalclose: true,
      keyinput: true,
      mousescroll: true,
      showclosebutton: true,
      showcaption: true,
      imagecountseparator: 'of',
      showimagecount: true,
      showthumbnails: true
    }
  },
  components: {
    vueImages: vueImages.default
  }
})
</script>

<!-- code -->
 <script src="js/card.js"></script>
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
