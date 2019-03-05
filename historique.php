<!DOCTYPE html>
<html>

    <head>

		<title>Accueil</title>
        <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
        <link rel="icon" type="image/jpg" href="images/favicon.jpg" />
		
    </head>


    <body>

 		<div>
			<!-- Header -->
            <header id="head">

                <div id="logo">

                    <div id="cont">

                        <div id="img"><img src="images/logo2.png" alt="Bateau pirate"  width="100" height="100"></a></div>
                        <p id="lien"><a href="index.html">BlindFlag</a> <span>by MUTINY</span></p>
                    </div>

                    <nav id="nav">

                        <div class="conteneur" id="menu">

                            <div class="element"><a href="index.html">Bienvenue</a></div>
                            <div class="element"><a href="contact.html">L'équipe</a></div>
                            <div class="element"><a href="historique.php">Historique</a></div>
                            <div class="element"><a href="Test.zip">Télécharger le jeu</a></div>

                        </div>

                    </nav>

                </div>


            </header>
            <article>
                <!-- Place du fil d'actualités, le plus récent en haut-->
                <!-- Titre + photo si il y a + date + premières lignes du texte avec un bouton lire la suite sur qui redirige vers articles.html -->

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

                    $req = $bdd->query('SELECT DATE_FORMAT(C_date, \'%d/%m/%Y\') AS creation_date, Title, Text_article, Picture FROM Article');

                    // Affichage des articles
                    while ($donnees = $req->fetch())
                    {
                ?>
                        <div class="news">
                            <p class="t3">
                                <?php echo htmlspecialchars($donnees['Title']); ?>
                                <em>le <?php echo $donnees['creation_date']; ?></em>
                            </p>
    
                            <p>
                                <?php
                                    echo nl2br(htmlspecialchars($donnees['Text_article']));
                                ?>
                                <br />
                                <img src=<?php echo $donnees['Picture'] ?>>
                            </p>
                        </div>
                <?php
                    }
                    $req->closeCursor();
                ?>

            </article>
 		</div>

    </body>

</html>
