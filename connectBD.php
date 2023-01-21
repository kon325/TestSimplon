<?php
    
    function connexionDB(){
		try
		{
			return $bdd = new PDO('mysql:host=localhost;dbname=id20183727_testsimplon;charset=utf8', 'id20183727_root', 'Danilo@20232023', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));    
		}
		catch (Exeption $e)
		{
			die('Erreur :' . $e->getMessage());
		}
    }
?>