<?php 


	function mySqli(){
		try{

    		$bdd = new PDO('mysql:host=localhost;dbname=BDD_BLOG;charset=utf8', 'root', 'admin');
    		return $bdd;
		}
		catch(Exception $e){

        	die('Erreur : '.$e->getMessage());
		}

	}


?>