<?php
include 'config.php';
include 'categorieManager.php';

$categorieManager = new categorieManager();
$data = $categorieManager->getAllCategories();


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

  <title>Insert categorie</title>
</head>

<body style="background-image: url('nature-background.jpg');">


  <header role="banner">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="main.php">CRUD CATEGORIE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample05">
          <ul class="navbar-nav ml-auto pl-lg-5 pl-0">

            <li class="nav-item">
              <a class="nav-link" href="insert.php">Add categorie</a>
            </li>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Browse categories</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </header>

  <div class="container" style="padding-top:90px;">

    <div class="row align-content-center  justify-content-center">
      <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
        <div class="card border-0 shadow rounded-4 my-5 ">
          <div class="card-header text-center">
            <div>YOUR  CATEGORIES</div>
          </div>

          <div class="card ">

            <div class="card-body table table-bordered" id="card-body">

              <table class="table" id="worksTable">
                <thead>
                  <tr>
                    <th class="text-center">Categorie Name</th>
                    <th class="text-center">Categorie Description</th>
                    <th class="text-center">Actions</th>

                  </tr>
                </thead>

                <tbody>
                  <?php
                  foreach ($data as $categorie) {
                  ?>

                    <tr>
                      <td><?= $categorie->getCategorieName() ?></td>
                      <td><?= $categorie->getCategorie_description() ?></td>
                      <td>
                        <button class="btn btn-secondary "><a class="text-decoration-none " href="edit.php?id=<?php echo $categorie->getId() ?>">Edit</a></button>
                        <button class="btn btn-danger"> <a class="text-decoration-none " href="delete.php?id=<?php echo $categorie->getId() ?>">delete</a></button>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>


              </table>

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