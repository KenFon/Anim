<?php
$title="Panier";
$id=$_POST["id"];

$objetPdo = new PDO("mysql:host=localhost;dbname=animazya","root", "");

$cardProduct = $objetPdo->prepare("SELECT prix FROM product WHERE id=$id");

$cardProduct->execute();

$product=$cardProduct->fetchAll(PDO::FETCH_COLUMN);

require "elements/header.php"
?>

<div class="container store blue-grey lighten-4 z-depth-4 row">
    <div class="row center-align">
        <h1>Notre boutique</h1>
    </div>

    <div class="center-align"><h2>Votre produit vaut : <?= $product[0]?> €</h2></div>
