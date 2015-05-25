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
					<div class="swiper-slide" style="background-image: url('img/quienes/foto1-01.jpg'); background-position: center top; ">
						<div class="container clearfix">
							
						</div>
					</div>
                                    <div class="swiper-slide" style="background-image: url('img/quienes/foto2-01.jpg'); background-position: center top;">
						<div class="container clearfix">
							
						</div>
					</div>
                                    
                                       <div class="swiper-slide" style="background-image: url('img/quienes/foto3-01.jpg'); background-position: center top;">
						<div class="container clearfix">
							
						</div>
					</div>
                                    
                                       <div class="swiper-slide" style="background-image: url('img/quienes/foto4-01.jpg'); background-position: center top;">
						<div class="container clearfix">
							
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
                            
                        

				<div class="container clearfix">

					<div  class=" col-md-3 nobottommargin">
						<div class=" feature-box media-box">
							<div data-animate="swing " align="center" class="fbox-media">
                                                            <img style="border-radius: 2px;width:50%;" src="img/quienes/Iconos-quienessomos-01.png" alt="Nuestra Experiencia">
							</div>
							
						</div>
                                              <br><br>
                                            <div class=" feature-box media-box">
							<div data-animate="swing " align="center" class="fbox-media">
                                                            <img style="border-radius: 2px;width:50%;" src="img/quienes/Iconos-quienessomos-02.png" alt="Nuestra Experiencia">
							</div>
							
						</div>
					</div>

					<div class="col-md-9 nobottommargin">
						<div class="feature-box media-box">
                                                    
                                                   <div data-animate="fadeInRight " class="fbox-desc">
                                                    <h4 style="letter-spacing: 2px;"><strong>PORQUE</strong> <strong style="color:#E5007E;">CONTRATARNOS</strong></h4>
                                                         <hr  size="4" width="25%" align="left" />
                                                        <p>
                                                             La razón principal por la cual nuestros clientes adquieren nuestros servicios es porque al igual que ellos nosotros nos preocupamos mucho en materia de reducción de costos y optimización de recursos y es que en los estudios que hemos realizado la manera en la que hemos generado un impacto positivo en las finanzas de nuestros clientes es satisfactoria debido a que el tiempo se ha utilizado de manera eficiente. Ahora la pregunta de ¿porqué contratarnos? conlleva a una respuesta simple y es que Cardel con su modelo de outsourcing ayuda a que tu marca reduzca costos y optimice recursos.
                                                        </p>
                                                    </div>
                                                    <br><br>	
						   <div data-animate="fadeInRight " class="fbox-desc">
                                                            <h3  style="color:#E5007E;" >NUESTRA EXPERIENCIA</h3>
                                                            <hr  size="4" width="50%" align="left" />
                                                             <p>Con más de 15 años en el mercado atendiendo las diferentes necesidades de nuestros clientes hemos logrado posicionarnos con mucha confianza y credibilidad en la imagen que nuestros clientes tienen sobre nosotros y creemos que trabajar de la mano, hombro con hombro de nuestros clientes es como se logran las metas y objetivos de las organizaciones.</p>
                                                    </div>
                                                   
                                                    
						</div>
					</div>

					

				</div>

				<div class="section parallax dark" style=" padding: 120px 0;" data-stellar-background-ratio="0.1">

					<div class="fslider testimonial testimonial-full" data-arrows="false" style="z-index: 2;">
						<div class="flexslider">
							<div class="slider-wrap">
								<div class="slide">
									
									<div  data-animate="flip" class="testi-content">
										
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