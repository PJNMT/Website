<?php
 	// Connexion à la base de données
	try
	{
    	$bdd = new PDO('mysql:host=localhost;dbname=BlindFlag;charset=utf8', 'blindflag', 'tao');
	}
	catch(Exception $e)
	{
    	die('Erreur : '.$e->getMessage());
	}
?>