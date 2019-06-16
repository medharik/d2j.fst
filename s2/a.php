<?php 

    $n=$_GET['n'] ?? "test";
$login=$_POST['log'] ?? "login obligatoire";
$passe=$_POST['passe'] ?? "Mot de passe obligatoire";
if(! isset($_GET['n'])){
echo "n est indispensable";
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
   <h2> Details du produit : <?= $n ?></h2>
   <hr>
<?php if(isset($_POST['login']) && $_POST['passe']) {  ?>
Login : <?=$login?><br>
passe : <?=$passe?>

<?php } ?>

</body>
</html>