<?php
include 'categorieManager.php';

$categorieManager = new categorieManager();
if (!empty($_POST)) {
  $categorie = new categorie();
  

  $categorie->setCategorieName($_POST['categorieName']);
  $categorie->setCategorie_description($_POST['categorie_description']);
  $categorieManager->insertCategorie($categorie);

  header("Location: index.php");
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

<body style="background-image: url('nature-background.jpg');">

  <header role="banner">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.html">CRUD CATEGORIE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample05">
          <ul class="navbar-nav ml-auto pl-lg-5 pl-0">

            <li class="nav-item">
              <a class="nav-link" href="insert.php">Add Categorie</a>
            </li>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Browse Categories</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- END header -->

  <div class="container" style="padding-top:90px;">

    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
        <div class="card border-0 shadow rounded-4 my-5 ">
          <div class="card-header text-center">
            <div>ADD CATEGORIE</div>
          </div>

          <div class="card-body">

            <form method="POST" enctype="multipart/form-data" id="formSubmit" class="row g-3 ">
              <div class="col-md-6">
                <label for="inputAuthor" class="form-label"></label>
                <input type="text" required name="categorieName" class="form-control" id="inputAuthor" placeholder="Categorie Name" value=<?php echo $categorie->getCategorieName()?>>
              </div>
              <div class="col-md-6">
                <label for=" inputPrix" class="form-label"></label>
                <input type="text" required name="categorie_description" class="form-control" id="inputPrix" placeholder="Categorie Description" value=<?php echo $categorie->getCategorie_description()?>>
              </div>
             <div class="container row justify-content-center col-sm-12" style="padding-top: 20px; margin-left: 10px; margin-right:10px;">
                <button id="submitButton" type="submit" class="btn btn-primary ">Submit</button>
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