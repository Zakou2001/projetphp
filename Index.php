<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="Images/logo EPSI 1.jpg" />
    <title >Accueil</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/Style">
    <script src="https://kit.fontawesome.com/f32615fb2d.js" crossorigin="anonymous"></script>
  </head>
 <style>
  @import url('https://fonts.googleapis.com/css?family=Roboto:100,300,500,900&display=swap');
@import url('https://fonts.googleapis.com/css?family=Lato:100,300,700,900&display=swap');
html body{
  margin: 0; padding:0; 
  font-family: 'lato';
  height: 100%; 
  background: #DFF2FF;
}
.menu{
  background-color: #00BCD4;
  width: 100%;
  height: 60px;
  line-height: 60px;
}
.logo{
  margin: 0;padding: 0;
  color: white;
  text-transform: uppercase;
  font-family: 'Roboto';
  font-weight: 900;
  font-size: 35px;
  letter-spacing: 1px;
}
.m-left{
  float: left;
}
.m-right{
  float: right;
}
.inner{
  width: 90%;
  margin:auto;
}
.m-link{
  text-decoration: none;
  color: white;
  text-transform: uppercase;
  font-weight: 700;
  margin: 0; padding: 0 15px;
  transition: all 0.3s ease-in-out;
  border-bottom: 2px solid transparent; 
}
.m-link i{
  margin-right: 5px;
}
.m-link:hover{
  padding-bottom: 3px;
  border-color: white; 
}
.contenu
{
  min-height: 100%;
  position: relative;
}
.innerfooter
{
  width: 90%;
  margin:auto;  
}
footer
{
  width: 100%;
  height: 50px;
  line-height: 50px;
  background-color: #00BCD4;
  position: absolute;
  bottom: -100px;
  clear:both;
 }
img.images{
  margin-top:2%;
  margin-left:25%;
  border: 3px groove #DFF2FF;
  border-radius: 10px 10px 10px 10px;
}
p {
color:black;
text-align:center;
width:20%;
font-weight:bold;
margin-left:6%;
background:white;
box-shadow:0px 0px 20px #00BCD4;
border-radius:10px;
padding:2%;
font-size:15px;
}
.P1 {
color:black;
text-align:center;
width:20%;
font-weight:bold;
margin-left:38%;
background:white;
box-shadow:0px 0px 20px #00BCD4;
border-radius:10px;
padding:2%;
font-size:15px;
position: absolute;
top: 560px}
.P{
color:black;
text-align:center;
width:20%;
font-weight:bold;
margin-left:70%;
background:white;
box-shadow:0px 0px 20px #00BCD4;
border-radius:10px;
padding:2%;
font-size:15px;
position: absolute;
top: 560px;
}
  </style>
  <body>
    <div id="contenu">
      <header role='header'>
        <nav class="menu" role='navigation'>

          <div class='inner'>
            <div class="m-left">
            <h1 class="logo" ><img src="Images/logo EPSI 1.jpg" width=30 height=30> <span class="typed-words"></span></h1></a>
          </div>
          <div class="m-right">
            <a href="Index.php" class="m-link"><i class="fa fa-home" aria-hidden="true"></i> Accueil</a>
            <a href="connexion.php" class="m-link"><i class="fas fa-at"></i> Connexion</a>
            <a href="Inscription.php" class="m-link"><i class="fas fa-pen"></i> Inscription</a>
            <a href="apropos.php" class="m-link"><i class="fas fa-address-card"></i> À propos</a>
          </div>
          </div>  
        </nav>
      </header>
<section>
 <img class="images" src="Images/7" width=780 height=450 alt="">
<div class="img"></div>
</section>
<div><P> <b>BIENVENUE !</b> <br><br> Bienvenue sur le site Web de la Bibliothèque de EPSI. tout utilisateur qui s'inscrit a la possibilité de faire un prêt de deux livres maximum pour une durée de quinze (15) jours.</P></div>
<div class="P" > <b>HORAIRES</b><br> 
          <ul>   
              <li>Lundi 13/20h</li> 
              <li>Mardi 9/13h - 13/20h</li>
              <li>Mercredi 9/13h - 13/20h</li>
              <li>Jeudi 9/13h - 13/20h</li>
              <li>Vendredi 9/13h - 13/20h</li>
          </ul></div>
<div class="P1"> <b>ACTUALITES</b><br> 
          <ul> 
            <li>Pour la 2eme année consécutive, le groupe EPSI a participé à la parisienne !</li>
            <li>LYON | Un business game en parténariat avec la commune de Villefranche sur Saône</li>
            
          </ul></div>

      <footer class="bas de page">
          <div class="innerfooter">
            <a href="apropos.php" class="m-link"><i class="far fa-copyright"></i> Kemet-group</a>
          </div>   
      </footer>
    
  </div>

  <script src="js/typed.js"></script>
            <script>
            var typed = new Typed('.typed-words', {
            strings: ["Bibliothèque d'EPSI", " Learn, Code Lead !"],
            typeSpeed: 70,
            backSpeed: 60,
            backDelay: 3000,
            startDelay: 1000,
            loop: true,
            showCursor: true
            });
            </script>
</body>
</html>
