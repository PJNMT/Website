<?php
/**
 * Created by PhpStorm.
 * User: Nephelie
 * Date: 05/02/2019
 * Time: 15:50
 */
include_once('connect.php');
//fonction qui recupere tous les articles
function getArticles()
{
    $req = $bdd->prepare('SELECT id, title FROM articles ORDER BY id DESC');
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $req->closeCursor();
}

//fonction qui recupere un article
function getArticle($id)
{
    $req = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
    $req->execute(array($id));
    if($req->rowCount()== 1):
        {
            $data = $req->fetch(PDO::FETCH_OBJ);
            return $data;
        }
    else:
        header('Location: accueil.php');

}

?>