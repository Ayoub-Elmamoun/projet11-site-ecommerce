<?php 
  
  include 'gestion.php';
  $gestion = new Gestion ; 
  $data = $gestion->afficher();


  
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="/fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">

  <title>insert produit</title>
</head>
<body style="background-image: url('images/nature-background.jpg')">

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
  <div class="container" style="padding-top:90px;">

    <div class="row align-content-center  justify-content-center">
      <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
        <div class="card border-0 shadow rounded-4 my-5 ">
          <div class="card-header text-center">
            <div>LES PRODUITS </div>
          </div>

          <div class="card ">

            <div class="card-body table table-bordered" id="card-body">

              <table class="table" id="worksTable"> 
                <thead>
                  <tr class="text-center">
                    <th class="text-center">Nom de Produit</th>
                    <th class ="text-center">Categorie de produit</th>
                    <th class="text-center">Unité</th>
                    <th class ="text-center">Quantité en stock</th>
                    <th class="text-center">Actions</th>

                  </tr>
                </thead>

                <tbody>
                  
                <?php  foreach ($data as $value ) {?>
                    <tr class="text-center">
                                                
                        <td><?php echo $value->getNom_Produit() ?></td>
                        <td><?php echo $value->getNom_Categorie() ?></td>
                        <td><?php echo $value->getPrix() ?></td>
                        <td><?php echo $value->getQuantite_stock() ?></td>
                                                    
                        <td class="d-flex"> 
                            <button class="btn btn-primary justify-content-center" style="margin-right:10px;"><a style="color:black;"  href="modifier.php?id=<?php echo $value -> getId_Produit() ?>">Editer</a></button>
                            <button class="btn btn-danger" style="margin-right:10px;"><a style="color:black;" href="suprimer.php?id=<?php echo $value -> getId_Produit() ?>" >Supprimer</button>

                        </td>
                    </tr>
                                           
                                               <?php }?>
                  
                </tbody>


              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>