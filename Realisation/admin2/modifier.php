<?php 




include "gestion.php";
// Trouver tous les employés depuis la base de données 
$gestion = new gestion();
//afficher dans input
if(isset($_GET['id'])){
    $afficherData = $gestion->afficherProduit($_GET['id']);
    $id = $_GET["id"];
    foreach($afficherData as $value);
}

// modifier les donnes
if(!empty($_POST)){
    $photo = $_FILES["image"]["name"];
   
	$produit = new produit_categorie();
	$produit->setId_Produit($_POST['id']);
	$produit->setNom_Produit($_POST['nom_produit']);
	$produit->setPrix($_POST['prix']);
	$produit->setDescription($_POST['description']);
	$produit->setCategorie_produit($_POST['categorie_produit']);
	$produit->setQuantite_stock($_POST['quantite_stock']);
	$produit->setDate_dexpiration($_POST["date_d'expiration"]);
	$produit->setPhoto($photo);

  $tempname = $_FILES["image"]["tmp_name"];

    if(!empty($photo)){
     
      
      $gestion->upload_photo($photo, $tempname);
  } else {
    $produit->setPhoto($value->getPhoto());
  }
  
    $gestion->Modifier($produit);
    header('Location: table.php');
} 
?>

<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Insert Categorie</title>
  </head>

  <body style="background-image: url('images/nature-background.jpg');">

    <header role="banner">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
          <div class="container">
            <a class="navbar-brand" href="main.php">CRUD PRODUIT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample05">
              <ul class="navbar-nav ml-auto pl-lg-5 pl-0">

                <li class="nav-item">
                  <a class="nav-link" href="insert.php">Ajouter Produit</a>
                </li>

                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Naviger Produits</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../categorie/index.php">Gestion Categorie</a>
                </li>
              </ul>

            </div>
          </div>
        </nav>
    </header> 
      <!-- END header -->

      <div class="container d-flex justify-content-center" style="padding-top:90px;">

      <div class="row col-lg-10 col-sm-12 col-md-12">
        <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
          <div class="card border-0 shadow rounded-4 my-5 ">
            <div class="card-header text-center">
              <div>AJOUTER PRODUIT</div>
            </div>

            <div class="card-body ">

              <form method="POST" enctype="multipart/form-data" id="formSubmit" class="row g-3 ">
                <div class="col-md-4 ">
                <input type="hidden" name="id" value="<?php echo $value->getId_Produit() ?>">
                  <label for="inputAuthor" class="form-label"></label>
                  <input type="text" required name="nom_produit" value="<?php echo $value->getNom_Produit() ?>"  class="form-control text-center" id="inputAuthor" placeholder="Nom du produit">
                </div>

                <div class="col-md-4">
                  <label for=" inputPrix" class="form-label"></label>
                  <input  type="text" required name="prix" value="<?php echo $value->getPrix() ?>" class="form-control text-center" id="inputPrix" placeholder="Prix du produit">
                </div>

                <div class="col-md-4">
                    <label for="category"></label>
                    <select
                      class="custom-select tm-select-accounts" id="category" name="categorie_produit">
                   
                    <option selected><?php echo $value->getNom_Categorie() ?></option>
                   <?php $afficherdata = $gestion -> afficherCategorie() ?>
                    <?php  foreach($afficherdata as $affichervalue){ ?>
                      <option value="<?= $affichervalue->getId_Categorie()?>"><?= $affichervalue->getNom_Categorie();} ?> </option>
                      
                      
                    </select>
                </div>

                <div class="col-md-12">
                  <label for="description" class="form-label"></label>
                  <input type="text" required name="description" class="form-control text-center" id="inputPrix" placeholder="Description du produit">
                </div>


                
                <div class="col-md-4">
                  <label for="stock" class="control-label mb-1"></label>
                  <input id="cc-exp"  placeholder="Quantite de stock" value="<?php echo $value->getQuantite_stock() ?>" name="quantite_stock" type="number" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"data-val-cc-exp="Please enter a valid month and year" autocomplete="cc-exp">
                  <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                </div>

                <div  class="col-md-4">
                  <label for="expire_date" class="control-label mb-1"></label>
                  <input id="cc-exp" name="date_d'expiration" type="date"  value="<?php echo $value->getDate_dexpiration() ?>" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"data-val-cc-exp="Please enter a valid month and year" autocomplete="cc-exp">
                  <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
              </div>

              <div class="col-md-4">
                    <div class=" mx-auto">
                        <img src="./img/<?php echo $value->getPhoto()?>" class="tm-product-img-dummy mx-auto" alt="">
                    </div>
                    <div class="custom-file mt-3 mb-3">
                        <input class="btn btn-primary btn-block mx-auto col-lg-6" value="UPLOAD PRODUCT IMAGE" type="file" name="image"/>
                    </div>
              </div> 

              <div class="container row justify-content-center col-sm-12" style="padding-top: 20px; margin-left: 10px; margin-right:10px;">
                  <button id="submitButton" type="submit" class="btn btn-primary " name="submit">Ajouter</button>
                </div>


              </form>

            </div>
          </div>
        </div>
      </div>





      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.sticky.js"></script>
      <script src="js/main.js"></script>
  </body>

</html>