<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="asset/image/favicon.ico">
    <?= $css; ?>
    <meta name="viewport" content="width=device-width" />
    <style>
        *, *::before, *::after {
    margin: 0px;
    padding: 0px;
}

@font-face {
    font-family: 'Montserrat-Bold';
    src:url('../polices/montserratbold/Montserrat-Bold.ttf.woff') format('woff'),
        url('../polices/montserratbold/Montserrat-Bold.ttf.svg#Montserrat-Bold') format('svg'),
        url('../polices/montserratbold/Montserrat-Bold.ttf.eot'),
        url('../polices/montserratbold/Montserrat-Bold.ttf.eot?#iefix') format('embedded-opentype'); 
    font-weight: normal;
    font-style: normal;
}

body {
    min-height: 100vh;
    margin: auto;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    background: url('./asset/image/bg1.png');
    background-size: cover;
}

body, html {
    display: table;
    height: 100%;
    width: 100%;
}

section{
    width: 900px;
    margin: auto;
    margin-top: -20px;
}

html {
    height: 100%;
    margin: 0;
}
header {
    display: flex;
    flex-direction: column;
    background: url('./asset/image/header_home.png') no-repeat;
    background-size: 100%;
}

.hotel_img {
    height: 150px;
    margin-left: 100px;
    margin-top: 10px;
}


nav ul {
    display: flex;
    justify-content: space-around;
    background: #183D60;
    color: white;
    padding: 5px;
    box-shadow: 0px 5px 7px black;
}

nav ul li {
    list-style: none;
    font-size: 1.2em;
    position:  relative;
    cursor: pointer;

}

.list_item:hover .dropdown, .list_item:focus .dropdown{
    opacity: 1;
    visibility: visible;
    z-index: 1;
}

.list_item a {
    text-decoration: none;
    color: white;
}


.dropdown li a {
    font-size: 0.8em;
}

.dropdown {
    margin-top: 5px;
    position: absolute;
    box-shadow: 0 0 10px black;
    border-radius: 3px;
    width: 12rem;
    padding: 1rem;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.2s ease-in-out;
}

li {
    transition: background-color 0.2s ease-in-out;
    padding: 0.5rem 1rem;
}

.dropdown li:hover{
    background-color: #0d2f50;
}
nav ul li ul {
    display: flex;
    flex-direction: column;
}

nav ul li ul li {
    display: flex;
    flex-direction: column;
}

nav ul li ul li a {
    text-decoration: none;
    color: white;
}

.icone_community {
    height: 100px;
    margin-top: -35px;
}

.icone_boutique {

        height: 30px;
        margin-top: -5px;

}

.icone_scores {
    height: 40px;
    margin-top: -10px;
}

.icone_profile {
    height: 50px;
    margin-top: -20px;
}

.item {
    display: flex;
    height: 20px;
}

.logo {
    margin-bottom: 40px;
    margin-left: 70px;
    margin-top: 5px;
    display: flex;
    justify-content: space-between;
}

.logo p{
    background: white;
    margin-right: 150px;
    margin-top: -10px;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    padding: 20px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}

@media all and (max-width: 640px){
    nav ul {
     display: none;
    }
    
.display {
    
   display: flex;
   flex-direction: column;

}

    .hamburger {
        position: relative;
        display: inline-block;
        width: 1.25em;
        height: 0.8em;
        margin-right: 0.3em;
        border-top: 0.2em solid #fff;
        border-bottom: 0.2em solid #fff;
    }

    .list_item:nth-child(2) {
         
        background: #0f3558;
        

    }
    
    .list_item:nth-child(2) .item{
        margin-left: -35px;
    }

    .list_item:nth-child(4) {
         
        background: #0f3558;

    }

    .icone_community {
        margin-left: 25px;
        margin-right: -20px;
    }

    .icone_boutique {
        margin-left: 5px;
    }
    
      .hamburger:before {
          content: "";
          position: absolute;
          top: 0.3em;
          left: 0px;
          width: 100%;
          border-top: 0.2em solid #fff;
      }
  
      .menu_burger {
          text-align: center !important;
          background-color: #183D60;
          padding: 5px;
          margin-top: -20px;
          cursor: pointer;
          box-shadow: 0px 5px 7px black;

      }

}

@media all and (max-width: 1024px) {
    section, .container_header {
        width: 100%;
        margin: auto;
    }
    
    body {
        margin-bottom: 50px;
    }

}
    </style>
</head>

<body>

<header>
    <div class="logo">
        <div class="logo_img">
         <img src="asset/image/hstory.gif" alt="">
        </div>

        <p>0 joueurs en ligne !</p>
        </div>
    <div class="container_header">
    <nav class="nav">            
        <div class="menu_burger">
                <span class="hamburger">
                    </span>
    </div>

        <ul>


            <li class="list_item">
                <div class="item">
                <img src="https://habbo.com/habbo-imaging/avatarimage?figure=hr-3499-1394-61.hd-209-8.ch-3498-1409.lg-3058-91.sh-3524-64-110.cc-3002-110&size=n&direction=2&head_direction=2&gesture=std&headonly=1" alt="" class="icone_profile"> 
                <span class="lol">Killian</span>
                </div>

              <ul class="dropdown">
                  <li><a href="./home.php">Profil</a></li>
                  <li><a href="./settings.php">Paramètres</a></li>
                  <li><a href="">Déconnexion</a></li>
              </ul> 

            </li>

            <li class="list_item">
                <div class="item">
                    <img src="asset/image/icone_community.png" alt="" class="icone_community">
                    Communauté
                </div>

                 <ul class="dropdown">
                    <li><a href="staff.php">Équipe</a></li>
                    <li><a href="news.php">News</a></li>
                </ul>

  
            </li>

            <li class="list_item">                
            <div class="item">
                <img src="asset/image/hiscores_preview.gif" alt="" class="icone_scores">
                Classement
            </div>

              <ul class="dropdown">
                <li>
                    <a href="topgame.php">Top Gamer</a></li>
                   <li><a href="topwinwins.php">Top Winwins</a></li>
                   <li><a href="topjetons.php">Top Jetons</a></li>
               </ul>

            </li>

            <li class="list_item">
              <div class="item">
                  <img src="asset/image/icone_boutique.png" alt="" class="icone_boutique">
                  <a href="">Boutique</a>
                 
              </div>


          </li>

        </ul>
    </nav>
    </div>
    <script src="./asset/js/layout.js"></script>
</header>