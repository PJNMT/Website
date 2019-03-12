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
            <?php include('header.html'); ?>

            <article>
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

                    $req = $bdd->query('SELECT id, DATE_FORMAT(C_date, \'%d/%m/%Y\') AS creation_date, Title, Text_article, Picture FROM Article ORDER BY id DESC');

                    // Affichage des articles
                    while ($donnees = $req->fetch())
                    {
                ?>

                    <div class="article">
                        <div class="text_box_article">
                            <p class="t3">
                                <?php echo htmlspecialchars($donnees['Title']); ?>
                                <em>le <?php echo $donnees['creation_date']; ?></em>
                            </p>
        
                            <p class="text_article">
                                <?php
                                    echo nl2br(htmlspecialchars($donnees['Text_article']));
                                ?>
                                <br />
                                <img src=<?php echo $donnees['Picture']; ?>>
                            </p>
                        </div>

                        <a href=<?php echo ('/articles.php?ID=' . $donnees['id']); ?>>Voir plus</a>
                    </div>

                <?php
                    }
                    $req->closeCursor();
                ?>

            </article>

            <!-- Footer -->
            <?php include('footer.html'); ?>
 		</div>
    </body>
</html>