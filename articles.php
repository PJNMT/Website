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

                    $req = $bdd->query('SELECT id, DATE_FORMAT(C_date, \'%d/%m/%Y\') AS creation_date, Title, Text_article, Picture FROM Article WHERE id=$_GET['ID']');

                    // Affichage des articles
                    while ($donnees = $req->fetch())
                    {
                ?>
                        <div class="article">
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

                            <a href=<?php echo ('/articles.php?ID=' . $donnees['id']); ?>>Voir plus</a>
                        </div>
                <?php
                    }
                    $req->closeCursor();
                ?>
    </body>
</html>