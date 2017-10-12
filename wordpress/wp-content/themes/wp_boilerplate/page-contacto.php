<?php get_header() ?>
<div class="contacto" style="background-image:url('<?php echo get_stylesheet_directory_uri('')?>/assets/images/wovazul.png ?>')" >
		<div class="container  centrar contacto_box">
			<h2 class="text-center">Contacto</h2>


		<div role="form" class="wpcf7" id="wpcf7-f54-p17-o1" lang="es-CL" dir="ltr">
		<div class="screen-reader-response"></div>
		<form action="/contacto/#wpcf7-f54-p17-o1" method="post" class="wpcf7-form" novalidate="novalidate">
		<div style="display: none;">
		<input type="hidden" name="_wpcf7" value="54">
		<input type="hidden" name="_wpcf7_version" value="4.9">
		<input type="hidden" name="_wpcf7_locale" value="es_CL">
		<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f54-p17-o1">
		<input type="hidden" name="_wpcf7_container_post" value="17">
		</div>
		<div class="row">
				<div class=col-md-12>
				<label> Nombre
				    <div class="form-group your-name"><input class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" name="your-name" type="text" value="" aria-invalid="false" aria-required="true" required="" style="width:400px"></div> </label>
				</div>
				<div class=col-md-12>
				<label> Email
				    <div class="form-group your-email"><input class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" name="your-email" type="email" value="" aria-invalid="false" aria-required="true" required="" style="width:400px"></div> </label>
				</div>
				<div class=col-md-12>
				<label> Asunto
				    <div class="form-group your-subject"><input class="wpcf7-form-control wpcf7-text form-control" name="your-subject" type="text" value="" aria-invalid="false" style="width:400px"></div> </label>
				</div>
				<div class=col-md-12>
				<label> Mensaje
				    <div class="form-group your-message"><textarea class="wpcf7-form-control wpcf7-textarea form-control" name="your-message" rows="4" aria-invalid="false" style="width:400px"></textarea></div> </label>
				</div>
				<div class=col-md-12>
				<div class="form-group"><div><input class="wpcf7-form-control wpcf7-submit btn btn-primary" type="submit" value="Enviar"><span class="ajax-loader"></span></div></div><div class="wpcf7-response-output wpcf7-display-none alert"></div></form></div>
				</div>
		</div>
	</div>
</div>
<?php get_footer() ?>
