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
                    <p class="text-align">Avancement global du jeu :</p><div id="jeu" class="progress-bar center-div red"></div> <!--Jeu-->
                    <p class="text-align">Site internet :</p><div id="site" class="progress-bar center-div orange"></div> <!--Site Internet-->
                    <p class="text-align">Bataille Navale :</p><div id="bataille" class="progress-bar center-div yellow"></div> <!--Bataille navale-->
                    <p class="text-align">Navigation :</p><div id="navigation" class="progress-bar center-div green"></div> <!--Navigation-->
                    <p class="text-align">Ok Coco :</p><div id="OKCoco" class="progress-bar center-div blue"></div> <!--OK Coco-->
                    <p class="text-align">Combat :</p><div id="combat" class="progress-bar center-div purple"></div> <!--Combat-->
                    <p class="text-align">Chasse au trésor :</p><div id="tresor" class="progress-bar center-div red"></div> <!--Chasse au trésor-->
                    <p class="text-align">Simon :</p><div id="simon" class="progress-bar center-div orange"></div> <!--Simon-->
                    <p class="text-align">Port :</p><div id="port" class="progress-bar center-div yellow"></div> <!--Port-->
                    <p class="text-align">Taverne :</p><div id="taverne" class="progress-bar center-div green"></div> <!--Taverne-->
                    <p class="text-align">Sauvegarde :</p><div id="sauv" class="progress-bar center-div blue"></div> <!--Sauvegarde-->
                    <p class="text-align">Statistiques :</p><div id="stat" class="progress-bar center-div purple"></div> <!--Stats-->
                    <p class="text-align">Magasin :</p><div id="magasin" class="progress-bar center-div red"></div> <!--Stats-->


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