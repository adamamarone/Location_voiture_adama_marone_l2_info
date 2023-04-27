<?php

     /*Connexion à la base de données */
    //MVC model vue controlleure => recherche
    try{
        $db = new PDO('mysql:host=localhost;dbname=ecolee','root','');
        
    }catch (PDOException $e){
        die("Erreur de connexion à la base de données !");
    }
?>