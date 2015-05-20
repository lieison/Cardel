<?php


class Page{
    
    public function __construct(){
        
    }
    
    public function Tittle($title = "Cardel"){
        echo '<title>' . $title .'</title>';
    }
    
    public function Icon(){
        echo '<link rel="icon" href="img/logo.png" type="image/gif" sizes="16x16">';
    }
    
    public function Logo(){
        echo '<div id="logo">
              <br>
              <a href="index.html" class="standard-logo"><img width="250" src="img/logo.png" alt="Canvas Logo"></a>			
	      </div>';
    }
    
    
    public function HeaderExtra(){
        echo '<li>
		<i class="i-plain icon-call nomargin"></i>
		<div class="he-text">
                         <b>Llámanos</b> 
		<span>(503) 2122-4434</span>
			  </div>
		</li>
		<li>
		<i class="i-plain icon-line2-envelope nomargin"></i>
			<div class="he-text">
                 <b>Escribenos</b>
		<span>carolinadeleon@cardelindustrial.com</span>
		</div>
	    </li>';
    }
    
    
    public function Menu(){
        echo '<li class="current"><a href="#"><div>INICIO</div></a></li>
							<li ><a href="#"><div> | &nbsp;&nbsp;QUIENES SOMOS</div></a>
								
							</li>
                                                        <li><a href="#"><div> | &nbsp;&nbsp;OPORTUNIDADES</div></a></li>
							<li><a href="#"><div> | &nbsp&nbsp;SERVICIOS</div></a></li>
							<li><a href="#"><div> | &nbsp;&nbsp;CONTACTO</div></a></li>';
    }
    
    
    public function Footer(){
        echo ' <footer id="footer" style="background-color:#E5007E;" class="">

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

		</footer>';
    }

    
}
