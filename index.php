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
                    <h2>Avancement du projet</h2>
                    <div class="Progress1"><div id="jeu" class="progress-bar1 center-div red"></div></div> <!--Jeu-->
                    <div class="Progress1">
                        <div class="conteneur1">
                            <div class="Progress"><p class="text-align">Site internet :</p><div id="site" class="progress-bar center-div blue"></div></div> <!--Site Internet-->
                            <div class="Progress"><p class="text-align">Bataille Navale :</p><div id="bataille" class="progress-bar center-div blue"></div></div> <!--Bataille navale-->
                            <div class="Progress"><p class="text-align">Navigation :</p><div id="navigation" class="progress-bar center-div blue"></div></div> <!--Navigation--></div>
                        <div class="conteneur1">
                            <div class="Progress"><p class="text-align">Ok Coco :</p><div id="OKCoco" class="progress-bar center-div blue"></div></div> <!--OK Coco-->
                            <div class="Progress"><p class="text-align">Combat :</p><div id="combat" class="progress-bar center-div blue"></div></div> <!--Combat-->
                            <div class="Progress"><p class="text-align">Chasse au trésor :</p><div id="tresor" class="progress-bar center-div blue"></div></div> <!--Chasse au trésor-->
                        </div>
                        <div class="conteneur1">
                            <div class="Progress"><p class="text-align">Simon :</p><div id="simon" class="progress-bar center-div blue"></div></div> <!--Simon-->
                            <div class="Progress"><p class="text-align">Port :</p><div id="port" class="progress-bar center-div blue"></div></div> <!--Port-->
                            <div class="Progress"><p class="text-align">Taverne :</p><div id="taverne" class="progress-bar center-div blue"></div></div> <!--Taverne-->
                        </div>
                        <div class="conteneur1">                        
                            <div class="Progress"><p class="text-align">Sauvegarde :</p><div id="sauv" class="progress-bar center-div blue"></div></div> <!--Sauvegarde-->
                            <div class="Progress"><p class="text-align">Statistiques :</p><div id="stat" class="progress-bar center-div blue"></div></div> <!--Stats-->
                            <div class="Progress"><p class="text-align">Magasin :</p><div id="magasin" class="progress-bar center-div blue"></div></div> <!--Stats-->
                        </div>
                    </div>
                </div>

 				<header id="section"> 
 					<h2 id="main">La meilleure réalité est <br> celle que nous offre notre imagination!</h2>
 					<p><strong>BlindFlag</strong> est un jeu entièrement accessible aux personnes déficientes visuelles. <br> Le gameplay ne nécessite que très peu le clavier. Commande vocale, design minimal.</p>
 				</header>

                <div id="vidéo">
                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/EzoSAgHlrk4?rel=0&amp;autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>


 				<!--Section One-->
 				<section>
 					<div class="conteneur caracteristics">
 						<div class="box">
 							Gameplay
 							<img src="images/pic04.jpg">
 						</div>
 						<div class="box">
 							Visibilité
 							<img src="images/aveugle.png" width="80%">
 						</div>
 						<div class="box">
 							Stéréo
 							<img src="images/stereo.png" width="40%">
 						</div>
 					</div>
 				</section>

 				<!--Section Two-->
 				<section class="conteneur caracteristics">
 					<div>
 						Bidule Truc
 					</div>
 					<div>
 						Bidule chouette
 					</div>
 					<div>
 						Bidule Machin
 					</div>
 				</section>
 			</article>
			
			<!--Footer-->
            <?php include('footer.html'); ?>
 		</div>

    </body>

</html>