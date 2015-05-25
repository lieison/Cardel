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
		<span><a href="mailto:info@cardelindustrial.com" >info@cardelindustrial.com</a></span>
		</div>
	    </li>';
    }
    
    
    public function Menu(){
        echo '<li class="current"><a href="index.php"><div>INICIO</div></a></li>
							<li ><a href="quienes.php"><div> | &nbsp;&nbsp;QUIENES SOMOS</div></a>
								
							</li>
                                                        <li><a href="oportunidades.php"><div> | &nbsp;&nbsp;OPORTUNIDADES</div></a></li>
							<li><a href="servicios.php"><div> | &nbsp&nbsp;SERVICIOS</div></a></li>
							<li><a href="contacto.php"><div> | &nbsp;&nbsp;CONTACTO</div></a></li>';
    }
    
    
    public function Footer(){
        echo ' <footer id="footer" style="background-color:#E5007E;" class="">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_third">

                                            <div class="widget clearfix" style="color:white;">

                                                    <img src="img/logo_white.png" width="200" height="80" alt="" class="alignleft" style="margin-top: 8px; padding-right: 18px;">

							

							<div class="line double-line" style="margin: 60px 0;  "></div>
                                                        
                                                        <p><strong>Es una empresa de servicios outsourcing fundada en el año 2000 y cuenta
                                                         con 15 años de experiencia en el ambito laboral. es subcontratada para dar
                                                         prestaciones de servicios especializados de mano de obra a través de un contrato ,
                                                         entre los principales servicios que se ofrecen se encuentran limpieza industrial,
                                                         empaquetado , limpieza de silos de nylon , Metal y Concreto
                                                         </strong> </p>
						</div>

					</div>

					<div class="col_one_third col_last">

						<div class="widget clear-bottommargin-sm clearfix">

							<div class="row">

								<div  class="col-md-12 bottommargin-sm">
									<div style="color:white;" class="footer-big-contacts">
										<span style="color:white;">Llámanos:</span>
										(503) 2122-4434
									</div>
								</div>

								<div class="col-md-12 bottommargin-sm">
									<div style="color:white;" class="footer-big-contacts">
										<span style="color:white;">Escribenos:</span>
										<a href="mailto:info@cardelindustrial.com"><span style="color:white;">info@cardelindustrial.com</span></a>
									</div>
								</div>

							</div>

						</div>

						<div class="widget subscribe-widget clearfix">
							<div class="row">

								<div class="col-md-8 clearfix bottommargin-sm">
									<a onmouseout="social_(1);" onmouseover="social_hover(1);" href="https://www.facebook.com/cardelindustrial?ref=hl"  style="margin-right: 10px;">
                                                                            <img id="img1"  width="50" height="50" src="img/home/logos-social-01.png" />
									</a>
                                                                    <a onmouseout="social_(2);" onmouseover="social_hover(2);" href="#"  onmouseover="social_hover(2); style="margin-right: 10px;">
                                                                            <img id="img2" width="50" height="50" src="img/home/logos-social-02.png" />
									</a>
                                                                    <a onmouseout="social_(3);" onmouseover="social_hover(3);" href="#" onmouseover="social_hover(3);  style="margin-right: 10px;">
                                                                            <img id="img3" width="50" height="50" src="img/home/logos-social-03.png" />
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
						<div class="copyright-links"><a target="_blank" href="http://lieison.com">Powered By Lieison Working Together</a> </div>
					</div>

					<div class="col_half col_last tright">
						<div class="copyrights-menu copyright-links clearfix">
							<a href="inidex.php">Inicio</a>/<a href="quienes.php">Quienes somos</a>/<a href="oportunidades.php">Oportunidades</a>/<a href="servicios.php">Servicios</a>/<a href="contacto.php">Contacto</a>
						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer>';
    }

    
    
   public function FooterContact(){
        echo ' <footer id="footer" style="background-color:#E5007E;" class="">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_third">

                                            <div class="widget clearfix" style="color:white;">

                                                    <img src="img/logo_white.png" width="200" height="80" alt="" class="alignleft" style="margin-top: 8px; padding-right: 18px;">

							

							<div class="line double-line" style="margin: 60px 0;  "></div>
                                                        
                                                        <p style="font-size:200%;"><strong>Direccion:</strong></p>
                                                        <p style="font-size:large;">
                                                       
                                                            FALTA DIRECCION ...
                                                         
                                                         </p>
						</div>

					</div>

					<div class="col_one_third col_last">

						<div class="widget clear-bottommargin-sm clearfix">

							<div class="row">

								<div  class="col-md-12 bottommargin-sm">
									<div style="color:white;" class="footer-big-contacts">
										<span style="color:white;">Llámanos:</span>
										(503) 2122-4434
									</div>
								</div>

								<div class="col-md-12 bottommargin-sm">
									<div style="color:white;" class="footer-big-contacts">
										<span style="color:white;">Escribenos:</span>
										<a href="mailto:info@cardelindustrial.com"><span style="color:white;">info@cardelindustrial.com</span></a>
									</div>
								</div>

							</div>

						</div>

						<div class="widget subscribe-widget clearfix">
							<div class="row">

								<div class="col-md-8 clearfix bottommargin-sm">
									<a onmouseout="social_(1);" onmouseover="social_hover(1);" href="https://www.facebook.com/cardelindustrial?ref=hl"  style="margin-right: 10px;">
                                                                            <img id="img1"  width="50" height="50" src="img/home/logos-social-01.png" />
									</a>
                                                                    <a onmouseout="social_(2);" onmouseover="social_hover(2);" href="#"  onmouseover="social_hover(2); style="margin-right: 10px;">
                                                                            <img id="img2" width="50" height="50" src="img/home/logos-social-02.png" />
									</a>
                                                                    <a onmouseout="social_(3);" onmouseover="social_hover(3);" href="#" onmouseover="social_hover(3);  style="margin-right: 10px;">
                                                                            <img id="img3" width="50" height="50" src="img/home/logos-social-03.png" />
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
						<div class="copyright-links"><a target="_blank" href="http://lieison.com">Powered By Lieison Working Together</a> </div>
					</div>

					<div class="col_half col_last tright">
						<div class="copyrights-menu copyright-links clearfix">
							<a href="inidex.php">Inicio</a>/<a href="quienes.php">Quienes somos</a>/<a href="oportunidades.php">Oportunidades</a>/<a href="servicios.php">Servicios</a>/<a href="contacto.php">Contacto</a>
						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer>';
    }
    
}
