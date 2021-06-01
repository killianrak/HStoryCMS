<?php

ob_start();

?>

<link rel="stylesheet" href="./asset/css/home.css"/>
<title>HStory - Home</title>

<?php

$css = ob_get_clean();
include "layout/header.php";

?>

<div class="withSocials">
<section>
<div class="profile">
    <div class="avatar">
         <div class="habbo_avatar">
           <img src="https://habbo.com/habbo-imaging/avatarimage?figure=hr-3499-1407-61.hd-209-8.ch-4003-1409.lg-285-91&size=n&direction=2&head_direction=2&gesture=std" alt="avatar du compte" class="habbo">
         </div>

  <div class="infos">
    <div class="info_jetons">
      Jetons : 0
    </div>
    <div class="info_winwinw">
        Winwins: 0
    </div>
    <div class="info_points">
        Points Gamer: 0
    </div>
    <div class="info_moto">
        <p>Bienvenue sur HStory !</p>
    </div> 
      
  </div>

</div>

<div class="button_image">
      <div class="buttonEnter">
    <a href="">Entrer dans l'hôtel</a>
</div>

        <img src="asset/image/hotel.png" alt="" class="hotel_img" />



</div>
</div>      
    <div class="dots">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
      </div>

<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="slide_image">
           <img src="asset/image/lol.png">
        </div>
  
        <div class="text">
            <div class="title_desc">
             <p>Ceci est le premier article</p>
            <p>avec sa description !</p>
            </div>

            <div class="suite">
                <a href="#">Lire la suite</a>
              </div>
          </div>
      </div>
      
      <div class="mySlides fade">
        <img src="asset/image/article_test.png">
        <div class="text">
            <div class="title_desc">
            <p>Ceci est le deuxième article</p>
          <p>avec sa deuxième description !</p>
            </div>

          <div class="suite">
            <a href="#">Lire la suite</a>
          </div>
      </div>
      </div>
      
      <div class="mySlides fade">
        <img src="asset/image/article_test2.png">
        <div class="text">  
            <div class="title_desc">
            <p>Ceci est le troisième article</p>
          <p>avec sa troisième description !</p>
            </div>     

          <div class="suite">
            <a href="#">Lire la suite</a>
          </div>
      </div>
  
      </div>    
    </div>


       

</section>
<aside>
  <div class="socials">
    <h1>Réseaux</h1>
    <div class="images">
     <img src="asset/image/insta.png" alt="logo_insta">
    <img src="asset/image/twitter.png" alt="logo_insta">
    </div>
</aside>
</div>

<footer>
    <div class="container">
       HStoryCMS Développé par Killian © 2021<br />
    HStory n'est pas une marque déposée ou affiliée à Sulake Corporation. Tout droit réservés à leur propriétaire respectif.
    </div>
   
</footer>

<script src="asset/js/home.js"></script>
</body>
</html>