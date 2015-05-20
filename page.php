<?php


class Page{
    
    public function __construct(){
        
    }
    
    public function Tittle($title = "Cardel"){
        echo '<title>' . $title .'</title>';
    }
    
    public function Icon(){
        echo "";
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

    
}
