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

