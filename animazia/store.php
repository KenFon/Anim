<?php
$title="Store";
require "elements/header.php";

class product{

}

$objetPdo = new PDO("mysql:host=localhost;dbname=animazya","root", "");

$listproduct = $objetPdo->prepare("SELECT * FROM product");

$listproduct->execute();

$allProducts=$listproduct->fetchAll(PDO::FETCH_CLASS, "product");









?>

<div class="container store blue-grey lighten-4 z-depth-4 row">
    <div class="row center-align">
        <h1>Notre boutique</h1>
    </div>

    <div class="row content-store ">




        <?php foreach ($allProducts as $products) :?>

                <div class="row col s12 m4">
                    <div class="col s12 m12">
                        <div class="card">
                            <div class="card-image">
                                <img class="img_store" src="<?= $products->image?>">
                                <form action="panier.php" method="POST">
                                    <button class="btn-floating halfway-fab waves-effect waves-light green lighten-3" type="submit" name="action">
                                        <i class="material-icons right">add</i>
                                    </button>
                                    <input type="hidden" name="id" value="<?= $products->id?>">
                                </form>
                            </div>

                            <div class="card-content">
                                <span class="card-title grey-text text-darken-4"><?= $products->nom ?></span>
                                <p><?= $products->description?></p>
                            </div>
                            <div class="card-action center-align">
                                <a href="#"><?=$products->prix?> €</a>
                            </div>
                        </div>
                    </div>
                </div>
        <?php endforeach;?>

    </div>

</div>










<?php require "elements/footer.php"?>
