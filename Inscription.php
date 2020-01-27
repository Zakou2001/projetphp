<?php 
include("conn.php");
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['submit']))

{
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $genre=$_POST['genre'];  
  $type=$_POST['type'];
  $niveau_etudes=$_POST['niveau_etudes'];
  $email=$_POST['email'];
  $mdp=$_POST['mdp'];
    
  $_SESSION["snom"]=$nom;
  $_SESSION["sprenom"]=$prenom;
  $_SESSION["semail"]=$email;
    
    
    
    if($nom!="" && $prenom!="" && $type!="" && $niveau_etudes!="" && $email!="" && $mdp!="" )
  { 
        $insert="INSERT INTO `Inscription`(`genre`,`nom`,`prenom`,`type`,`niveau_etudes`,`email`,`mdp`) VALUES('".$genre."','".$nom."','".$prenom."','".$type."','".$niveau_etudes."','".$email."','".$mdp."')";
      $data=mysqli_query($conn,$insert); 
      if($data)
	  {
	  
	  
          header("Location:Message_bienvenue.php"); 
	  }
        else
        {
            echo "Erreur !! Veuillez réessayer";
        }
        
    }
    else{
        echo "Tous les champs doivent être remplis !!";
    }
}


?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="Images/logo EPSI 1.jpg" />
    <title >Inscription</title>
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
 fieldset{
  width: 118%;
  margin-left:5%; 
  border: 2px inset #00BCD4;


}

form
{ line-height: 50px;
  margin-top: -40%;
  margin-left: 65%;
  float:left;
}
input[type="email"], input[type="password"], input[type="text"]{
  width:144%;
  height:30px;
  border: none;
  font-size: 17px;
  padding: 0px;
}
input[type="email"]:focus, input[type="password"], input[type="text"]:focus {
  border-left: 3px  solid #fe655d;
}
input[type="submit"]{
  background-color: #00BCD4;
  border:none;
  border: 1px solid red;
  height: 40px;
  margin: 50px auto;
  display: block;
  color: #fff;
  border-radius: 3px;
  font-size: 20px;
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
<section>
<div id="boite">
<img src="Images/2.jpeg" width=1000 height=615>
<form action="" method="post">
<fieldset>
   <legend style="font-size:15pt;"><b>Mes informations</b></legend>
                <table style="font-size:15pt;" >
                
                  <tr>
                    <td><b>Nom:</b></td>
                    <td ><input type="text" required="required" name="nom" placeholder="Votre nom"></td>
                  </tr>

                  
                  <tr>
                    <td><b>Prénom:</b></td>
                    <td ><input type="text" required="required" name="prenom" placeholder="Votre prénom"></td>
                  </tr>

                <tr>
                    <td><b>Genre:</b></td>
                    <td>
                      <input type="radio" name="genre" value="m" checked> Homme
                      <input type="radio" name="genre" value="f"> Femme
                    </td>
                   </tr>

                <tr>
                      <td><b>Type:</b></td>
                      <td>
                      <input type="radio" name="type" value="Etudiant" checked> Etudiant
                      <input type="radio" name="type" value="Enseignant" checked> Enseignant
                      </td>
                </tr>

                <tr>
                      <td><b>Niveau d'études:</b></td>
                      <td><select required name="niveau_etudes">
                      <option value="B1">Bachelor 1</option>
                      <option value="B2">Bachelor 2</option>
                      <option value="B3">Bachelor 3</option>
                      <option value="I1">Ingénierie 1</option>
                      <option value="I2">Ingénierie 2</option>
                      <option value="E">Enseignant</option>
                      </td>
               </tr>
    

                    <tr>
                      <td>
                      <tr><td><b>Email</b></td>
                      <td><input type="email" name="email" required="required" placeholder="exemple@epsi.fr"/></td>
                    </tr>
                   
                    <tr>
                      <td><b>Mot de passe:</b></td>
                      <td><input type="password" name="mdp" required="required" placeholder="*************"/></td>
                  
                    </tr>

                       <tr>
                      <td><input type="submit" name="submit"value="Je m'inscris"></td>
                    </tr>
                </td>
              </tr>
            </select>
          </td>
        </tr>
      </fieldset>
    </table>
    </form>
  </div>
</section>




<footer class="bas de page">
          <div class="innerfooter">
            <a href="apropos.php" class="m-link"><i class="far fa-copyright"></i> Kemet-group</a>
          </div>   
</footer>
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
