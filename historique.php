<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">

    <head>
		<title>Accueil</title>
        <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
		<link rel="stylesheet" href="style.css" />
        <link rel="icon" type="image/jpg" href="images/favicon.jpg" />		
    </head>


    <body>
 		<div class="body">
			<!-- Header -->
            <?php include('header.html'); ?>

            <article>
                <?php
                    include('config/connect.php');

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

                        <ul class="action"> <a href=<?php echo ('/articles.php?ID=' . $donnees['id']); ?>>Voir plus</a> </ul>
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