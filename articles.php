<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Article</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <div>

        <!-- Header -->
        <?php include('header.html'); ?>

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

                    $req = $bdd->query("SELECT * FROM Article WHERE id='".$_GET['ID']."'");

                    // Affichage des articles
                    while ($donnees = $req->fetch())
                    {
                ?>
                        <div class="article">
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