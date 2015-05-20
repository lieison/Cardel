<?php include 'page.php'; ?>
<?php $page = new Page(); ?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Cardel" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />

	<!-- Construction Demo Specific Stylesheet -->
	<link rel="stylesheet" href="demos/construction/construction.css" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="demos/construction/css/fonts.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<link rel="stylesheet" href="demos/construction/css/colors.css" type="text/css" />

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Document Title
	============================================= -->
	<?php 
                $page->Tittle();
                $page->Icon();
        ?>
        

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="sticky-style-3">

			<div class="container clearfix">

				<!-- Logo
				============================================= -->
				<?php $page->Logo(); ?>
                                <!-- #logo end -->
                                    <br>
				<ul class="header-extras">
                                    
					<?php $page->HeaderExtra(); ?> 
					
				</ul>

			</div>

			<div id="header-wrap">

				<!-- Primary Navigation
				============================================= -->
				<nav id="primary-menu" class="style-2 center">

					<div class="container clearfix">
                                            

						<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

						<ul>
							<li class="current"><a href="#"><div>INICIO</div></a></li>
							<li ><a href="#"><div> | &nbsp;&nbsp;QUIENES SOMOS</div></a>
								
							</li>
                                                        <li><a href="#"><div> | &nbsp;&nbsp;OPORTUNIDADES</div></a></li>
							<li><a href="#"><div> | &nbsp&nbsp;SERVICIOS</div></a></li>
							<li><a href="#"><div> | &nbsp;&nbsp;CONTACTO</div></a></li>
							
						</ul>

						<script>
							jQuery(document).ready(function($){
								$( '#primary-menu ul li:has(ul) > a > div' ).append( ' <i class="icon-angle-down norightmargin"></i>' );
							});
						</script>


					</div>

				</nav><!-- #primary-menu end -->

			</div>

		</header><!-- #header end -->

		<section id="slider" class="slider-parallax swiper_wrapper clearfix" style="height: 550px;">

			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide" style="background-image: url('img/home/Home_foto1-01.jpg'); background-position: center top;">
						<div class="container clearfix">
							<div class="slider-caption">
								<h2>Cardel</h2>
								<p>Contamos con un equipo de más de 50 personas listas a trabajar con eficiencia para mejorar tu negocio.</p>
							</div>
						</div>
					</div>
					
				</div>
				<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
				<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
			</div>

			<script>
				jQuery(document).ready(function($){
					var swiperSlider = new Swiper('.swiper-parent',{
						paginationClickable: false,
						slidesPerView: 1,
						simulateTouch: false,
						grabCursor: false,
						loop: true,
						onSwiperCreated: function(swiper){
							$('[data-caption-animate]').each(function(){
								var $toAnimateElement = $(this);
								var toAnimateDelay = $(this).attr('data-caption-delay');
								var toAnimateDelayTime = 0;
								if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
								if( !$toAnimateElement.hasClass('animated') ) {
									$toAnimateElement.addClass('not-animated');
									var elementAnimation = $toAnimateElement.attr('data-caption-animate');
									setTimeout(function() {
										$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
									}, toAnimateDelayTime);
								}
							});
							SEMICOLON.slider.swiperSliderMenu();
						},
						onSlideChangeStart: function(swiper){
							$('[data-caption-animate]').each(function(){
								var $toAnimateElement = $(this);
								var elementAnimation = $toAnimateElement.attr('data-caption-animate');
								$toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
							});
							SEMICOLON.slider.swiperSliderMenu();
						},
						onSlideChangeEnd: function(swiper){
							$('#slider').find('.swiper-slide').each(function(){
								if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
							});
							$('#slider').find('.swiper-slide:not(".swiper-slide-active")').each(function(){
								if($(this).find('video').length > 0) {
									if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
								}
							});
							if( $('#slider').find('.swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('video').get(0).play(); }

							$('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
								var $toAnimateElement = $(this);
								var toAnimateDelay = $(this).attr('data-caption-delay');
								var toAnimateDelayTime = 0;
								if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
								if( !$toAnimateElement.hasClass('animated') ) {
									$toAnimateElement.addClass('not-animated');
									var elementAnimation = $toAnimateElement.attr('data-caption-animate');
									setTimeout(function() {
										$toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
									}, toAnimateDelayTime);
								}
							});
						}
					});

					$('#slider-arrow-left').on('click', function(e){
						e.preventDefault();
						swiperSlider.swipePrev();
					});

					$('#slider-arrow-right').on('click', function(e){
						e.preventDefault();
						swiperSlider.swipeNext();
					});
				});
			</script>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="promo promo-light promo-full uppercase bottommargin-lg header-stick">
					<div class="container clearfix">
						<h3 style="letter-spacing: 2px;">CONOCE MÁS SOBRE NUESTRO TRABAJO</h3>
						
						<a href="#" class="button button-large button-border button-rounded">LEER MÁS</a>
					</div>
				</div>

				<div class="container clearfix">

					<div class=" col-md-6 nobottommargin">
						<div class=" feature-box media-box">
							<div class="fbox-media">
                                                            <img style="border-radius: 2px;" src="img/home/fotos_home-01.jpg" alt="">
							</div>
							<div class="fbox-desc">
								<h3>NUESTRA MISIÓN</h3>
								<p> Proporcionar a nuestros clientes servicios de mano de obra para apoyar en el desarrollo de las actividades de producción de su empresa con personal altamente capacitado, que encuentre con todas las prestaciones de ley, cuya administración correrán por nuestra cuenta.</p>
							</div>
						</div>
					</div>

					<div class="col-md-6 nobottommargin">
						<div class="feature-box media-box">
							<div class="fbox-media">
                                                            <img style="border-radius: 2px;" src="img/home/fotos_home-02.jpg" alt="Effective Planning">
							</div>
							<div class="fbox-desc">
								<h3>NUESTRA VISIÓN</h3>
								<p>Ser líderes en el mercado de servicios de outsourcing, supliendo las necesidades de cualquier empresa que lo requiera, proporcionando mano de obra capacitada.</p>
							</div>
						</div>
					</div>

					

				</div>

				<div class="section parallax dark" style=" padding: 120px 0;" data-stellar-background-ratio="0.1">

					<div class="fslider testimonial testimonial-full" data-arrows="false" style="z-index: 2;">
						<div class="flexslider">
							<div class="slider-wrap">
								<div class="slide">
									
									<div class="testi-content">
										
                                                                            <h2><b>SOMOS TU MEJOR OPCIÓN</b></h2>
                                                                              <p>Somos una empresa de servicios outsourcing,
                                                                                  contamos con 15 años de experiencia en el ámbito laboral. 
                                                                                  Nuestros principales servicios son limpieza industrial, 
                                                                                  empaquetado, limpieza de silos de Nylon, Metal y Concreto.</p>
										
									</div>
								</div>
								
							</div>
						</div>
					</div>

					<div class="video-wrap" style="z-index: 1;">
						<div class="video-overlay" style="background-image: url('img/home/h1.jpg');"></div>
					</div>

				</div>

				<div class="container clearfix center">

					<div class="clear-bottommargin">
						<div class="row common-height clearfix">
							<div class="col-md-6 col-sm-6 bottommargin">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
                                                                            <a  href="#"><img src="img/home/Icons-01.png" alt="" ></a>
									</div>
									<h3>RESPONSABILIDAD</h3>
									<p>TEXTO</p>
                                                                        <p>TEXTO</p>
                                                                        <p>TEXTO</p>
                                                                        <p>TEXTO</p>
								</div>
                                                            <div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><img src="img/home/Icons-03.png" alt="Finance Assistance"></a>
									</div>
									<h3>PUNTUALIDAD</h3>
									<p>TEXTO</p>
                                                                        <p>TEXTO</p>
                                                                        <p>TEXTO</p>
                                                                        <p>TEXTO</p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 bottommargin">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon"></div>
									<h3>LEALTAD</h3>
									<p><span class="fbox-icon"><a href="#"><img src="img/home/Icons-02.png" alt="Finance Assistance"></a></span>TEXTO</p>
                                                                        <p>TEXTO</p>
                                                                        <p>TEXTO</p>
                                                                        <p>TEXTO</p>
								</div>
                                                                <div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><img src="img/home/Icons-04.png" alt="Cost Effective Solutions"></a>
									</div>
									<h3>CAPACIDAD</h3>
									<p>TEXTO</p>
                                                                        <p>TEXTO</p>
                                                                        <p>TEXTO</p>
                                                                        <p>TEXTO</p>
								</div>
							</div>
							
                                                    <br>
                                                        <div class="col-md-6 col-sm-6 bottommargin">
								<div class="feature-box fbox-plain">
                                                                        <img src="img/home/fotos_home-03-01.jpg">
									
								</div>
							</div>
                                                        <div align="left" class="col-md-6 col-sm-6 bottommargin">
								<div class="feature-box fbox-plain">
                                                                    <br><br><br>
                                                                    <h2 style="color:#E5007E;">ESTAS EN BUENAS MANOS</h2>
                                                                    <p><img src="img/home/check.png" width="20" height="20" />Dando servicios desde el año 2000</p>
                                                                    <p><img src="img/home/check.png" width="20" height="20" />Experiencia en limpieza industrial</p>
                                                                    <p><img src="img/home/check.png" width="20" height="20" />Trabajando con ética y lealtad</p>
                                                                    <p><img src="img/home/check.png" width="20" height="20" />Equipo capacitado</p>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
                <footer id="footer" style="background-color:#E5007E;" class="">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_third">

                                            <div class="widget clearfix" style="color:white;">

                                                    <img src="img/logo_white.png" width="200" height="80" alt="" class="alignleft" style="margin-top: 8px; padding-right: 18px; border-right: 1px solid #4A4A4A;">

							<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards with a Retina &amp; Responsive Approach. Browse the amazing Features this template offers.</p>

							<div class="line" style="margin: 30px 0;"></div>

						</div>

					</div>

					<div class="col_one_third col_last">

						<div class="widget clear-bottommargin-sm clearfix">

							<div class="row">

								<div  class="col-md-12 bottommargin-sm">
									<div style="color:white;" class="footer-big-contacts">
										<span style="color:white;">Llámanos:</span>
										(503) 0000-0000
									</div>
								</div>

								<div class="col-md-12 bottommargin-sm">
									<div style="color:white;" class="footer-big-contacts">
										<span style="color:white;">Escribenos:</span>
										carolinadeleon@cardelindustrial.com
									</div>
								</div>

							</div>

						</div>

						<div class="widget subscribe-widget clearfix">
							<div class="row">

								<div class="col-md-8 clearfix bottommargin-sm">
									<a href="#"  style="margin-right: 10px;">
                                                                            <img width="50" height="50" src="img/home/logos-social-01.png" />
									</a>
                                                                    <a href="#"  style="margin-right: 10px;">
                                                                            <img width="50" height="50" src="img/home/logos-social-02.png" />
									</a>
                                                                    <a href="#"  style="margin-right: 10px;">
                                                                            <img width="50" height="50" src="img/home/logos-social-03.png" />
									</a>
									
								</div>
								

							</div>
						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div style="background-color:#009EE2" id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2015 CARDEL, Todos los derechos reservados.<br>
						<div class="copyright-links"><a href="#">Powered By Lieison Working Together</a> </div>
					</div>

					<div class="col_half col_last tright">
						<div class="copyrights-menu copyright-links clearfix">
							<a href="#">Home</a>/<a href="#">About Us</a>/<a href="#">Team</a>/<a href="#">Clients</a>/<a href="#">FAQs</a>/<a href="#">Contact</a>
						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>