<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include "_css.php"?>
</head>
<body>
    
    <?php include "_menu.php"?>

<h2 class="alert alert-info">nouveau produit</h2>
    <form action="store.php" method="post">
    
    Libelle : <input type="text" name="libelle" id="libelle">
    Prix : <input type="text" name="prix" id="prix">
<input type="submit" value="Ajouter">
    </form>
</body>
</html>