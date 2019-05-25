<!DOCTYPE html>
<html>

    <head>

		<title>Accueil</title>
		<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
		<link rel="stylesheet" href="style.css" />
        <link rel="icon" type="image/jpg" href="images/favicon.jpg" />

    </head>


    <body>
 		<div class="body">
			<!-- Header -->
            <?php include('header.html'); ?>

 			<!--Banner-->
 			<section id="banner">

 				<div class="box">

 					<h2>BLINDFLAG</h2>

 					<p>Développé par des élèves de l'<strong><a href="http://www.epita.fr/">EPITA</a></strong><br> afin de créer un jeu accessible <br> aux déficients visuels.</p>

 					<ul class="action">
 						<a href="#main">Voir plus</a>
 					</ul>

 				</div>

 			</section>

 			<!--Main-->
 			<article>

                <!-- Section progression -->
                <div id="progression">
                    <h3>Avancement du projet</h3>
                    <p class="text-align">Jeu :</p><div id="jeu" class="progress-bar center-div red"></div> <!--Jeu-->
                    <p class="text-align">Site internet :</p><div id="site" class="progress-bar center-div orange"></div> <!--Site Internet-->
                    <p class="text-align">Audio :</p><div id="audio" class="progress-bar center-div yellow"></div> <!--Audio-->
                    <p class="text-align">Mécaniques de jeu :</p><div id="mecanique" class="progress-bar center-div green"></div> <!--Mecaniques jeu -->
                    <p class="text-align">Intelligence Artificielle :</p><div id="IA" class="progress-bar center-div blue"></div> <!--IA-->
                    <p class="text-align">Base de données :</p><div id="BDD" class="progress-bar center-div purple"></div> <!--BDD-->
                    <p class="text-align">Réseaux sociaux :</p><div id="reseaux" class="progress-bar center-div red"></div> <!--Reseaux sociaux-->
                    <p class="text-align">Test du jeu :</p><div id="test" class="progress-bar center-div orange"></div> <!--Testeurs / tests-->

                </div>

 				<header id="section"> 
 					<h2 id="main">La meilleure réalité est <br> celle que nous offre notre imagination!</h2>
 					<p><strong>BlindFlag</strong> est un jeu entièrement accessible aux personnes déficientes visuelles. <br> Le gameplay ne nécessite que très peu le clavier. Commande vocale, design minimal.</p>
 				</header>

                <div id="vidéo">
                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/EzoSAgHlrk4?rel=0&amp;autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>


 				<!--Section One-->
 				<!-- <section>
 					<div class="conteneur caracteristics">
 						<div class="box">
 							Gameplay
 							<img src="images/pic04.jpg">
 						</div>
 						<div class="box">
 							Visibilité
 							<img src="images/pic04.jpg">
 						</div>
 						<div class="box">
 							Stéréo
 							<img src="images/pic04.jpg">
 						</div>
 					</div>
 				</section> -->

 				<!--Section Two-->
 				<!-- <section class="conteneur caracteristics">
 					<div>
 						Bidule Truc
 					</div>
 					<div>
 						Bidule chouette
 					</div>
 					<div>
 						Bidule Machin
 					</div>
 				</section> -->
 			</article>
			
			<!--Footer-->
            <?php include('footer.html'); ?>
 		</div>

    </body>

</html>