<?php
$msg="";
include("conn.php");
session_start();

$nom=$_SESSION["snom"];
$email=$_SESSION["semail"];
$id=$_GET['id'];
$genre=$_SESSION["sgenre"];
$nom_maj=ucwords($nom);


$requete="select * from livres where `livres`.`id_livre`= '$id'";
$requete1=mysqli_query($conn,$requete);
$ros=mysqli_fetch_array($requete1);
$titre_livre=$ros['titre_livre'];
$auteur=$ros['auteur'];
$exemplaire_dispo=$ros['exemplaire_dispo'];


if($exemplaire_dispo>0){


if(isset($_POST['rqst'])){
    
    
    $requete="select * from etudiant_livre where `etudiant_livre`.`id_email`= '$email'";
    $requete1=mysqli_query($conn,$requete);
    $ros=mysqli_fetch_array($requete1);
    
    
    
    
if ($ros[0]!="")
   {
         
        $livre_2=$ros['livre_2'];
    
        if($livre_2=="")
        {
         $sql1= "select date_format(curdate(),'%d-%m-%Y')" ;
	     $res1 = mysqli_query ($conn,$sql1);
	     $row1 = mysqli_fetch_row($res1);
	     $debut_pret=$row1[0];
            
         $sql2= "select date_format(curdate()+5,'%d-%m-%Y')" ;
	     $res2 = mysqli_query ($conn,$sql2);
	     $row2 = mysqli_fetch_row($res2);
	     $retour_pret=$row2[0];
            
            
            $sql="UPDATE `etudiant_livre` SET". "`id_livre_2` ='$id',"."`livre_2` = '$titre_livre',"."`debut_pret_2` = '$debut_pret',". "`retour_pret_2` = '$retour_pret'"." WHERE `etudiant_livre`.`id_email` ="."'$email'";
          
              $data=mysqli_query($conn,$sql); 
             $cur=$exemplaire_dispo-1;
            
            $sql2="UPDATE `livres` SET". "`exemplaire_dispo` ='$cur'"." WHERE `livres`.`id_livre` ="."'$id'";
            mysqli_query($conn,$sql2);
            
              if($data)
              {
                $msg= "Votre prêt est en cours de validation.. !! <br> Veuillez vous rapprocher à l'accueil de la bibliothéque.";
              }
              else{
                  $msg="Erreur";
                  
                   }
           }
    
    
        else{
            $msg="Vous ne pouvez pas faire un prêt. <br> Veuillez retourner les livres précédement empruntés.";
             }
        }
    
    
    
    //deuxieme condition
    
        if($ros[0]==""){
            
         $sql1= "select date_format(curdate(),'%d-%m-%Y')" ;
	     $res1 = mysqli_query ($conn,$sql1);
	     $row1 = mysqli_fetch_row($res1);
	     $debut_pret=$row1[0];
            
         $sql2= "select date_format(curdate()+5,'%d-%m-%Y')" ;
	     $res2 = mysqli_query ($conn,$sql2);
	     $row2 = mysqli_fetch_row($res2);
	     $retour_pret=$row2[0];
            
            $insert="INSERT INTO `etudiant_livre`(`id_email`,`id_livre_1`,`livre_1`,`debut_pret_1`,`retour_pret_1`) VALUES('".$email."','".$id."','".$titre_livre."','".$debut_pret."','".$retour_pret."')";
            
           
              $data=mysqli_query($conn,$insert); 
            
            $cur=$exemplaire_dispo-1;
            
            $sql2="UPDATE `livres` SET". "`exemplaire_dispo` ='$cur'"." WHERE `livres`.`id_livre` ="."'$id'";
            mysqli_query($conn,$sql2);
            
              if($data)
              {
                $msg= "Votre prêt est en cours de validation.. !! <br> Veuillez vous rapprocher à l'accueil de la bibliothéque.";
              }
              else{
                  $msg="Erreur...";
                  
                   }
            
            }
}
}

else{
    $msg="Livre pas disponible";
}

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="Images/logo EPSI 1.jpg" />
    <title>Emprunt livre</title>
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
  bottom: 0px;
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
          <div class="m-right">
            <a href="Categorielivre.php" class="m-link"><i class="fa fa-home" aria-hidden="true"></i>Liste des livres</a>
            <a href="Infolivres.php" class="m-link"><i class="fas fa-at"></i>Mes livres</a>
            <a href="profil.php" class="m-link"><i class="fas fa-at"></i>Mon Profil</a>
            <a href="index.php" class="m-link"><i class="fas fa-pen"></i>Déconnexion</a>
          </div>
          </div>  
        </nav>
      </header>
  <div class="box">
   <table >
      <tr>
        <td><h1>Emprunt livre</h1></td>
      </tr>
      <tr>
        <td><h2>Bienvenue
            
            <?php if($genre=="m")
                {
                    echo "M. ";
                } 
               else{
                echo "Mme. ";
               }
            ?><b><?php echo $nom_maj; ?> &nbsp;</b></td>
      </tr>
    </table>
  </div>
   

   <div  class="box2">

    <fieldset>
    	 <form method="post">
		
				<table  id="table2">
					<tr>
						<td  class="td2">
						TITRE :
						</td>
						<td class="td3">
				            <?php echo $titre_livre; ?>
							
						</td>
					</tr>
					<tr>
						<td class="td2">
					    AUTEUR :
					    </td>
						<td class="td3">
				            <?php echo $auteur; ?>
							
						</td>
					</tr>
					<tr>
						<td class="td2">
						ID :
						</td>
						<td class="td3">
							<?php echo $id; ?>
						</td>
					</tr>
					<tr>
						<td class="td2">
						EXEMPLAIRE DISPO(S) :
						</td>
						<td class="td3">
							<?php echo $exemplaire_dispo; ?>
						</td>
					</tr>
					<tr>
						<td>
						<input type="submit" value="Emprunter un livre" name="rqst">
						</td>
				        <td><?php echo $msg; ?></td>
					</tr>
				</table>
			</form>     
		
    </fieldset>
      </div >

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



    </div>

  </body>
</html>