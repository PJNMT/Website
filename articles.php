<!doctype html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" />
        <title>Article</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>

    <body>
        <div class="body">
            <!-- Header -->
            <?php include('header.html'); ?>

            <?php
                include('config/connect.php');

                $req = $bdd->query("SELECT * FROM Article WHERE id='".$_GET['ID']."'");


                // Affichage des articles
                while ($donnees = $req->fetch())
                {
            ?>
                    <div class="article text_box_article">
                        <p class="t3">
                            <?php echo htmlspecialchars($donnees['Title']); ?>
                            <em>le <?php echo $donnees['C_date']; ?></em>
                        </p>
    
                        <p>
                            <?php
                                echo nl2br(htmlspecialchars($donnees['Text_article']));
                            ?>
                            <br />
                            <img src=<?php echo $donnees['Picture']; ?>>
                        </p>
                    </div>
            <?php
                }
                $req->closeCursor();
            ?>

            <!-- Footer -->
            <?php include('footer.html'); ?>
        </div>
    </body>
</html>