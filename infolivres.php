<?php
session_start();
$nom=$_SESSION["snom"];
$email=$_SESSION["semail"];
$genre=$_SESSION["sgenre"];
$nom_maj=ucwords($nom);


include("conn.php");
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="Images/logo EPSI 1.jpg" />
    <title >Mes livres</title>
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
            <a href="Categorielivre.php" class="m-link"><i class="fas fa-layer-group"></i> Liste des livres</a>
            <a href="infolivres.php" class="m-link"><i class="fas fa-book-open"></i> Mes livres</a>
            <a href="profil.php" class="m-link"> <i class="fas fa-user"></i> Mon profil</a>
             <a href="index.php" class="m-link"> <i class="fas fa-sign-in-alt"></i> Déconnexion</a>
          </div>
          </div>  
        </nav>
      </header>
    <div class="box">
     <table>
        <tr>
          <td><h1>Mes livres</h1></td>
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

  <div class="box2">
      
    <fieldset>
      <legend style="color: #00BCD4"><b>Mes livres</b></legend>

    <table>
      <tr>
        <th>Id livre</th>
        <th>Titre</th>
        <th>Date de prêt</th>
        <th>Date de retour</th>
      </tr>
      
        
        
        <?php $requete1="SELECT * FROM `etudiant_livre`  where `etudiant_livre`.`id_email` = '$email'";
        
        $data=mysqli_query($conn,$requete1);
        
	              $row = mysqli_fetch_array($data);
                      if($row[0]!=""){   
                      
                        echo "<tr>";
                        echo "<td>" ;echo $row["id_livre_1"]; echo "</td>";
                        echo "<td>";echo $row["livre_1"]; echo "</td>";
                        echo "<td>"; echo $row["debut_pret_1"]; echo "</td>";
                        echo "<td>"; echo $row["retour_pret_1"]; echo "</td>";
                        echo "</tr>";
                      
                      
                      
                    }
        
        else{
                        echo "<tr>";
                        echo "<td>" ;echo "vous"; echo "</td>";
                        echo "<td>";echo "n'avez pas"; echo "</td>";
                        echo "<td>"; echo "de"; echo "</td>";
                        echo "<td>"; echo "prêt"; echo "</td>";
                        echo "</tr>";
                      }

	            ?>
            
        
         <?php
        $requete1="SELECT * FROM `etudiant_livre`  where  `etudiant_livre`.`id_email` = '$email'";
        
        $data=mysqli_query($conn,$requete1);
        
            
        
	              $row = mysqli_fetch_array($data);
                      if($row[0]!=""){
                      
	                 
                      
                        echo "<tr>";
                        echo "<td>" ;echo $row["id_livre_2"]; echo "</td>";
                        echo "<td>";echo $row["livre_2"]; echo "</td>";
                        echo "<td>"; echo $row["debut_pret_2"]; echo "</td>";
                        echo "<td>"; echo $row["retour_pret_2"]; echo "</td>";
                        echo "</tr>";
                          
                     
                      
                    }
             else{
                        echo "<tr>";
                        echo "<td>" ;echo "vous"; echo "</td>";
                        echo "<td>";echo "n'avez pas"; echo "</td>";
                        echo "<td>"; echo "de"; echo "</td>";
                        echo "<td>"; echo "prêt"; echo "</td>";
                        echo "</tr>";
                      }
        

	            ?>
        
    </table>
    </fieldset>

  </div>


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
