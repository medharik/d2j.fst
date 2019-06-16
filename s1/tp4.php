<?php 
//tableau : ensemble de donnees 
// deux categories de tableau :
//  1- tableau indexé  
$produit=array("hp",'dell');//ou ["hp","dell"]
echo $produit[0];// hp
$produit[]="sony";
$produit[]="acer";// array_push
unset($produit[2]);// detruire l'item d'indice 2
var_dump($produit);
print_r($produit);
//2-tableau associatif

$hp=array(  
    "libelle"=>"hp dv6",
    "prix"=>4500,
    "qteStock"=>rand(0,100),
);
echo $hp["libelle"];//hp dv 6
 $hp["image"]="http://lorempixel.com/400/400/technics/3/";
echo '<br>'.count($hp);// 4
$hp[]=1000;
$hp[]=1000;
var_dump($hp);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>les tableaux </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="card mx-auto" style="width: 18rem;">
  <img src="<?=$hp['image']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$hp['libelle']?></h5>
    <p class="card-text">Prix : <?=$hp['prix']?>DHS</p>
    <a href="javascript:history.go(-1)" class="btn btn-primary">Retour</a>
  </div>
</div>
    
</body>
</html>