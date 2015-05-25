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
        <link rel="stylesheet" href="css/drop.css" type="text/css" />
	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/drop.js"></script>
        
        <style>
body { padding: 30px }
form { display: block; margin: 20px auto; background: #eee; border-radius: 10px; padding: 15px }

.progress { position:relative; width:400px; border: 1px solid #ddd; padding: 1px; border-radius: 3px; }
.bar { background-color: #B4F5B4; width:0%; height:20px; border-radius: 3px; }
.percent { position:absolute; display:inline-block; top:3px; left:48%; }
</style>
        
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
                            
                            <div data-animate="swing"  style="background-color: #009EE2;" class="promo  promo-full uppercase bottommargin-lg header-stick">
					<div class="container clearfix">
                                            <h3 style="color:white;" align="center" style="letter-spacing: 2px;">Quieres ser parte del mejor equipo ?</h3>
						
					</div>
				</div>
                          


				<div  class="container clearfix">

					<div data-animate="fadeInLeft "  class=" col-md-4 nobottommargin">
						<div class=" feature-box media-box">
							  <div class="fbox-desc">
                                                            <h3  style="color:#E5007E;" >NUESTRA EXPERIENCIA</h3>
                                                            <hr  size="4" width="50%" align="left" />
                                                             <p>Con más de 15 años en el mercado atendiendo las diferentes necesidades de nuestros clientes hemos logrado posicionarnos con mucha confianza y credibilidad en la imagen que nuestros clientes tienen sobre nosotros y creemos que trabajar de la mano, hombro con hombro de nuestros clientes es como se logran las metas y objetivos de las organizaciones.</p>
                                                    </div>
                                                   
						</div>
					</div>

					<div data-animate="fadeInRight "  class="col-md-8 nobottommargin">
						 <div class="well well-lg nobottommargin">
							
						
                                                     <form id="top-login" role="form" action="sendcv.php"  enctype="multipart/form-data">
                                        <div class="input-group" id="top-login-username">
                                            <span class="input-group-addon"><i class="icon-user"></i></span>
                                            <input type="text" class="form-control" placeholder="Nombres" required="">
                                        </div>
                                        <br>
                                        <div class="input-group" id="top-login-username">
                                            <span class="input-group-addon"><i class="icon-user"></i></span>
                                            <input type="text" class="form-control" placeholder="Apellidos" required="">
                                        </div>
                                        <br>
                                        <div class="input-group" id="top-login-username">
                                            <span class="input-group-addon"><i class="icon-phone"></i></span>
                                            <input type="text" class="form-control" placeholder="Telefono" required="">
                                        </div>
                                        
                                        <br>
                                        <div class="input-group" id="top-login-username">
                                            <span class="input-group-addon"><i class="icon-email"></i></span>
                                            <input type="text" class="form-control" placeholder="email" required="">
                                        </div>
            
                                        <br>
                                        <div class="form-inline">
                                            <div align ="center" class="form-group fallback">
                                                 <span class="input-group-addon"><i class="icon-file"></i>&nbsp;&nbsp;Adjunta tu CV
                                                 </span>
                                                
                                                
                                                <input  class=" btn " type="file" name="file" value="" />
                                                
                                            </div>
                                             
                                         </div>
                                        
                                        
                                          <br> <br>
                                          
                                          <div hidden="true" class="progress">
                                              <div class="bar"></div >
        <div  class="percent"></div >
    </div>
    
    <div id="status"></div>
                                         
                                        <button style="background-color:#E5007E; color:white;" class="btn btn-block" type="submit">Enviar</button>
                                    </form>
                                                     
                                                     
                              
                                                   
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
        
        
<script>
(function() {

  
var bar = $('.bar');
var percent = $('.percent');
var status = $('#status');


   
$('form').ajaxForm({
    beforeSend: function() {
        $(".progress").attr("hidden" , false);      
        status.empty();
        var percentVal = '0%';
        bar.width(percentVal);
        percent.html(percentVal);
    },
    uploadProgress: function(event, position, total, percentComplete) {
        var percentVal = percentComplete + '%';
        bar.width(percentVal);
        percent.html(percentVal);
    },
    success: function() {
        var percentVal = '100%';
        bar.width(percentVal);
        percent.html(percentVal);
    },
    complete: function(xhr) {
		status.html(xhr.responseText);
    }
}); 

})();       
</script>


</body>



</html>