<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="Images/logo EPSI 1.jpg" />
    <title >À propos</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
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
  bottom: 0px;
  clear:both;
 }
p {
color:black;
text-align:center;
width:40%;
font-weight:bold;
margin-left:28%;
background:white;
box-shadow:0px 0px 20px #00BCD4;
border-radius:10px;
padding:2%;
font-size:15px;
}
div.membres{
color:black;
text-align:center;
width:40%;
font-weight:bold;
margin-left:28%;
background:white;
box-shadow:0px 0px 20px #00BCD4;
border-radius:10px;
padding:2%;
font-size:15px;
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
            <a href="apropos.php" class="m-link"> <i class="fas fa-envelope"></i> À propos</a>
          </div>
          </div>  
        </nav>
      </header>
<section>
      <h1 style="text-align: center;">À propos du projet</h1> 
      <P>Ce projet est le prototype d'un système de gestion de bibliothèque. Le bibliothécaire a la possibilité d'ajouter, de modifier et de supprimer des livres dans le site. De plus, tout utilisateur qui s'inscrit a la possibilité de faire un prêt de deux livres maximum pour une durée de quinze (15) jours.</P>
      
       <h2 style="text-align: center;"> Remerciement </h2>
      <P>Nous tenons à exprimer nos chaleureux remerciements à nos professeurs, Mme. Mona DOGAHE et M. Mathieu MULOT, qui nous ont donné l'opportunité de réaliser ce merveilleux projet. Ce dernier nous a également permis à parfaire notre niveau en PHP/SQL et HTML/CSS  et à beaucoup faire de recherches, de suivre des tutoriels,.... et tout.</P>
     
      <h2 style="text-align: center;"> Membres du Groupe </h2>
      <div class="membres">
          
        Mathieu MENDY &nbsp; - &nbsp;  Brel BOUANGA  &nbsp;  -  &nbsp;  Aboubacar ZAKOU-DJIBO   &nbsp; -  &nbsp;  Daniel NGUESSO
      </div>
      <footer class="bas de page">
          <div class="innerfooter">
            <a href="apropos.php" class="m-link"><i class="far fa-copyright"></i> Kemet-group</a>
          </div>   
      </footer>
    </section>
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
