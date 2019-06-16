<?php 

include "module.php";
$produits=all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>liste des produits</title>
    <?php include "_css.php"?>
</head>
<body>
<?php include "_menu.php"?>
    <h2 class="alert alert-info">
    liste des produits
    </h2>
<!--table>tr*2>td*4 -->
<table class="table table-dark" id="pro">
    <tr>
        <td>#</td>
        <td>Libelle</td>
        <td>prix</td>
        <td>Actions</td>
    </tr>

    <?php  foreach($produits as $p){?>
        <tr>
        <td><?=$p['id']?></td>
        <td><?=$p['libelle']?></td>
        <td><?=$p['prix']?></td>
        <td>
        <a  class="btn btn-primary" href="show.php">C</a>
        <a class="btn btn-warning"  href="edit.php">M</a>
        <a  class="btn btn-danger" href="delete.php">S</a></td>
    </tr>
    <?php } ?>
</table>


<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>

$(document).ready( function () {
    $('.table').DataTable();
} );
</script>
</body>

</html>