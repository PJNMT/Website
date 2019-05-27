# Website
[Site web](http://blindflag.fr/) de présentation du projet [BlindFlag](https://github.com/PJNMT/BlindFlag).


## connect.php
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





## Structure de la base de données
![Structure de la base de données](/images/BDD.PNG)
