<?php
include "../manager/categorieManager.php";


$Manager = new categorieManager();

$data = $Manager->getProduitCategorie();



?>





<form method="$_GET" >


<table>
<?php  foreach($data as $value){ ?>
<a    href="<?php echo $value->getcategorie_name() ?>.php"><?php echo $value->getcategorie_name() ?></a>

<?php } ?> 

</table>

</form>






