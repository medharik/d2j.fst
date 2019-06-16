<?php
include "module.php";
$libelle=$_POST['libelle'];
$prix=$_POST['prix'];
store($libelle,$prix);
header("location:index.php");
?>
