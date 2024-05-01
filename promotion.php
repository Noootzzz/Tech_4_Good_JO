<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promotion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/promotion.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="icon" href="img/logo/escominimal.png" type="image/x-icon">

</head>
<body>
<?php 
session_start();
require 'database.php';
require('header.php');

?>  
    <!-- Swiper -->

  <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper">
    <div class="parallax-bg" style="
          background-image: url(img/img_carousel_3.jpg);
        " data-swiper-parallax="-23%"></div>
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="title" data-swiper-parallax="-300">Introduction</div>
        
        <div class="text" data-swiper-parallax="-100">
          <p>
          
Dans les replis majestueux des montagnes, où le vent chante son hymne et les roches murmurent des histoires millénaires, repose un sanctuaire oublié des hommes. C'est là, dans l'intimité de la nature sauvage, que réside l'esprit de la falaise, gardien vigilant d'un jardin sacré. Mais hélas, ce lieu de paix et de beauté a été profané, souillé par l'ignorance et la négligence des visiteurs. L'esprit de la falaise, empli d'une tristesse profonde, décide qu'il est temps d'agir.
          </p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="title" data-swiper-parallax="-300">Histoire</div>
        
        <div class="text" data-swiper-parallax="-100">
          <p>
          Dans les hauteurs de la montagne, l'esprit de la falaise veillait sur son sanctuaire souillé par les pêcheurs. Déterminé à restaurer la pureté de son jardin sacré, il nettoya les déchets, effaça les tags et rendit le site sûr et propre. Bientôt, la beauté naturelle retrouva sa splendeur, accueillant à nouveau les visiteurs dans un lieu préservé et respecté.
          </p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="title" data-swiper-parallax="-300">Mission</div>  
        
        <div class="text" data-swiper-parallax="-100">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
            dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla
            laoreet justo vitae porttitor porttitor. Suspendisse in sem justo.
            Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod.
            Aliquam hendrerit lorem at elit facilisis rutrum. Ut at
            ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec,
            tincidunt ut libero. Aenean feugiat non eros quis feugiat.
          </p>
        </div>
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

  <a id="download" href="#">Télécharger le jeu ici</a>
  
    
    <div class="don">
        <h2>Cagnotte de Dons</h2>
        <p>Total des Dons : <span id="totalDonations">0</span>€</p>
        <progress value="0" max="500"></progress>
        <button id="donateBtn">Faire un Don</button>
    </div>

    <div id="review">
        <div class="reviews">
            <div class="identity">
                <img src="img/avatar/avatar_1.jpg" alt="avatar">
                <h3>Sx</h3>
            </div>
            <p>Les jeux vidéo offrent une expérience ludique immersive qui stimule la créativité et la réflexion stratégique. En explorant des mondes virtuels, on développe des compétences cognitives tout en s'amusant.</p>
        </div>
        <div class="reviews">
            <div class="identity">
                <img src="img/avatar/avatar_2.jpg" alt="avatar">
                <h3>Nootzzz</h3>
            </div>
            <p>L'escalade virtuelle dans les jeux vidéo offre une sensation authentique de défi physique et mental, tout en mettant l'accent sur la sécurité. On ressent la même montée d'adrénaline et le même sentiment d'accomplissement que dans l'escalade réelle.</p>
        </div>
        <div class="reviews">
            <div class="identity">
                <img src="img/avatar/avatar_3.jpg" alt="avatar">
                <h3>KillMax</h3>
            </div>
            <p>Tant dans les jeux vidéo que dans l'escalade, l'intégrité est primordiale. Respecter les règles du jeu ou les protocoles de sécurité de l'escalade montre un engagement envers l'éthique et le fair-play, renforçant ainsi le lien entre le plaisir et la responsabilité. Franchement chapeau au dev du jeux !</p>
        </div>
    </div>

<div class="vente">
            <h2>Produits en vente pour nous <span class="stn">soutenir</span></h2>
                <img class="prdt" src="img/Produit/magnesie.png" alt="produit">
                <div class="info">
                  <h2 class="titremgn">
                    Magnesie Esco
                  </h2>
                <p class="desc">La magnésie offre une meilleure adhérence lors de l'escalade et de la gymnastique en absorbant la transpiration des mains. Les produits associés à la magnésie sont tous écoresponsables, soulignant ainsi un engagement envers l'environnement.</p>
                <p class="prix">3.99€</p>
                <button>Acheter</button>  
                </div>    
</div>

<?php 

    require("footer.php");

?>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Swiper JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> -->
    <script>
        // var swiper = new Swiper(".mySwiper", {});
        var swiper = new Swiper(".mySwiper", {
      speed: 600,
      parallax: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

        document.addEventListener("DOMContentLoaded", function() {
        let totalDonations = 86.76

        const totalDonationsElement = document.getElementById("totalDonations");
        const progressBar = document.querySelector("progress")
        const donateBtn = document.getElementById("donateBtn")

        function updateAmounts() {
            totalDonationsElement.textContent = totalDonations.toFixed(2)
            progressBar.value = Math.min(totalDonations, 500); // Ensure the value does not exceed 500
            progressBar.max = 500
        }

        donateBtn.addEventListener("click", function() {
            const donationAmount = parseFloat(prompt("Entrez le montant du don :"))
            if (!isNaN(donationAmount) && donationAmount > 0) {
                totalDonations += donationAmount
                updateAmounts()
            } else {
                alert("Veuillez entrer un montant de don valide.")
            }
        })
        
        updateAmounts()
        })
    </script>



</body>
</html>