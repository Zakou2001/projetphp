<?php
include("conn.php");

$error="";
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit']))
{  
   $count=0;
   $data=mysqli_query($conn,"select * from Inscription where email='$_POST[email]' && mdp='$_POST[mdp]'");
   $count=mysqli_num_rows($data);
   $row = mysqli_fetch_array($data);
   
   if($count==0)
   {
      $error= "Adresse mail ou mot de passe invalide";
   }
   
else 
    
    
{
        if($row["type"]=="admin")
         {
          header("Location:admin.php"); 
         }
       else{
           $_SESSION["snom"]=$row["nom"];
           $_SESSION["semail"]=$row["email"];
           $_SESSION["sgenre"]=$row["genre"];
           header("Location:Categorielivre.php");
           }
}
   
}

 
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="Images/logo EPSI 1.jpg" />
    <title >Connexion</title>
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
#maBoite { 
 width:100%;
 height: 100%;
 margin: auto;
}
.heade{
  width: 100%;
  height:90%;
}
.heade h1{
  text-align:center;
  padding-top: 18px;
  color: #8f95a1;
  margin: 20;
}
input{
  outline: none;
  background-color:white;
}
#contenuc {
  position: fixed;
  left: 50%;
  top: 35%;
  width: 390px;
  height: auto;
  margin: 0 auto;
  margin-left: -170px;
  margin-top: -150px;
  background-color:#f7f7f7;
  border: 4px ridge #ededed;
  border-radius: 5px;
  
}

h2{
  margin: 0;
  width: auto;
  height: 25px;
  background-color:#fff;
  color:#8f95a1;
  padding: 20px 35px;
  border-top: 1px solid #ededed;
}
input[type="mail"], input[type="password"]{
  width:84%;
  height:40px;
  border: none;
  font-size: 17px;
  padding: 0 30px;
  
}
input[type="mail"]:focus, input[type="password"]:focus {
  border-left: 3px  solid #fe655d;
}
input[type="password"]{
  border-bottom:1px solid #ededed;
}
input[type="submit"]{
  background-color: #00BCD4;
  border:none;
  border: 1px solid red;
  height: 60px;
  width:310px;
  margin: 30px  auto;
  display: block;
  color: #fff;
  border-radius: 3px;
  font-size: 20px;
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
button a 
    {
      text-decoration: none;
      font-size: 120%;
      color: #8f95a1;
    }

p a
    {
      text-decoration: none;
      font-size: 110%;
      color: #BB0B0B;
    }  
  </style>
  
  <body>
    <div id="contenu">
      <header role='header'>
        <nav class="menu" role='navigation'>

          <div class='inner'>
            <div class="m-left">
            <h1 class="logo" ><img src="Images/logo EPSI 1.jpg" width=30 height=30><span class="typed-words"></span></h1></a>
          </div>
          <div class="m-right">
            <a href="Index.php" class="m-link"><i class="fa fa-home" aria-hidden="true"></i> Accueil</a>
            <a href="connexion.php" class="m-link"><i class="fas fa-at"></i> Connexion</a>
            <a href="Inscription.php" class="m-link"><i class="fas fa-pen"></i> Inscription</a>
            <a href="apropos.php" class="m-link"><i class="fas fa-address-card"></i> À Propos</a>
          </div>
          </div>  
        </nav>
      </header>
      
      <div id="maBoite">  
      <div id="contenuc">
      <div class="heade">
      <h1>
      CONNEXION
      </h1>
      </div>
      <form method="post" action="">
      
      <h2>Adresse mail</h2> 
      <input type="mail" name="email" placeholder="exemple@epsi.fr" />
      
      <h2>Mot de passe</h2> 
      <input type="password" name="mdp" placeholder="**********" > 
      
      <input input type="submit" name="submit" value="Se connecter">
         
          <p style="color: red;"><?php echo $error ?></p>
    
    <p>Vous n'avez pas encore de compte ? &nbsp;&nbsp;&nbsp;&nbsp; <a href="Inscription.php">Créez-en un! </a> </p>
    <div class="ba de page">
    <button> <a href="accueil.php">Revenir à la page d'accueil<a/></button> 
    </div>  
    </div>    
     </div>
        
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
      