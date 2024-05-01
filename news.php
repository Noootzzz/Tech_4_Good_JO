<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <div class="news"></div>
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

<!-- <div id="article">
    <div class="newsarticle" id="left-articles"> 
        <h2>Annot : à bloc !</h2>
        <img src="img/zzz.jpg" alt="" class="news-img">
        <button class="open-popup-btn" data-info="A 2 mois de la prochaine édition d’Annot à Bloc, Adam Ondra sort la vidéo ou il montre ses runs et sa réussite dans le bon voyage, la voie qu’il qualifie comme « certainement, la voie trad la plus dure au monde ». Retrouvons l’équipe organisatrice d’Annot à bloc pour faire un retour sur l’édition 2023, la visite d’Adam et savoir ce qui se trame pour juin 2024 !" data-image="img/popup/test.jpg">Plus d'infos</button>
    </div>
    <div id="right-articles">
        <div class="newsarticle">
            <h2>[Favoris des JO] Oriane Bertone, la virtuose</h2>
            <img src="img/aaa.jpg" alt="" class="news-img">
            <button class="open-popup-btn" data-info="Les favoris pour les JO #5. Dans notre série de portraits dédiée aux prétendants à la breloque, il est temps de nous arrêter sur notre meilleure chance de médaille tricolore avec celle que l’on ne présente plus, celle qui depuis toute petite écume les réalisations extrêmes, puis les podiums internationaux et désormais les plateaux TV : Oriane Bertone." data-image="img/eee.jpg">Plus d'infos</button>
        </div>
        <div class="newsarticle">
            <h2>Titre</h2>
            <img src="img/logo/test.jpg" alt="" class="news-img">
            <button class="open-popup-btn" data-info="A 2 mois de la prochaine édition d’Annot à Bloc, Adam Ondra sort la vidéo ou il montre ses runs et sa réussite dans le bon voyage, la voie qu’il qualifie comme « certainement, la voie trad la plus dure au monde ». Retrouvons l’équipe organisatrice d’Annot à bloc pour faire un retour sur l’édition 2023, la visite d’Adam et savoir ce qui se trame pour juin 2024 !" data-image="img/popup/test.jpg">Plus d'infos</button>
        </div>
        <div class="newsarticle">
            <h2>Titre</h2>
            <img src="img/logo/test.jpg" alt="" class="news-img">
            <button class="open-popup-btn" data-info="A 2 mois de la prochaine édition d’Annot à Bloc, Adam Ondra sort la vidéo ou il montre ses runs et sa réussite dans le bon voyage, la voie qu’il qualifie comme « certainement, la voie trad la plus dure au monde ». Retrouvons l’équipe organisatrice d’Annot à bloc pour faire un retour sur l’édition 2023, la visite d’Adam et savoir ce qui se trame pour juin 2024 !" data-image="img/popup/test.jpg">Plus d'infos</button>
        </div>
        <div class="newsarticle">
            <h2>Titre</h2>
            <img src="img/logo/test.jpg" alt="" class="news-img">
            <button class="open-popup-btn" data-info="A 2 mois de la prochaine édition d’Annot à Bloc, Adam Ondra sort la vidéo ou il montre ses runs et sa réussite dans le bon voyage, la voie qu’il qualifie comme « certainement, la voie trad la plus dure au monde ». Retrouvons l’équipe organisatrice d’Annot à bloc pour faire un retour sur l’édition 2023, la visite d’Adam et savoir ce qui se trame pour juin 2024 !" data-image="img/popup/test.jpg">Plus d'infos</button>
        </div>
    </div>
</div> -->





<?php   
    require('footer.php');
?>


<script src="js/news.js" ></script>
</body>
</html>

