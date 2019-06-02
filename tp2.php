<?php 
$name ="Ali";
$age =26;
$gender='male';
// if($age>18){
// $m="Majeur";
// }else{
// $m="Mineur";

// }
$m=($age>21)? "majeur":"mineur";
$color=($gender=="male")? "skyblue":"pink";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tp2</title>
</head>
<body style="background:<?=$color  ?>" >
<h2  >Bienvenue <?php echo  $name;?>, votre age est de <?=$age?> ans, vous etes <?=$m?> </h2>
<?php 
echo "<h2 >bienvenue $name</h2>";

?>
   <hr>
<!-- table>tr*4>td*2 -->
   <table >
       <tr>
           <td>Libellé</td>
           <td></td>
       </tr>
       <tr>
           <td>Prix</td>
           <td></td>
       </tr>
       <tr>
           <td>Qte en stock</td>
           <td></td>
       </tr>
       <tr>
           <td>Etat de stock</td>
           <td></td>
       </tr>
   </table> 
</body>
</html>