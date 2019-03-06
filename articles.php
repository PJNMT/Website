<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Article</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>

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

            $req = $bdd->query('SELECT DATE_FORMAT(C_date, \'%d/%m/%Y\') AS creation_date, Title, Text_article, Picture FROM Article WHERE Title=$_GET['name']');
        ?>

        <div class="article">
            <p class="t3">
                <h1><?php echo htmlspecialchars($donnees['Title']); ?></h1>
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

        <h1><!--Titre de l'article--></h1>
        <p><!-- Contenu entier de l'article--></p>
    </body>
</html>