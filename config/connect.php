<?php
/**
 * Created by PhpStorm.
 * User: Néphélie
 * Date: 05/02/2019
 * Time: 15:49
 */

$bdd = new PDO('mysql:host=localhost;dbname=articles_blindflag;charset=utf8', 'root', '');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);