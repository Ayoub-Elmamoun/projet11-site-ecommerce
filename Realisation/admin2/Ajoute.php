<?php 

include "gestion.php";
// Trouver tous les employés depuis la base de données 
$gestion= new Gestion();
$data= $gestion->afficherCategorie();



if(!empty($_POST)){
  $filename = $_FILES["image"]["name"];
	$produit = new produit_categorie();
	$produit->setNom_Produit($_POST['nom_produit']);
	$produit->setPrix($_POST['prix']);
	$produit->setDescription($_POST['description']);
	$produit->setCategorie_produit($_POST['categorie_produit']);
	$produit->setQuantite_stock($_POST['quantite_stock']);
	$produit->setDate_dexpiration($_POST["date_d'expiration"]);
	$produit->setPhoto($filename);

  $tempname = $_FILES["image"]["tmp_name"];



  $gestion->AjouterProduit($produit);  
	$gestion->upload_photo($filename, $tempname);
	// Redirection vers la page index.php
	header("Location: table.php");
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
                  <a class="nav-link" href="./Ajoute.php">Ajouter Produit</a>
                </li>

                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./table.php">Naviger Produits</a>
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
                  <label for="inputAuthor" class="form-label"></label>
                  <input type="text" required name="nom_produit" class="form-control text-center" id="inputAuthor" placeholder="Nom du produit">
                </div>

                <div class="col-md-4">
                  <label for=" inputPrix" class="form-label"></label>
                  <input type="text" required name="prix" class="form-control text-center" id="inputPrix" placeholder="Prix du produit">
                </div>

                <div class="col-md-4">
                <label for="cc-exp" class="control-label mb-1"></label>
                <select name="categorie_produit" id="select" class="form-control">
                                                          
                          <option selected>Select category</option>
                      <?php  foreach($data as $value){ ?>
                        <option value="<?= $value->getId_Categorie()?>"><?= $value->getNom_Categorie();} ?> </option>
                </select>
                </div>

                <div class="col-md-12">
                  <label for=" inputPrix" class="form-label"></label>
                  <input type="text" required name="description" class="form-control text-center" id="inputPrix" placeholder="Description du produit">
                </div>


                
                <div class="col-md-4">
                  <label for="cc-exp" class="control-label mb-1"></label>
                  <input id="cc-exp"  placeholder="Quantite de stock"name="quantite_stock" type="number" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"data-val-cc-exp="Please enter a valid month and year" autocomplete="cc-exp">
                  <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                </div>

                <div  class="col-md-4">
                  <label for="cc-exp" class="control-label mb-1"></label>
                  <input id="cc-exp" name="date_d'expiration" type="date" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"data-val-cc-exp="Please enter a valid month and year" autocomplete="cc-exp">
                  <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
              </div>

              <div class="col-md-4">
                  <label for="x_card_code" class="control-label mb-1"></label>
                      <i class="fas fa-cloud-upload-alt tm-upload-icon"></i>
                      <div class="input-group">
                          <input  id="x_card_code"  value="UPLOAD PRODUCT IMAGE"type="file" name="image">
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