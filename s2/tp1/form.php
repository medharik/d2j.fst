<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>les prix</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
        <?php 
        if(isset($_GET['erreur']) && $_GET['erreur']=="prix" ){
            ?>
<div class="alert alert-danger" role="alert">
 Le prix doit etre numerique
</div>      
<?php }           ?>
        <?php 
        if(isset($_GET['erreur']) && $_GET['erreur']=="qte" ){
            ?>
<div class="alert alert-danger" role="alert">
 Le quantite doit etre numerique
</div>      
<?php }           ?>
        <form action="total.php" method="post" >
  <div class="form-group">
    <label for="exampleInputEmail1">Prix</label>
    <input type="number" name="prix" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Qte</label>
    <input type="number" name="qte" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="0">
  </div>
  <div class="form-group">
    <label for="tva">TVA</label>
    <input type="checkbox" name="tva" value="20" class="form-control" id="tva" aria-describedby="emailHelp" >
  </div>
  
 
  <button type="submit" class="btn btn-primary">Calculer</button>
</form>
        
        </div>
    </div>
</div>
    
</body>
</html>