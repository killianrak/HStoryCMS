<?php 


ob_start();
?>

<link rel="stylesheet" href="./asset/css/settings.css"/>
<title>HStory - Paramètres</title>

<?php

$css = ob_get_clean();

include "layout/header.php";

?>

<html>
    <body>
        <div class="settings-main">
         <nav class="settings-nav .nav">
            <ul>
                <li>
                    Général
                    <ul class="sub-menu">

                         <li class="mdp">
                            Changer mon mot de passe
                        </li>

                         <li class="email">
                            Changer mon adresse email
                        </li>
 
                    </ul>
                </li>
                <li>
                    Compte
                    <ul class="sub-menu1">
                        <div class="toggle 1">
                          <li>Accepter les textamigos</li>
                          <input type="checkbox">
                        </div>
                        
                        <div class="toggle 2">
                          <li>Activer/Désactiver les échanges</li>
                          <input type="checkbox">
                        </div>
                        
                        <div class="toggle 3">
                          <li>Permettre aux <br> joueurs de me suivre</li>   
                          <input type="checkbox">                         
                        </div>

                    </ul>
                </li>
            </ul>
        </nav>
         <div class="overlay">
         <div class="buttonClose">&times;</div>
         <form action="" class="formulaire formulairePassword">
             <label for="oldpassword">Mot de passe actuel</label>
             <input type="password" id="oldpassword" name="oldpassword">

             <label for="newpassword">Nouveau mot de passe</label>
             <input type="password" id="newpassword" name="newpassword">

             <label for="password_confirmation">Confirme ton nouveau mot de passe</label>
             <input type="password" id="password_confirmation" name="password_confirmation">

             <input type="submit" value="Confirmer">
           </form>

           <form action="" class="formulaire formulaireEmail">
           <label for="oldemail">Adresse email actuelle</label>
             <input type="text" id="oldemail" name="oldemail">

             <label for="newemail">Nouvelle adresse email</label>
             <input type="text" id="newemail" name="newemail">

             <input type="submit" value="Confirmer">
           </form>
         </div>

        </div>
        <footer>
    <div class="container">
       HStoryCMS Développé par Killian © 2021<br />
    HStory n'est pas une marque déposée ou affiliée à Sulake Corporation. Tout droit réservés à leur propriétaire respectif.
    </div>
   
</footer>
    <script src="asset/js/settings.js"></script>
    </body>
</html>
