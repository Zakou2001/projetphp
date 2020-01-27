<?php include("conn.php");

$msg="";



if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['sub']))

{
  $titre_livre=$_POST['titre_livre'];
  $auteur=$_POST['auteur'];
  $id=$_POST['id_livre'];  
  $annee_publication=$_POST['annee_publication'];
  $categorie=$_POST['categorie'];
  $nombre_exemplaire=$_POST['nombre_exemplaire'];
  $exemplaire_dispo=$nombre_exemplaire;

  	if($titre_livre!="" && $auteur!="" && $id!="" && $annee_publication!="" && $nombre_exemplaire!="" && $categorie!="")
  {  
     
     
      $sql ="UPDATE livres SET titre_livre='$titre_livre',auteur='$auteur',annee_publication='$annee_publication',nombre_exemplaire='$nombre_exemplaire',categorie='$categorie'  where id_livre='$id'";

	$data1 = mysqli_query($conn,$sql);
	
      if($data1)
	  {
	    $msg= "Modification réussi";
	  }
	  else
	  {
	    $msg= "Erreur..";
	  }
}
    else
	  {
	   $msg="Tous les champs doivent être remplis";
	  }
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="Images/logo EPSI 1.jpg" />
    <title >Modification livre</title>
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
 table{
 background-color: #DFF2FF;;
  border:none;
  border: 5px groove #00BCD4;
  height: 360px;
  width:510px;
  margin: 30px  auto;
  display: block;
  color: black;
  border-radius: 3px;
  font-size: 20px;
  padding: 22px;
 }
 input[type="submit"]{
  background-color: #00BCD4;
  position: relative;
  top: 50px;
  width: 100px;
  height: 40px;
  color: #fff;
  
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
            <a href="Ajouterlivre.php" class="m-link"><i class="fas fa-ad"></i> Ajouter livre</a>
            <a href="Modifierlivre.php" class="m-link"><i class="far fa-edit"></i> Modifier livre</a>
            <a href="Supprimerlivre.php" class="m-link"><i class="fas fa-trash-alt"></i> Supprimer livre</a>
            <a href="index.php" class="m-link"><i class="fas fa-sign-in-alt"></i> Déconnexion</a>
          </div>
          </div>  
        </nav>
      </header>
<form action="" method="POST" enctype="multipart/form-data">
  <div class = "">
    <h2 style="text-align: center;">Modifier livre</h2>
      </div>
      
      <table>
       <tr>
     <td>Id livre:</td>
     <td><input type="text" name="id_livre" placeholder="id_livre"/></td>
	</tr>
      
       <tr>
     <td>Titre du livre:</td>
     <td><input type="text" name="titre_livre" placeholder="titre_livre"/></td>
     </tr>     
         
	<tr>
	  <td>Auteur:</td>
	 <td><input type="text" name="auteur" placeholder="auteur"/></td>
	</tr>

  <tr>
    <td>Année publication:</td>
   <td><input type="text" name="annee_publication" placeholder="annee_publication"/></td>
  </tr>
      
	<tr>
	  <td>Nombre exemplaire:</td>
	 <td><input type="text" name="nombre_exemplaire" placeholder="nombre_exemplaire"/></td>
	</tr>
  
      
  
   <tr>
    <td>Catégorie:</td>
   <td>
   <select name="categorie">
     <option value="reseau">Réseau</option>
     <option value="devops">Développement</option>
     <option value="bdd">Base de donnée</option>
     </select>
     
   </td>
  </tr>
  
      <tr>
	  <td><h2><input style="margin-left:180%;margin-top:10%;" type="submit" name="sub" value="Enregistrer"/></h2></td>
     <td style="color:red;font-weight:bold;text-align:center"><?php echo $msg; ?></td>
	  </tr>
    </table>
    </div>
   </div> 
 </form>
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