
<?php
 require_once "./test/connection.php";
 
 if (isset($_POST['delete'])) {

 
     // delete from database
     $id = $_POST['delete'];

     $sql = "DELETE * FROM produit WHERE id_produit= '$id'";
     
     if ($conn->query($sql) === TRUE) {

     } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
     }
     header("Location: table.php");
   }
   
?>