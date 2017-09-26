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
