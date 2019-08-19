<?php
$title="admin";
require "elements/header.php"
?>

<div class="row admin-page">

    <div class="col s4 grey">
        <div class="row">
            <div class="col s12"><h2>Panneau d'administration</h2></div>
        </div>
        <div class="row">
            <div class="col s11">
                <div class="collection">
                    <a href="#!" class="collection-item">Ajouter des articles</a>
                    <a href="#!" class="collection-item">Supprimer des articles</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col s6 offset-s1">
        <div class="row">
            <form class="col s12" method="POST" action="elements/addproduct.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Placeholder" id="first_name" type="text" class="validate" name="name">
                        <label for="first_name">Nom du produit</label>
                    </div>

                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate" name="price">
                        <label for="last_name">Prix</label>
                    </div>
                </div>

                <div class="row">

                    <div class="input-field col s12">
                        <input id="desc" type="text" class="validate" name="desc">
                        <label for="desc">Description</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="img" type="file" class="validate" name="img">
                    </div>
                </div>

                <div class="row">
                    <button type="submit">Envoyer</button>
                </div>


                </div>

            </form>
        </div>
    </div>

</div>





<?php require "elements/footer.php"?>
