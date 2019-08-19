<?php
require_once "../function/function_upload.php";

$path_img = verif_img($_FILES['img']);
if($path_img != 'img/img_store/' . $_FILES["img"]["name"]){
    echo "echec, l'image existe déjà";
    exit();
}

$objProduct = new PDO('mysql:host=127.0.0.1;dbname=animazya','root', '');

$products = $objProduct->prepare('INSERT INTO product VALUE (NULL, :nom, :description, :image, :prix)');


$products->bindValue(':nom', $_POST["name"], PDO::PARAM_STR_CHAR);
$products->bindValue(':description', $_POST["desc"], PDO::PARAM_STR_CHAR);
$products->bindValue(':image', $path_img, PDO::PARAM_STR_CHAR);
$products->bindValue(':prix', $_POST["price"], PDO::PARAM_STR_CHAR);


$insertIsOk = $products->execute();

if($insertIsOk){
    $message="c'est ok";
}else{
    $message="c'est pas ok";
}



header('Location:../admin.php');


?>