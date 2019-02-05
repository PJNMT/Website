<?php
/**
 * Created by PhpStorm.
 * User: Néphélie
 * Date: 05/02/2019
 * Time: 15:50
 */

//fonction qui récupère tous les articles
function getArticles()
{
    require ('config/connect.php');
    $req = $bdd->prepare('SELECT id, title FROM articles ORDER BY id DESC');
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $req->closeCursor();
}

//fonction qui récupère un article
function getArticle($id)
{
    require('config/connect.php');
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