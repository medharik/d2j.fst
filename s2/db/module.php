<?php 
include "config.php";

function connecter_db(){
try{
$conn=new PDO("mysql:host=".HOST.";dbname=".DB,USER,PWD);
//definir le mode erreur : EXCEPTION
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
die("Erreur de connecion bd ".$e->getMessage());
}


return $conn;


}
//ajout d'un produitt (libelle,prix)
// ajouter("dell",9000)
function store($libelle,$prix){
try{
//connexion db
$conn=connecter_db();

//preparer la requete dans cette connexion
$rp=$conn->prepare("insert into produit (libelle,prix) values(?,?)");

//executer
$rp->execute(array($libelle,$prix));

}catch(PDOExeption $e){
die("erreur d'ajout du produit ".$e->getMessage());

}
}


function all(){
    try{
    //connexion db
    $conn=connecter_db();
    
    //preparer la requete dans cette connexion
    $rp=$conn->prepare("select * from produit order by id desc");
    
    //executer
    $rp->execute(array());
    $resultSet=$rp->fetchAll();
    return $resultSet;
    }catch(PDOExeption $e){
    die("erreur de recuperation des produits ".$e->getMessage());
    
    }
    }
    
?>