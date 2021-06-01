<?php 


ob_start();
?>

<link rel="stylesheet" href="./asset/css/topgame.css"/>
<title>HStory - Top Gamer</title>

<?php

$css = ob_get_clean();

include "layout/header.php";

?>

<html>
    <body>
        <div class="main">

        <div class="gamer-girl">
        <span class='top-title'>Top Gamers Fille</span>
            <ul>
                <li>
                  <img src="https://habbo.com/habbo-imaging/avatarimage?figure=hr-3499-1394-61.hd-209-8.ch-3498-1409.lg-3058-91.sh-3524-64-110.cc-3002-110&size=l&direction=2&head_direction=2&gesture=std&headonly=1" alt="" class="icone_profile">
                  <span>Ilonah</span> 

                  <div class="avatar">

                  <span>20pts</span>                      
                  </div>

                </li>
            </ul>
        </div>

        <div class="gamer-boy">
            <span class='top-title'>Top Gamers Garçon</span>
            <ul>
                <li>
                    
                  <img src="https://habbo.com/habbo-imaging/avatarimage?figure=hr-3499-1394-61.hd-209-8.ch-3498-1409.lg-3058-91.sh-3524-64-110.cc-3002-110&size=n&direction=2&head_direction=2&gesture=std&headonly=1" alt="" class="icone_profile">
                  <span>Killian</span>
                  <div class="avatar">

                  <span>20pts</span>                      
                  </div>

                </li>
            </ul>
        </div>

        <div class="gamer-all">
        <span class='top-title'>Top Gamers Général</span>
            <ul>
                <li>
                    
                  <img src="https://habbo.com/habbo-imaging/avatarimage?figure=hr-3499-1394-61.hd-209-8.ch-3498-1409.lg-3058-91.sh-3524-64-110.cc-3002-110&size=n&direction=2&head_direction=2&gesture=std&headonly=1" alt="" class="icone_profile">
                  <span>Ilonah</span>
                  <div class="avatar">

                  <span>20pts</span>                      
                  </div>

                </li>

                <li>
                    
                  <img src="https://habbo.com/habbo-imaging/avatarimage?figure=hr-3499-1394-61.hd-209-8.ch-3498-1409.lg-3058-91.sh-3524-64-110.cc-3002-110&size=n&direction=2&head_direction=2&gesture=std&headonly=1" alt="" class="icone_profile">
                  <span>Killian</span>
                  <div class="avatar">

                  <span>20pts</span>                      
                  </div>

                </li>
            </ul>
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