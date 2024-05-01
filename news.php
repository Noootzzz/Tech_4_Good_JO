<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="icon" href="img/logo/escominimal.png" type="image/x-icon">
    <link rel="stylesheet" href="css/news.css"> 
</head>
<body>

<?php 
    require('header.php');
?>

<div id="popup" style="display:none;">
    <div class="popup-content">
        <img id="popup-image" src="" alt="Image détaillée" style="max-width: 100%; height: auto;">
        <p id="popup-text">Détails ici</p>
    </div>
    <span class="close">&times;</span>
</div>

<main>
    <div id="left-articles">
        <div class="news">
            <h1>Communiqué de <span>Presse</span></h2>
            <p> 
                <br>
                <span class="titre">L'ESCALADE SPORTIVE EN PLEINE NATURE : UN ENGAGEMENT POUR LA PROTECTION DE L'ENVIRONNEMENT</span>
                <br>
                <br>
                04/04/2024, Nanterre - L'escalade sportive en pleine nature a connu une popularité croissante ces dernières années, offrant aux amateurs d'aventure une immersion unique dans des paysages naturels époustouflants. Cependant, avec cette passion pour l'escalade vient la responsabilité de préserver et de protéger les environnements naturels dans lesquels elle se pratique.
                <br><br>
                L'impact environnemental de l'escalade sportive est un sujet d'importance croissante au sein de la communauté des grimpeurs et des défenseurs de l'environnement. Cette activité peut avoir des répercussions sur les écosystèmes fragiles, les habitats naturels et la biodiversité locale si elle n'est pas pratiquée de manière responsable.
                <br><br>
                En réponse à ces défis, de nombreux grimpeurs et organisations se mobilisent pour promouvoir des pratiques durables et respectueuses de l'environnement. Des initiatives telles que le "Leave No Trace" (Ne laissez aucune trace) encouragent les grimpeurs à minimiser leur impact sur les sites d'escalade en emballant leurs déchets, en évitant de perturber la faune et la flore locales, et en respectant les règles établies par les gestionnaires des sites naturels.
                <br><br>
                Par ailleurs, certaines organisations de protection de l'environnement et des parcs nationaux travaillent en partenariat avec les communautés d'escalade pour développer des programmes de sensibilisation et de conservation. Ces efforts visent à éduquer les grimpeurs sur l'importance de protéger les habitats naturels et à promouvoir une culture de respect et de responsabilité envers l'environnement.
                <br><br>
                En reconnaissant l'importance de préserver les sites naturels d'escalade, les grimpeurs et les organisations de la communauté de l'escalade s'engagent à être des gardiens actifs de l'environnement. Ensemble, ils contribuent à assurer que les générations futures pourront également profiter des joies de l'escalade en pleine nature, tout en préservant la beauté et la diversité de nos écosystèmes naturels.
                <br><br>
                Pour plus d'informations sur les pratiques durables en escalade sportive et sur la façon dont vous pouvez contribuer à la préservation de l'environnement, veuillez contacter [Nom de l'organisation/contact] à [adresse e-mail/contact].
                <br><br>
                Contact Presse : [Nom de la personne] [Titre] [Téléphone] [E-mail]
            </p>
        </div>
    </div>
    <div id="right-articles">
        <div id="left">
            <div class="top">
                <div class="news">
                    <h2>Annot : à bloc !</h2>
                    <button class="open-popup-btn" data-info="A 2 mois de la prochaine édition d’Annot à Bloc, Adam Ondra sort la vidéo ou il montre ses runs et sa réussite dans le bon voyage, la voie qu’il qualifie comme « certainement, la voie trad la plus dure au monde ». Retrouvons l’équipe organisatrice d’Annot à bloc pour faire un retour sur l’édition 2023, la visite d’Adam et savoir ce qui se trame pour juin 2024 !" data-image="img/popup/test.jpg">Plus d'infos</button>
                </div>
            </div>
            <div class="bottom">
                <div class="news">
                    <h2>[Favoris des JO] Oriane Bertone, la virtuose</h2>
                    <button class="open-popup-btn" data-info="Les favoris pour les JO #5. Dans notre série de portraits dédiée aux prétendants à la breloque, il est temps de nous arrêter sur notre meilleure chance de médaille tricolore avec celle que l’on ne présente plus, celle qui depuis toute petite écume les réalisations extrêmes, puis les podiums internationaux et désormais les plateaux TV : Oriane Bertone." data-image="img/eee.jpg">Plus d'infos</button>
                </div>
            </div>
        </div>
        <div id="right">
            <div class="top">
                <div class="news">
                    <h2>Annot : à bloc !</h2>
                    <button class="open-popup-btn" data-info="A 2 mois de la prochaine édition d’Annot à Bloc, Adam Ondra sort la vidéo ou il montre ses runs et sa réussite dans le bon voyage, la voie qu’il qualifie comme « certainement, la voie trad la plus dure au monde ». Retrouvons l’équipe organisatrice d’Annot à bloc pour faire un retour sur l’édition 2023, la visite d’Adam et savoir ce qui se trame pour juin 2024 !" data-image="img/popup/test.jpg">Plus d'infos</button>
                </div>
            </div>
            <div class="bottom">
                <div class="news">
                    <h2>Annot : à bloc !</h2>
                    <button class="open-popup-btn" data-info="A 2 mois de la prochaine édition d’Annot à Bloc, Adam Ondra sort la vidéo ou il montre ses runs et sa réussite dans le bon voyage, la voie qu’il qualifie comme « certainement, la voie trad la plus dure au monde ». Retrouvons l’équipe organisatrice d’Annot à bloc pour faire un retour sur l’édition 2023, la visite d’Adam et savoir ce qui se trame pour juin 2024 !" data-image="img/popup/test.jpg">Plus d'infos</button>
                </div>
            </div>
        </div>
    </div>
    
</main>

<?php   
    require('footer.php');
?>


<script src="js/news.js" ></script>
</body>
</html>

