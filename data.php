<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link rel="stylesheet" href="css/data.css">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>

    <?php 
        require('header.php');
    ?>
<div id="Pdp">
    <img src="img/9440461.jpg" alt="">
</div>

<h1>Bienvenue à toi <span class="pseudo-color"><?php echo isset($_SESSION['pseudo']) ? $_SESSION['pseudo'] : ''; ?></span> voici tes Stats</h1>

<div class="info-content">
<div class="infojoueur" >
    

    <?php
    $randomInfo = [
        "Niveau de grimpe: Intermediate",
        "Nombre de route emprunté: 25",
        "Temp de jeux: 50 hours",
        "Ton endroit de grimpe preférée: Yosemite National Park"
    ];


    foreach ($randomInfo as $info) {
        echo "<p>$info</p>";
    }
    ?>

</div>
</div>

    <?php 
        require('footer.php');
    ?>
</body>
</html>
