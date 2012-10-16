<?php
/**
 * Access from index.php:
 */


class Default_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->app("default");
		
		$this->Templates = $this->core("Templates");

		$this->Templates->theme();
		
		$this->users = array(
			"raoul-davion"  	=> array("name" => "Raoul Davion", 	  	"language" => "es"),
			"sharon-bissell"  	=> array("name" => "Sharon Bissell", 	"language" => "es", "gender" => true),
			"liliane-loya"  	=> array("name" => "Liliane Loya", 	  	"language" => "es", "gender" => true),
			"rocio-campos"  	=> array("name" => "Rocio Campos", 	  	"language" => "es", "gender" => true),
			"tom-zanol"  		=> array("name" => "Tom Zanol", 	  	"language" => "es"),
			"manuela-garza"     => array("name" => "Manuela Garza", 	"language" => "es", "gender" => true),
			"libby-haight"      => array("name" => "Libby Haight", 	    "language" => "es", "gender" => true),
			"guadalupe-mendoza" => array("name" => "Guadalupe Mendoza", "language" => "es", "gender" => true),
			"ana-luisa-liguori" => array("name" => "Ana Luisa Liguori", "language" => "es", "gender" => true),
			"mario-nronfman"    => array("name" => "Mario Bronfman", 	"language" => "es"),
			"kim-krasevac"      => array("name" => "Kim Krasevac", 	  	"language" => "es", "gender" => true),
			"ana-pecova"        => array("name" => "Ana Pecova", 	  	"language" => "es", "gender" => true),
			"mark-lewis"        => array("name" => "Mark Lewis", 	  	"language" => "es"),
			"sandra-dunsmore"   => array("name" => "Sandra Dunsmore", 	"language" => "es", "gender" => true),
			"vonda-brown"       => array("name" => "Vonda Brown", 	  	"language" => "es", "gender" => true),
			"catherine-ross"    => array("name" => "Catherine Ross", 	"language" => "es", "gender" => true),
			"eszter-filippinyi" => array("name" => "Eszter Filippinyi", "language" => "es", "gender" => true),
			"heloisa-griggs"    => array("name" => "Heloisa Griggs", 	"language" => "es", "gender" => true),
			"carlos-monge"      => array("name" => "Carlos Monge", 	  	"language" => "es"),
			"fernando-patzy"    => array("name" => "Fernando Patzy", 	"language" => "es"),
			"ruya-koman" 	    => array("name" => "Ruya Koman", 	  	"language" => "es", "gender" => true),
			"morgan-mandeville" => array("name" => "Morgan Mandeville", "language" => "es", "gender" => true),
			"suneeta-kaimal"    => array("name" => "Suneeta Kaimal", 	"language" => "es", "gender" => true)
		); 
	}
	
	public function index($user = FALSE) {
		/*
		//http://fundar.org.mx/op/razones/
		foreach($this->users as $key => $user) {
			echo $user["name"] . " - " . "http://fundar.org.mx/op/razones/" . $key . " <br/>";
		}
		*/
		
		if($user != FALSE and isset($this->users[$user])) {
			$vars["user"] = $this->users[$user];
			$vars["view"] = $this->view("home", TRUE);
			
			$this->render("content", $vars);
		}
	}
	
	/*
	horacio-corti      => Horacio Corti
	martin-sigal       => Martín Sigal
	diego-morales      => Diego Morales
	sergio-chaparro    => Sergio Chaparro
	jay-kruus          => Jay Kruus
	elizabeth-missokia => Elizabeth Missokia 
	*/
}
