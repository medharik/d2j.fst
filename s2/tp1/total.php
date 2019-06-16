<?php 
$tva= $_POST['tva'] ?? 0;
//extraire les donnees 
if(isset($_POST['prix']) && isset($_POST['qte']) ){
    
 $prix=$_POST['prix'];
 $qte=$_POST['qte'];
 if(!is_numeric($prix)){
    header("location:form.php?erreur=prix");
 }
 if(!is_numeric($qte)){
    header("location:form.php?erreur=qte");
 }
 $total=$prix*$qte*(1+$tva/100);
}else{
    header("location:form.php");
}
if(isset($_POST['tva'])){
    $message="TTC est  ";
}else{
    
    $message="THT est  ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php if( isset($total ))  {?>
    <h2>le <?=(isset($_POST['tva']))?  "ttc":"THT";    ?> est : <?=$total?>DHS</h2>
    <?php } ?>
    <hr>
    <?php if( isset($total ))  {?>
    <h2>le <?=$message?> est : <?=$total?>DHS</h2>
    <?php } ?>

<hr>



</body>
</html>