<?php get_header() ?>

<section class="banner">
  <div id="myCarousel" class="carousel slide visible-xs" data-ride="carousel">
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
          // Loop through each image in each gallery
          for ($index=0; $index<4; $index++) {
              $image = get_field('image_' . $index);
              //echo "<pre>";
              //print_r($image);
            ?>
            <div class='item <?php $active = ($index === 0 ? 'active' : ''); echo $active;?>' >
                  <img src="<?php echo $image; ?>" class="image_chica" style="height:400px; width:400px;">
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
  <div id="myCarousel2" class="carousel slide hidden-xs" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel2" data-slide-to="1"></li>
        <li data-target="#myCarousel2" data-slide-to="2"></li>
        <li data-target="#myCarousel2" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
      <!-- Wrapper for slides -->
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
                  echo          '<p> Bioparque Los Molles es  uno de los 5 ecosistemas mediterráneos en el mundo Único de su tipo en Sudamérica. De belleza natural que sorprende, contiene un ecosistema de inusual riqueza biológica, a sólo 187 kms al norte de Santiago!  Conócelo. </p>';
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

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel2" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>

</section>
<section class="texto_mapa">
  <style>
  .texto_mapa {
    background-image: url("<?php echo get_stylesheet_directory_uri('')?>/assets/images/wov2.png ?>");

  }
  </style>
  <div class="container">
    <div class="espaciador">

      <h2> " El Bioparque posee una extensión de 200 hectáreas, insertado dentro de una extensión de terreno declarado Sitio Prioritario de Biodiversidad .</h2>
      <h2>  Conoce sus particulares riquezas biológicas y su increíble biodiversidad.</h2>
      <h2> En este fascinante recorrido puedes conocer variados atractivos naturales: flora y fauna, piscinas naturales y la espectacular vista del parque en toda su magnitud. "</h2>

    </div>
  </div>
</section>

<section class= "mapa_terreno" style="background-image:url('<?php echo get_stylesheet_directory_uri('')?>/assets/images/wovamarillo.png ?>')">
    <h2 class="text-center">Mapa de la extensión del parque</h2>
   <div id="mapid" ></div>
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
</section>

<section class="seccion_horarios">
  <style>
  .seccion_horarios {
    background-image: url("<?php echo get_stylesheet_directory_uri('')?>/assets/images/wovverde.png ?>");

  }
  </style>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12 col-xs-12 horarios abierto_horarios">
        <h2>Abierto: </h2>
        <h3><?php the_field('horarios'); ?></h3>
        <h2>Valor entrada:</h2>
        <h3><?php the_field('valores'); ?> </h3>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12 horarios temperatura_horarios" >
        <h2>Temperatura: <span class = "temperatura"></span> ºC</h2>
        <h3>Descripción: <span class = "descripcion"></span>  <span class="icono"></span></h3>
        <h3>Humedad: <span class = "humedad"></span> %</h3>
        <h3>Viento: <span class = "viento"></span> m/s</h3>

      </div>
    </div>
  </div>
</section>
<!-- <section class="mapa_google">
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
    <style>
     #map {
       height: 400px;
     }

   </style>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -32.23897649261799, lng: -71.5174663066864},
          zoom: 16
        });
        var marker = new google.maps.Marker({
          position: {lat: -32.23897649261799, lng: -71.5174663066864},
          map: map,
          title: 'Entrada'
        });

        marker.setMap(map);
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsqwMIrwxGmYq82g_OJtjXuXC0aAXDwHU&callback=initMap"
    async defer></script>
  </section> -->

  <section class="mapa_llegar" style="background-image:url('<?php echo get_stylesheet_directory_uri('')?>/assets/images/wovcalipso.png ?>')">
    <div class="embed-container maps">
      <h2 class="text-center">¿Cómo llegar? </h2>
      <iframe width='100%' height='270' frameborder='0' src='https://www.google.com/maps/d/embed?mid=1GRZpj541lQ087_84RCDf1d3J3J0'></iframe>
    </div>
  </section>





<?php get_footer() ?>
