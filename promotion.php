<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promotion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/promotion.css">
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
      <div class="swiper-slide">
        <div class="title" data-swiper-parallax="-300">Histoire</div>
        
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
            <p>Lorem ipsum, dolor sit amet Lorem ipsum, dolor sit consectetur adipisicing elit. In sit nostrum, mollitia possimus.</p>
        </div>
        <div class="reviews">
            <div class="identity">
                <img src="img/avatar/avatar_2.jpg" alt="avatar">
                <h3>Nootzzz</h3>
            </div>
            <p>Lorem ipsum, dolor sit Lorem aborum alias quaerat tempore placeat repellendus. Asperiores ea, omnis tempore illum nesciunt minima. Similique eveniet repudiandae quas eligendi, mollitia voluptatem? amet consectetur adipisicing elit. In sit nostrum, mollitia possimus.</p>
        </div>
        <div class="reviews">
            <div class="identity">
                <img src="img/avatar/avatar_3.jpg" alt="avatar">
                <h3>KillMax</h3>
            </div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In sit nostrum, mollitia possimus.Lorem ipsum, dolor sit amet consectetur adipisicing elit. In sit nostrum, mollitia possimus.Lorem ipsum, dolor sit ame possimus.</p>
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