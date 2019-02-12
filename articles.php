<?php
if(!isset($_GET['id']) OR (!is_numeric($_GET['id']))):
    header('Location: accueil.php');
else:
{
    extract($_GET);
    $id = strip_tags($id);

    require_once('config/function.php');

    $article = getArticle($id);
}
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Titre de la page</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <h1><?= $aticle->title ?></h1>
        <p><?= $article->content?></p>
    </body>
</html>