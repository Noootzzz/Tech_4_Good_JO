<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/news.css"> 
    <link rel="stylesheet" href="css/home.css"> 

</head>
<body>

<?php 
    require('header.php');
?>

<main>

<div id="popup" style="display:none;">
    <div class="popup-content">
        <span class="close">&times;</span>
        <img id="popup-image" src="" alt="Image détaillée" style="max-width: 100%; height: auto;">
        <p id="popup-text">Détails ici</p>
    </div>
</div>

<div id="article">
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
<div class="newsarticle">
    <h2>Titre</h2>
    <img src="img/logo/test.jpg" alt="" class="news-img">
    <button class="open-popup-btn" data-info="A 2 mois de la prochaine édition d’Annot à Bloc, Adam Ondra sort la vidéo ou il montre ses runs et sa réussite dans le bon voyage, la voie qu’il qualifie comme « certainement, la voie trad la plus dure au monde ». Retrouvons l’équipe organisatrice d’Annot à bloc pour faire un retour sur l’édition 2023, la visite d’Adam et savoir ce qui se trame pour juin 2024 !" data-image="img/popup/test.jpg">Plus d'infos</button>
</div>



</div>



</main>

<?php     
    require('footer.php');
?>


<script src="js/news.js" ></script>
</body>
</html>

