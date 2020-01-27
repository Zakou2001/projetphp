<?php include("conn.php");

session_start();

$nom=$_SESSION["snom"];
$email=$_SESSION["semail"];
$genre=$_SESSION["sgenre"];

$nom_maj=ucwords($nom);

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="Images/logo EPSI 1.jpg" />
    <title >Liste des livres</title>
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
  bottom: -150px;
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
   <table>
      <tr>
        <td ><h1>Catalogue</h1></td>
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

   <div class="box">
      <h3 class="box-réseau">Réseau</h3>
        <table class="box-table">
                <tr>
                    <th>Id livre</th>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Année Publication</th>   
                    <th>Catégorie</th>
                    <th>Exemplaire disponible</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `livres`");
            while($row = mysqli_fetch_array($data))
              {   
                      if($row["categorie"]=="reseau")
                      {
                          echo "<tr>";
                            $idLivre_réseau=NULL;
                            $idLivre_réseau=$row["id_livre"];
                            $lg1="<a href='Livres.php?id=$idLivre_réseau'>";
                          echo "<td>" ;echo $row["id_livre"]; echo "</td>";
                          echo "<td>";echo "$lg1"; echo $row["titre_livre"]; echo "</a>"; echo "</td>";
                          echo "<td>"; echo $row["auteur"]; echo "</td>";
                          echo "<td>"; echo $row["annee_publication"]; echo "</td>";
                          echo "<td>"; echo $row["categorie"]; echo "</td>";
                          echo "<td>"; echo $row["exemplaire_dispo"]; echo "</td>";
                          echo "</tr>";
                            $idLivre_réseau=NULL;
                      }
                    }

              ?>
        </table>


    </div>

    <div class="box">
      <h3 class="box-devops">Développement</h3>
        
        <table class="box-table">
                <tr>
                    <th>Id livre</th>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Année Publication</th>   
                    <th>Catégorie</th>
                    <th>Exemplaire disponible</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `livres`");
                while($row = mysqli_fetch_array($data))
                 {   
                      if($row["categorie"]=="devops"){
                        echo "<tr>";
                        $idLivre_dévops=NULL;
                        $idLivre_dévops=$row["id_livre"];
                        $lg2="<a href='Livres.php?id=$idLivre_dévops'>";
                        echo "<td>" ;echo $row["id_livre"]; echo "</td>";
                        echo "<td>";echo "$lg2"; echo $row["titre_livre"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["auteur"]; echo "</td>";
                        echo "<td>"; echo $row["annee_publication"]; echo "</td>";
                        echo "<td>"; echo $row["categorie"]; echo "</td>";
                        echo "<td>"; echo $row["exemplaire_dispo"]; echo "</td>";
                        echo "</tr>";
                        $idLivre_dévops=NULL;
                      }
                    }

              ?>
                </table>


    </div>
      
    

    <div class="box">
      <h3 class="box-Bdd">Base de donnée</h3>
        
        <table class="box-table">
                <tr>
                    <th>Id livre</th>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Année Publication</th>   
                    <th>Catégorie</th>
                    <th>Exemplaire disponible</th>
                </tr>
               
            <?php  $data=mysqli_query($conn,"SELECT * FROM `livres`");
                while($row = mysqli_fetch_array($data))
                 {   
                      if($row["categorie"]=="bdd"){
                        echo "<tr>";
                      $idLivre_bdd=NULL;
                      $idLivre_bdd=$row["id_livre"];
                      $lg3="<a href='Livres.php?id=$idLivre_bdd'>";
                      echo "<td>" ;echo $row["id_livre"]; echo "</td>";
                      echo "<td>";echo "$lg3"; echo $row["titre_livre"]; echo "</a>"; echo "</td>";
                      echo "<td>"; echo $row["auteur"]; echo "</td>";
                      echo "<td>"; echo $row["annee_publication"]; echo "</td>";
                      echo "<td>"; echo $row["categorie"]; echo "</td>";
                      echo "<td>"; echo $row["exemplaire_dispo"]; echo "</td>";
                      echo "</tr>";
                      $idLivre_bdd=NULL;
                    }
                    }             
                  ?>
                </table>
    </div>
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
<html>
