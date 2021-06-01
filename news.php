<?php 


ob_start();
?>

<link rel="stylesheet" href="./asset/css/news.css"/>
<title>HStory - Article</title>

<?php

$css = ob_get_clean();

include "layout/header.php";

?>
<html>
<body>
    <div class="main">
    <div class="lastNews">
    <p>Articles récents</p>
    <div class="liste">
      <ul>
          <li>Article 1 MMLFOPFKPOFVKD VCINDS</li>
          <li>Article 1</li>
          <li>Article 1</li>
          <li>Article 1</li>
          <li>Article 1</li>
          <li>Article 1</li>
          <li>Article 1</li>
          <li>Article 1</li>
          <li>Article 1</li>
          <li>Article 1</li>
      </ul>
    </div>
    </div>    
     <div class="currentNews">
       <div class="title">
          <p>Ceci est le titre de l'article <em>le 31/05/2021</em></p>   
         
       </div>

   <div class="contenu">
   <em>Et ceci sa description</em>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quas ducimus maiores, perspiciatis modi perferendis possimus eveniet ad autem, quo facilis distinctio
         reprehenderit earum. Mollitia sequi maiores ex necessitatibus quidem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni explicabo iure atque, veniam autem suscipit architecto eaque deleniti exercitationem itaque. Adipisci quis fugiat 
         tenetur totam error? Porro mollitia vel nemo. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta hic, veniam eos magni suscipit quia! Vitae odit ullam quia ea doloremque,
          quaerat, alias voluptatem quod illo, eveniet impedit eaque quae. <br>
          <div class="author">
              <strong>Killian</strong>, Fondateur d'HStory
          </div>

        </p>      
   </div>
   <div class="commentaire">
     <p>Commentaires</p>
     <form action="">
       <textarea name="commentaire" id="commentaire" cols="115" rows="10" placeholder="Écrire quelque chose..."></textarea>
       <input type="submit" value="Envoyer">
     </form>
   </div>

   <div class="sent">
     <div class="hasSent">

        <img src="https://habbo.com/habbo-imaging/avatarimage?figure=hr-3531-1407-61.hd-209-20.ch-3498-1409.lg-3058-91.sh-3524-64-110.fa-3344-110.cc-3002-110&size=n&direction=2&head_direction=2&gesture=std&headonly=1" alt="">
       <span class="pseudo">Test : </span><span class="message">Ceci est un test de commentaire !</span>

     </div>


     <div class="hasSent">
       <img src="https://habbo.com/habbo-imaging/avatarimage?figure=hr-3531-1407-61.hd-209-20.ch-3498-1409.lg-3058-91.sh-3524-64-110.fa-3344-110.cc-3002-110&size=n&direction=2&head_direction=2&gesture=std&headonly=1" alt="">
       <span class="pseudo">Test : </span><span class="message">Ceci est un test de commentaire !</span>
     </div>

     <div class="hasSent">
       <img src="https://habbo.com/habbo-imaging/avatarimage?figure=hr-3531-1407-61.hd-209-20.ch-3498-1409.lg-3058-91.sh-3524-64-110.fa-3344-110.cc-3002-110&size=n&direction=2&head_direction=2&gesture=std&headonly=1" alt="">
       <span class="pseudo">Test : </span><span class="message">Ceci est un test de commentaire !</span>
     </div>
   </div>
        
     </div>

     

    </div>

    <footer>
    <div class="container">
       HStoryCMS Développé par Killian © 2021<br />
    HStory n'est pas une marque déposée ou affiliée à Sulake Corporation. Tout droit réservés à leur propriétaire respectif.
    </div>
   
</footer>
</body>
</html>