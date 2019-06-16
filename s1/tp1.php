<?php 
//variables :
$nom ='D2J';
 echo $nom."<br>"   ;
 $b=10;
 $age=19;
 $a=$age ;// 19 passage par valeur (by val)
$b=&$age;//passage par adresse par ref (by ref)
 $age =28;
 echo "<h2>b est $b</h2>";
 echo "a est ".$a."<br>";
 echo $age."ans<br>"   ;
echo "<hr>";
echo "<p>age est $age ans</p>";
echo '<p>age est $age ans</p>';
echo '<p>age est '. $age.' ans</p>';
echo getType($b);
//var_dump($b)

// equivelence boolean;
//false <=> 0,0.0, "" , '' , "0", null, array()
function bl($v){
return (bool) $v;
}

echo "<hr>";
var_dump(bl(null));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tp 1</title>
</head>
<body>

    
</body>
</html>