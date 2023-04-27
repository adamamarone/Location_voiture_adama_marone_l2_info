<?php
    require_once 'connexion.php';
    require_once 'fonction.php';
    

    if(isset($_POST['ok'])){
        extract($_POST);
        addEtudiants($nom,$prenom,$dateNaiss);
        header('location:index.php');
    }
    
    if(isset($_POST['modifier'])){
        extract($_POST);
        updateEtudiant($id,$matricule,$nom,$prenom,$dateNaiss);
        header('location:index.php');
    }
    
        deletetudiant($_GET['id']);
        header('location:index.php');

?>
