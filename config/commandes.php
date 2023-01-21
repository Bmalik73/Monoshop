<?php

    function ajouter($image, $nom, $prix, $desc)
    {
        if(require("connexion.php")) 
        {
            $req = $access->prepare("INSERT INTO produits (image, nom, prix, descriprion) VALUES ($image, $nom, $prix, $desc)");

            $req->execute(array($image, $nom, $prix, $desc));

            $req->closeCursor();
        }
    }

?>