<?php 
session_start(); 
$nom2=$_SESSION["snom"];
$prenom2=$_SESSION["sprenom"];
$email=$_SESSION["semail"];
?>

<?php header('Refresh: 15; URL=index.php'); ?>

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
  </style>
  <body>
    <div id="contenu">
      <header role='header'>
        <nav class="menu" role='navigation'>

          <div class='inner'>
            <div class="m-left">
            <h1 class="logo" ><img src="Images/logo EPSI 1.jpg" width=30 height=30> <span class="typed-words"></span></h1></a>
          </div>  
        </nav>
      </header>
        <div>
        <center>
            <h2>Merci <?php echo "$nom2"; ?> <?php echo "$prenom2";?> </h2>
            <h2>Votre mail <u><?php echo $email; ?></u> est votre identifiant de connexion</h2>
            <h2>Vous pouvez maintenant vous connecter avec votre identifiant et votre mot de passe</h2>
            <h2>Cette page est automatiquement redirigée vers la page de connexion</h2>
        </center>
        </div>
            
            <?php session_destroy();  ?>
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