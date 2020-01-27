<?php 
include("conn.php");?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="Images/logo EPSI 1.jpg" />
    <title >Mon Bureau</title>
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
            <a href="admin.php" class="m-link"><i class="fas fa-mail-bulk"></i> Mon bureau</a>
            <a href="Ajouterlivre.php" class="m-link"><i class="fas fa-ad"></i> Ajout livre</a>
            <a href="Modifierlivre.php" class="m-link"><i class="far fa-edit"></i> Modifier Livre</a>
            <a href="Supprimerlivre.php" class="m-link"><i class="fas fa-trash-alt"></i> Supprimer Livre</a>
            <a href="index.php" class="m-link"><i class="fas fa-sign-in-alt"></i> Déconnexion</a>
          </div>
          </div>  
        </nav>
      </header>
          
   <div style="text-align: center;"><h1><b>Administration</b></h1></div>

      
        
        <table style="text-align: center; padding-left: 300px">
            <tr><td colspan="9" style="background:#8BC34A"><strong style="color: white">Tous les livres</strong></td></tr>
                <tr style="background:#F0C300">
                    <th>Id Livre</th>
                    <th>Titre</th>
                    <th>Auteur </th>
                    <th>Nombre d'exemplaire</th>
                    <th>Exemplaire disponible</th>
                    <th>Catégorie</th>
                    <th>Année publication </th>
                </tr>
                                               
                    
            <?php 
           
           $data=mysqli_query($conn,"SELECT * FROM `livres`");
                while($row = mysqli_fetch_array($data))
                 {   
                        echo "<tr>";
                        echo "<td>" ;echo $row["id_livre"]; echo "</td>";
                        echo "<td>";echo $row["titre_livre"]; echo "</td>";
                        echo "<td>"; echo $row["auteur"]; echo "</td>";
                        echo "<td>"; echo $row["nombre_exemplaire"]; echo "</td>";
                        echo "<td>"; echo $row["exemplaire_dispo"]; echo "</td>";
                        echo "<td>"; echo $row["categorie"]; echo "</td>";
                        echo "<td>"; echo $row["annee_publication"]; echo "</td>";
                        echo "</tr>";
                    }

              ?>
           
        </table>
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
