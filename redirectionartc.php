<?php
require_once('config/function.php');
$articles = getArticles();
?>
<!doctype html>
    <head>
        <title>Articles</title>
        <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <link rel="stylesheet" href="style.css" />
        <meta charset="utf-8" />

    </head>

    <body>
        <h1>Voici les dernières actualités :</h1>
        <?php foreach ($articles as $article): ?>
            <h2><?= $article->title ?></h2>
            <a href="articles.php.php?id=<?= $article->id ?>">Lire la suite</a>
        <?php endforeach; ?>
    </body>
</html>
