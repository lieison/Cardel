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

		<section id="" class="slider-parallax  clearfix">

			

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
                            
                            <div style="background-color: #009EE2;" class="promo  promo-full uppercase bottommargin-lg header-stick">
					<div class="container clearfix">
                                            <h3 style="color:white;" align="center" style="letter-spacing: 2px;">CONOCE MÁS SOBRE NUESTROS SERVICIOS</h3>
						
					</div>
				</div>
                          


				<div class="container clearfix">

					<div class=" col-md-4 nobottommargin">
                                         <div align="right" class="fbox-icon">
                                             <a href="#"><img width="158px" height="158.8px" src="img/servicios/Servicios-01.jpg" ></a>
                                             <br><br><br>
					</div>
                                            
                                            <div align="right" class="fbox-icon">
                                             <a href="#"><img width="158px" height="158.8px" src="img/servicios/Servicios-02.jpg" ></a>
                                             <br><br><br>
					</div>
                                            
                                            <div align="right" class="fbox-icon">
                                             <a href="#"><img width="158px" height="158.8px" src="img/servicios/Servicios-03.jpg" ></a>
                                             <br><br><br>
					</div>
                                            
					</div>

					<div class="col-md-8 nobottommargin">
						<div class="feature-box media-box">
							 <h4 style="letter-spacing: 2px;"><strong>SERVICIOS DE </strong> <strong style="color:#E5007E;">LIMPIEZA</strong></h4>
                                                         <hr align="left" width="35%">
                                                         <p>Nuestros servicios de limpieza consiste en proveer con
                                                             personal altamente capacitado, eficiente y sobretodo productivo para 
                                                             que los empleados de nuestros clientes se sientan satisfechos 
                                                             trabajando en un ambiente limpio y ordenado sin ninguna complicación. (imagen)</p>
						</div>
                                            <br><br>
					</div>
                                    
                                    <div class="col-md-8 nobottommargin">
						<div class="feature-box media-box">
							 <h4 style="letter-spacing: 2px;"><strong>ADMINISTRACIÓN DE </strong> <strong style="color:#E5007E;">PERSONAL</strong></h4>
                                                         <hr align="left" width="35%">
                                                         <p>Administración  de personal: Consiste en ofrecer una solución sólida en 
                                                             cuanto al ahorro de tiempo, reducción de costos y librar a nuestros
                                                             clientes del hecho de administrar demasiado personal y enfocarse en 
                                                             la productividad de su negocio, nosotros en Cardel entendemos la necesidad que existe y por eso ponemos todo nuestro 
                                                             empeño en satisfacer las necesidades de nuestros clientes superando todas las expectativas.</p>
						</div>
                                        <br><br>
					</div>
                                          <div class="col-md-8 nobottommargin">
						<div class="feature-box media-box">
							 <h4 style="letter-spacing: 2px;"><strong>SERVICIOS DE </strong> <strong style="color:#E5007E;">MANO DE OBRA EN LABORATORIOS Y FARMACÉUTICAS</strong></h4>
                                                         <hr align="left" width="35%">
                                                         <p>Servicios de mano de obra en laboratorios y farmacéuticas: 
                                                             Gestionamos y administramos personal con alta capacidad, competitivad y sobre todo con ética y buenos valores para que 
                                                             nuestros clientes puedan desarrollar el crecimiento sostenible a plenitud que desean. </p>
						</div>
                                        <br><br>
					</div>
					

				</div>

				

			

			</div>

		</section>
                
                <!-- #content end -->

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