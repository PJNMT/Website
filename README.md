# Website
Site web de présentation du projet BlindFlag.

30/01/2019
Le site internet a une page d'accueil fonctionnelle. Les élements à ajouter sont encore à définir.
Le lien de téléchargement pour le jeu est aussi inséré directement. Il manque une page de contact jolie à paramétrer et un blog pour les mises à jours successives du jeu.

https://github.com/PJNMT/BlindFlag

http://blindflag.fr


/!\ IL FAUT RAJOUTER LE FICHIER connect.php /!\
``` php
<?php
 	// Connexion à la base de données
	try
	{
    		$bdd = new PDO('mysql:host=localhost;dbname=NOM_DE_LA_TABLE;charset=utf8', 'USER', 'PASSWORD');
	}
	catch(Exception $e)
	{
    		die('Erreur : '.$e->getMessage());
	}
?>
```


# Structure de la base de données
![Structure de la base de données](/images/BDD.PNG)
