<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>

<?php 


    require('haut_page.php');
    require('header.php');

?>


<h2>Contact</h2>
<form action="traitement_contact.php" method="post">
    <label for="contact">Nous Contactez</label>
    <textarea placeholder="Quelle est votre probleme ?" name="content" id="content" cols="30" rows="5"></textarea>
    <button class="btnform" type="submit">Envoyer</button>
</form>
    
</body>
</html>