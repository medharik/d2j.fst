<?php
define("URL","http://lorempixel.com/400/400/technics/");
$stock=[];//initialiser par un  tableau vide
for($i=0;$i<24;$i++){
    $produit=array(  
        "libelle"=>"produit ".$i,
        "prix"=>rand(10,1000),
        "qteStock"=>rand(0,100),
        "image" => URL.rand(1,6)
    );
    $stock[]=$produit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tp tableau : stock de base</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div>
            <div class="row">

<?php for($i=0;$i<24;$i++) {
    $produit=$stock[$i];
    $etat=($produit['qteStock']==0)? "rupture de stock":"disponible";
    $class_etat=($produit['qteStock']==0)? "badge-danger":"badge-success";
    ?>
    <div class="card col-md-3 my-1" >
  <img src="<?=$stock[$i]['image']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$produit['libelle']?></h5>
    <p class="card-text <?=$class_etat?>"><?=$etat?></p>
    <a href="#" class="btn btn-primary">Consulter</a>
  </div>
</div>
    <?php } ?>   
            </div>


    </div>
    
</body>
</html>