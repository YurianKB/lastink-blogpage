<?php get_header(); ?>
<?php if ( have_posts()): ?>

	<link rel="shortcut icon" href="http://retuit.me/lastink/wp-content/uploads/2018/09/lastink-logo.png" />
	<div class="container-fluid">
		<div class="row" style="background-color: #fff;">
			<div class="col-md-3 block-white">
				<img class="img-fluid img-logo" src="wp-content/themes/lastink/assets/img/lastink-logo.png" alt="">
			</div>

		<!--video-->
			<div clas="col-md-12">
				<video id="myVideo" src="http://retuit.me/lastink/wp-content/uploads/2018/08/an.mp4" autoplay muted loop style="width: 110%;"></video>
			</div>
		</div>

		<!--¿Qué hacemos?-->
		<div class="row d-flex justify-content-around seccion">
			<div class="col-md-9 text-center" style="padding: 3%;">
				<h1 style="color: #8C7854;"><b>¿QUÉ HACEMOS?</b></h1><br><br>
				<p class="texto-g">Es una firma de investigación estratégica para la toma de decisiones de empresas y gobiernos, genera ventajas y tácticas para su desarrollo y apoya la solución de conflictos en el ámbito local, nacional o internacional.</p>
			</div>
		</div>

		<!--¿Cómo lo hacemos?-->
		<?php echo do_shortcode( '[dd-parallax img="http://retuit.me/lastink/wp-content/uploads/2018/08/business-workplace-P3X5TWS3-1.jpg" height="400" speed="3" z-index="-100" mobile=""]
			<div class="col-md-5 offset-md-7 seccion">
				<h1 style="color: #8C7854;" class="titulo"><b>¿CÓMO LO HACEMOS?</b></h1><br><br>
				<p class="text-left texto texto-r text-w text-cntr">
					Ofrecemos el talento de nuestros especialistas y la aplicación de nuestras metodologías, para la atención integral de las necesidades de nuestros clientes, con eficiencia, excelencia y calidad.
				</p>
			</div>[/dd-parallax]'
		); ?>

		<!--Nuestra experiencia-->
		<?php echo do_shortcode( '[dd-parallax class="img-filter" img="http://retuit.me/lastink/wp-content/uploads/2018/08/business-PAMY8JY-3.jpg" height="400" speed="3" z-index="-100" mobile="http://retuit.me/lastink/wp-content/uploads/2018/08/business-workplace-P3X5TWS.jpg"]
			<div class="col-md-5 seccion">
				<h1 style="color: #fff"><b>NUESTRA EXPERIENCIA</b></h1><br><br>
				<p class="text-left texto text-cntr" style="color:#fff;">
					Contamos con conocimiento y experiencia para obtener, gestionar y manejar información, realizar investigación y desarrollar estrategias para la solución de conflictos.
				</p>
			</div>[/dd-parallax]'
		); ?>

		<!--Nuestro Objetivo-->
		<?php echo do_shortcode( '[dd-parallax id="image-p" class="img-filter" img="http://retuit.me/lastink/wp-content/uploads/2018/08/business-documents-P87E929-2-1024x388-1.jpg" height="350" speed="3" z-index="-100" mobile=""]
			<div class="col-md-5 offset-md-7 seccion">
				<h1 style="color: #8C7854;" class="titulo"><b>NUESTRO OBJETIVO</b></h1><br><br>
				<p class="text-left texto text-w text-cntr texto-r">
					Facilitar información  <label style="color: #C8862C;"><b>+</b></label><br> investigación estratégica para la toma de decisiones.
				</p>
			</div>[/dd-parallax]'
		); ?>

		<!--SERVICIOS-->
		<div class="row d-flex justify-content-around seccion">
			<div class="col-md-8 text-center">
				<h1 style="color: #998B71;"><b>SERVICIOS</b></h1><br><br>
				<p class="texto-m">Los datos, la información, el análisis y la investigación son herramientas esenciales para la toma de decisiones. Permiten traducir problemas en instrumentos de utilidad para el desarrollo inteligente de empresas y gobiernos.<br><br>
					La información <b><label style="color: #C8862C;"><b>+</b></label></b> investigación estratégica contribuyen a acelerar los procesos de desarrollo, así como a la solución de conflictos en empresas y gobiernos.
				</p>
			</div>
		</div>

		<!--BENEFICIOS-->
		<div class="row d-flex justify-content-around seccion" style="background-color: white;">
			<div class="col-md-12 text-center" >
				<h1 style="color: #998B71;"><b>BENEFICIOS</b></h1><br><br>
			</div>

			<div class="col-md-4 text-center">
				<p>
				<img src="http://retuit.me/lastink/wp-content/uploads/2018/08/daily-newspaper.png" alt=""><br><br>Implementar buenas prácticas a partir de la Información<br><label style="color: #C8862C;"><b>+</b></label><br>Investigación Estratégica
			</p><br><br>
			</div>
			<div class="col-md-4 text-center">
				<p>
				<img src="http://retuit.me/lastink/wp-content/uploads/2018/08/negotiation.png" alt=""><br><br>Mejorar las condiciones de negociación mediante Información<br><label style="color: #C8862C;"><b>+</b></label><br>Investigación Estratégica
				</p><br><br>
			</div>
			<div class="col-md-4 text-center">
				<p>
				<img src="http://retuit.me/lastink/wp-content/uploads/2018/08/handshake.png" alt=""><br><br>Prevención, manejo y solución de conflictos a través de Información<br><label style="color: #C8862C;"><b>+</b></label><br>Investigación Estratégica<br>
				</p><br><br>
			</div>
		</div>

		<!--CASOS DE ÉXITO-->
		<div class="row d-flex justify-content-around">
			<div class="col-md-8 text-center">
				<h1 style="color: #998B71; padding: 5%;"><b>CASOS DE ÉXITO</b></h1>
			</div>
		</div>
		<div class="row d-flex justify-content-around">
			<div class="col-md-8 text-center" style="padding-bottom: 5%;">
				<!--SLIDER-->
				<?php
				echo do_shortcode('[smartslider3 slider=4]');
				?>
			</div>
		</div>

		<!--NUESTROS CLIENTES-->
		<?php echo do_shortcode( '[dd-parallax id="image-p" class="img-filter" img="http://retuit.me/lastink/wp-content/uploads/2018/08/capa-gris.jpg" height="300" speed="3" z-index="-100" mobile="http://retuit.me/lastink/wp-content/uploads/2018/08/business-people-PPRE94B-3.jpg"]
			<div class="row d-flex justify-content-around seccion">
				<div class="col-md-8 text-center">
					<h1 style="color: #FFF;" class="text-center"><b>NUESTROS CLIENTES</b></h1><br><br>
					<p style="text-shadow: 1px 1px 5px #000 !important; color: #FFF; padding-bottom: 6%;">Nuestros servicios pueden clasificarse como Inteligencia de Negocios y Gobiernos.<br>
					Nuestros principales clientes son asesores como firmas de Abogados, Contadores y Consultorías, así como directamente Empresas y Gobiernos.
					</p>
				</div>
			</div>[/dd-parallax]'
		); ?>

		<!--Blog-->
  	<div class="row d-flex justify-content-around">
			<div class="col-md-12 text-center">
				<h1 style="color: #998B71; margin-top: 2%;"><b>BLOG</b></h1>
			</div>
		</div>

	 	<div class="row">
			 <div class="col-md-8" style="padding-top: 2%; padding-left: 3%;">
				 <div class="row d-flex justify-content-around">
				 <?php
							 $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; //_Paginación
							 $args = array(
							 'cat' => array(3),//Categoria que se muestra
							 'posts_per_page' => 2, //número de post que se muestran
							 'orderby' => 'date', //Como se ordenan
							 'order' => 'DESC', // Forma de oordener decendente o acendente
							 'paged' => $paged //paginación
					 ); ?>

					 <?php
							 $blog = new WP_Query($args);
					 ?>
					 <?php while( $blog -> have_posts() ): $blog->the_post(); ?>
					<div class="card justify-content-around" style="width: 20rem; margin-top: 3%;">
						<!--<img class="offset-md-2 card-img-top text-center" src="https://via.placeholder.com/150px150/" alt="Card image cap">-->
						<?php if( has_post_thumbnail() ){ ?>
	            <?php
	              /* Se guarda la url de la imagen en tamaño full */
	              $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'prensa');
	              /*Se imprime la imagen en el bloque correspondiente*/
	              echo '<img class="img-header" src="'.esc_url($featured_img_url).'" alt="Img Contacto" style="width: 100%;height: 180px;">'
	            ?>
	            <?php } ?>
						<div class="card-body justify-content-around">
							<h5 class="card-title" style="color: #998B71;"><b><?php the_title();  ?></b></h5>
							<p class="card-text"> <?php the_excerpt  ?> </p>
							<a href="<php the_permanlink(); >"><button type="button" class="btn btn-outline-secondary btn-sm">Leer más</button></a>
						</div><br><br>
					</div>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>

				<!--Botón Ver Más Blog-->
				<div class="row d-flex justify-content-around text-center">
					<div class="col-md-12" id="btn-vermas">
						<a href="<php the_permanlink(); >" target="_blank" class="button"><button type="button" class="btn btn-lg" id="btn-vermas" style="background-color: #C8862C; color: #FFFFFF; margin-left:5%; margin-bottom: 3%; margin-top: 3%;">Ver más</button></a>
					</div>
				</div>

				<div class="text-center" style="padding: 2%;">
					<a href="<php the_permanlink(); >" target="_blank" class="button"><button type="button" class="btn btn-lg btn-vermas-r" style="background-color: #C8862C; color: #FFFFFF; margin-top: 3%; margin-bottom: 3%; margin-left:5%;">Ver más</button></a>
				</div>
				</div>

			  <!--Secciòn Feeds-->
			 	<div class="col-md-4 text-center">
					<!--Feed Facebook-->
					<iframe style="margin-top: 4%;" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FLastINK-159715254129604%2F&tabs=timeline&width=340&height=222&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1395459850543921" width="340" height="222" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe><br><br>
					<!--Feed Linkedin-->
					<div style="margin-top: 4%; margin-bottom: 6%;" class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="es_ES" data-type="horizontal" data-theme="light" data-vanity="yurián-lagunas-1a2015144">
						<a class="LI-simple-link" href='https://www.linkedin.com/in/ana-sof%C3%ADa-torres-menchaca-51aa1965/'>Lastink</a>
					</div>
				</div>
			</div>




		<!-- Footer -->
		<div class="row d-flex justify-content-around" style="background-color: #A89E92; color: #FFFFFF; padding-top: 2%;">
			<div class="col-md-4 offset-md-1">
				<h4>Contáctanos</h4>
				<div class="form-r"><?php echo do_shortcode( '[contact-form-7 id="43" title="Contact form 1"]' ); ?></div>
			</div>

			<div class="col-md-6 offset-md-1 text-cntr" style="margin-top: 2%;">
				<p>Si tienes alguna duda o comentario, puedes ponerte en contacto con nosotros.<br><br>
					contacto@lastink<br>
					Puebla 151 - M, Roma Nte., 06700 Ciudad de México, CDMX<br>
					5555-5555</p><br>
				<img src="http://retuit.me/lastink/wp-content/uploads/2018/08/facebook-logo-button-4.png" alt="">
				<img src="http://retuit.me/lastink/wp-content/uploads/2018/08/linkedin-button-2.png" alt=""><br><br><br>
			</div>
			<div class="text-center" style="font-size: 12px;">
				© 2018 Copyright
			</div>
		</div>



<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>

<?php else : ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 padding-0 m-height-80">
                <p><?php _e('Lo Sentimos, no hay publicaciones con los criterios establecidos.'); ?></p>
            </div>
        </div>
    </div>
<?php endif; ?>


<?php get_footer(); ?>
