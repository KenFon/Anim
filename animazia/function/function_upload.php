<?php


function verif_img($file)
{
    $error = NULL;

    if (isset($file) && $file["error"] == 0) {

                $allowed = [
                    "jpg" => "image/jpg",
                    "jpeg" => "image/jpeg",
                    "png" => "image/png"
                ];

                $filename = $file["name"];
                $filetype = $file["type"];
                $filesize = $file["size"];

                //vérifie l'extention de l'image
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                if (!array_key_exists($ext, $allowed)) {
                    $error = "Erreur; veuillez selectionner un format de fichier valide";
                }

                //verifie la taille de l'image


                $max_size = 10 * 1024 * 1024;

                if ($filesize > $max_size) {
                    $error = "Erreur, l'image dois faire moins de 10mo";
                }

                //Verifie le MIME du fichier
                if (in_array($filetype, $allowed)) {
                    if (file_exists("../img/img_store/" . $file["name"])) {
                        $error = "L'image existe déjà";
                    } else {
                        $move = move_uploaded_file($file["tmp_name"], "../img/img_store/" . $file["name"]);
                        var_dump($move);
                    }
                } else {
                    $error = "Il y a eut un soucis dans l'image";
                }
            }else{
                $error = "Il y a eut une erreur inconnue, ressayez !";

            }

            if(isset($error)) {
                return $error;
            }else{
                return 'img/img_store/' . $file["name"];
            }

}

?>