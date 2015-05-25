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
							<?php $page->Menu(); ?>
							
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

				<div data-animate="fadeInLeft" class="  promo promo-light promo-full uppercase bottommargin-lg header-stick">
					<div class="container clearfix">
						<h3 style="letter-spacing: 2px;">CONOCE MÁS SOBRE NUESTRO TRABAJO</h3>
						
						<a href="quienes.php" class="button button-large button-border button-rounded">LEER MÁS</a>
					</div>
				</div>

				<div data-animate="fadeInRight" class="container clearfix">

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

					<div data-animate="fadeInLeft" class="fslider testimonial testimonial-full" data-arrows="false" style="z-index: 2;">
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

				<div class="container clearfix ">

					<div class="clear-bottommargin">
						<div  class="row common-height clearfix">
							<div data-animate="fadeInLeft" class="col-md-6 col-sm-6 bottommargin">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
                                                                            <a onmouseover="efecto_icono(this.id);" id="icon1"  href="#"><img src="img/home/Icons-01.png" alt="" ></a>
									</div>
									<h3>RESPONSABILIDAD</h3>
									<p>Tenemos como compromiso responder a la necesidad de nuestro cliente con un alto rendimiento en los servicios que ofrecemos.</p>
                                                                        
								</div>
                                                            <div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a  onmouseover="efecto_icono(this.id);" id="icon2" href="#"><img src="img/home/Icons-03.png" alt="Finance Assistance"></a>
									</div>
									<h3>AGILIDAD</h3>
									<p>Eficacia de nuestro servicio sin retrasos.</p>
                                                                       
								</div>
							</div>
							<div data-animate="fadeInRight"  class="col-md-6 col-sm-6 bottommargin">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon"></div>
									<h3>LEALTAD</h3>
									<p><span class="fbox-icon"><a href="#"><img onmouseover="efecto_icono(this.id);" id="icon3" src="img/home/Icons-02.png" alt="Finance Assistance"></a></span></p>
                                                                        <p>Garantizamos cumplir nuestros servicios en su empres con fidelidad y confidencialidad.</p>
                                                                       
								</div>
                                                                <div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a onmouseover="efecto_icono(this.id);" id="icon4" href="#"><img src="img/home/Icons-04.png" alt="Cost Effective Solutions"></a>
									</div>
									<h3>CAPACIDAD</h3>
									<p>Contamos con personal entrenado para ejecutar con habilidad y conocimiento, el servicio que necesita, a su entera satisfacción.</p>
                                                                        
								</div>
							</div>
						
                                                        <div data-animate="fadeInLeft" class="col-md-6 col-sm-6 bottommargin">
								<div class="feature-box fbox-plain">
                                                                    <img height="" src="img/home/fotos_home-03-01.jpg">
								</div>
							</div>
                                                        
                                                       <div data-animate="fadeInRight" align="left" class="col-md-6 col-sm-6 bottommargin">
								<div class="feature-box fbox-plain">
                                                                    <br><br><br>
                                                                    <h2 style="color:#E5007E;">ESTAS EN BUENAS MANOS</h2>
                                                                    <p><img src="img/home/check.png" width="20" height="20" />&nbsp;Dando servicios desde el año 2000</p>
                                                                    <p><img src="img/home/check.png" width="20" height="20" />&nbsp;Experiencia en limpieza industrial</p>
                                                                    <p><img src="img/home/check.png" width="20" height="20" />&nbsp;Trabajando con ética y lealtad</p>
                                                                    <p><img src="img/home/check.png" width="20" height="20" />&nbsp;Equipo capacitado</p>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
               
               <?php $page->Footer(); ?>
                
                <!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>