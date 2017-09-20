<?php get_header() ?>

<section class="banner">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <div class="carousel-inner">
        <?php
          // Retrieve the first gallery in the post
          $gallery = get_post_gallery_images( $post );
          // Loop through each image in each gallery
        	foreach( $gallery as $index=>$image_url ) {
            ?>
            <div class='item <?php $active = ($index === 0 ? 'active' : ''); echo $active;?>' >

                  <img src=<?php echo $image_url; ?> class="imagen_banner">

              <?php
              switch ($index) {
                case 0:
                    echo       '<div class="carousel-caption">';
                    echo          '<h3>Bioparque Los Molles</h3>';
                    echo          '<p> Bioparque Los Molles es  uno de los 5 ecosistemas mediterráneos en el mundo .</p>';
                    echo          '<p>  Único de su tipo en Sudamérica.</p>';
                    echo          '<p>  De belleza natural que sorprende, contiene un ecosistema de inusual riqueza biológica, a sólo 187 kms al norte de Santiago!  Conócelo. </p>';
                    echo          '<p>  Ven, recorre y cuida este parque de una belleza natural que engloba un ecosistema de excepcional riqueza biológica. Descubre las maravillas de este mágico lugar. </p>';
                    echo       '</div>';
                    break;
                case 1:
                    echo       '<div class="carousel-caption">';
                    echo          '<h3>¿Quiénes Somos?</h3>';
                    echo          '<p> BioParque Los Molles es un  proyecto de parque privado que ha asumido el desafío de proteger y conservar un ecosistema de características biológicas únicas para, a su vez, generar un destino tanto científico como turístico en el extremo norte de la V Región. </p>';
                    echo       '</div>';
                    break;
                case 2:
                    echo       '<div class="carousel-caption">';
                    echo          '<h3>Visión</h3>';
                    echo          '<p> Nuestra visión es heredar, en beneficio de la humanidad presente y futura, este hermoso patrimonio natural y cultural, perpetuando su biodiversidad, resguardando su integridad paisajística y sirviendo al desarrollo sustentable de Los Molles. </p>';
                    echo       '</div>';

                    break;
                case 3:
                    echo       '<div class="carousel-caption">';
                    echo          '<h3>Misión</h3>';
                    echo          '<p> Desarrollar y administrar un Parque Natural que permita resguardar, a través de su puesta en valor ecoturístico, sus recursos biológicos, arqueológicos, paleontológicos y paisajísticos, entregando un servicio turístico de calidad basado en una recreación variada y responsable, armonizando con el entorno y orientado a la educación, capacitación y esparcimiento.  Todo esto con el objeto de dar a conocer tanto a la comunidad local y nacional, como internacional, la importancia y fragilidad de los ecosistemas semideséricos.</p>';
                    echo       '</div>';

                    break;
                  }
                ?>

            </div>
          <?php
        	}
         ?>
      </div>
      <!-- Wrapper for slides -->


      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>
<section class="texto_mapa">
  <style>
  .texto_mapa {
    background-image: url("<?php echo get_stylesheet_directory_uri('')?>/assets/images/wov2.png ?>");

  }
  </style>
  <div class="container">
    <div class="espaciador">
      <b>
      <h2> " El Bioparque posee una extensión de 200 hectáreas, insertado dentro de una extensión de terreno declarado Sitio Prioritario de Biodiversidad .</h2>
      <h2>  Conoce sus particulares riquezas biológicas y su increíble biodiversidad.</h2>
      <h2> En este fascinante recorrido puedes conocer variados atractivos naturales: flora y fauna, piscinas naturales y la espectacular vista del parque en toda su magnitud. "</h2>
      </b>
    </div>
  </div>
</section>
</section>
<section class= "mapa_terreno">
   <div id="mapid"></div>
   <script>

      // var mymap = L.map('mapid').setView([-32.23371296980229, -71.5195369720459], 14);
      var mymap = L.map('mapid', {
          center: [-32.23371296980229, -71.5195369720459],
          zoom: 14,
          scrollWheelZoom: false
        });
      L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/outdoors-v10/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoiZW5yZWRhZGVyYSIsImEiOiJjajdwM29rbHcxeG1kMzNycmtrb2thN3lqIn0.6VBUqG0LKCRnrJO4If7Ydw', {
      attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
      maxZoom: 30,
      id: 'mapbox.light',
      accessToken: 'pk.eyJ1IjoiZW5yZWRhZGVyYSIsImEiOiJjajdwM29rbHcxeG1kMzNycmtrb2thN3lqIn0.6VBUqG0LKCRnrJO4If7Ydw'
      }).addTo(mymap);
      mymap.once('focus', function() { mymap.scrollWheelZoom.enable(); });
      mymap.on('click', function() {
       if (mymap.scrollWheelZoom.enabled()) {
         mymap.scrollWheelZoom.disable();
         }
          else {
         mymap.scrollWheelZoom.enable();
         }
       });


   </script>
<section>

<section class="seccion_horarios">
  <style>
  .seccion_horarios {
    background-image: url("<?php echo get_stylesheet_directory_uri('')?>/assets/images/wovverde.png ?>");

  }
  </style>
  <div class="container">
    <div class="row">
      <div class="col-md-6 horarios ">
        <h2>Abierto: </h2>
        <h3>Lunes a Domingo de 9:30 a 19:00</h3>
        <h2>Valor entrada:</h2>
        <h3>Niños $ 600  Adultos $ 1.200 </h3>
      </div>
      <div class="col-md-6 horarios" >
        <script>
        $( document ).ready(function() {
           $.ajax({
           url: "http://api.openweathermap.org/data/2.5/weather?lat=-32.23560061305293&lon=-71.52052402496338&appid=9911d6ea12cd4363a30d8f43e61e41c2&units=metric&lang=es",
           method: 'GET'

           }).then(function(data) {
              var id_icono = data.weather[0].icon;
              var princ = "http://openweathermap.org/img/w/";
              var final = ".png"
              var temperatura = Math.round(data.main.temp);
              $(".temperatura").text(temperatura);
              $(".descripcion").text(data.weather[0].description);
              $(".humedad").text(data.main.humidity);
              $(".viento").text(data.wind.speed);
              $(".icono").html('<img src="' + princ + id_icono + final + '">');;

           });
        });
        </script>
        <h2>Temperatura: <span class = "temperatura"></span> ºC</h2>
        <h3>Descripción: <span class = "descripcion"></span>  <span class="icono"></span></h3>
        <h3>Humedad: <span class = "humedad"></span> %</h3>
        <h3>Viento: <span class = "viento"></span> m/s</h3>

      </div>
    <div>
  </div>
</section>

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>

    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsqwMIrwxGmYq82g_OJtjXuXC0aAXDwHU&callback=initMap"
    async defer></script>

  <section class="blog container">
    <div class="row">
      <?php
      $args = array(
        "posts_per_page" => 6
      );
      $entradas = new WP_Query($args); while ($entradas->have_posts()): $entradas->the_post();
      ?>
        <div class="col-xs-6 col-md-4 entrada">
          <?php the_post_thumbnail( "entradas", array('class' => "img-responsive" ) );?>
          
        </div>
      <?php
      endwhile; wp_reset_postdata();
      ?>
    </div>
  </section>


<?php get_footer() ?>
