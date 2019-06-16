<?php 
function connecter_db(){

$conn=new PDO("mysql:host=localhost;dbname=d2fj","root","");
return $conn;
}
//ajout d'un produitt (libelle,prix)
// ajouter("dell",9000)
function ajouter($libelle,$prix){

//connexion db
$conn=connecter_db();

//preparer la requete dans cette connexion
$rp=$conn->prepare("insert into produit(libelle,prix) values(?,?)");

//executer
$rp->execute(array($libelle,$prix));
}



?>