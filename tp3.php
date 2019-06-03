<?php 
define('TVA',20);// pour definir une cte
$libelle="hp";
$prixHt=rand(10,10000);
$qteStock=rand(0,100);

// on en deduit : 
$putc=$prixHt*(1+TVA/100);
$class=($qteStock>10)? "stock":"alerte";
$etatstock=($qteStock>10)? "En stock":"Rupture de stock"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>correction tp 3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<table class="table table-dark">
    <tr>
        <th>Libellé</th>
        <td><?=$libelle?></td>
    </tr>
    <tr>
        <th>Prix</th>
        <td><?=$prixHt;?></td>
    </tr>
    <tr>
        <th>Qte en stock</th>
        <td class="<?=$class?>" ><?=$qteStock?></td>
    </tr>
    <tr>
        <th>Etat de stock</th>
        <td><?=$etatstock?></td>
    </tr>
    <tr>
        <th>PTC</th>
        <td><?=$putc?></td>
    </tr>
</table>
    
</body>
</html>
