<?php
require_once 'connexion.php';
require_once 'fonction.php';
$etudiant=getEtudiants();
if(isset($_GET['search']) && !empty($_GET['search'])){
    $etudiant=recherch($_GET['search']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Liste des ETUDIANTS</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script type="text/javascript" src="script.js"></script>
</head>

<body>
    <div class="container badge-primary" style="text-align: center">
        <h2 class="display-4 mb-3" style="font-family: 'Times New Roman';color: #e83e8c">LISTES DES ETUDIANTS</h2>
        <a href="form.php" class="btn btn-block btn-outline-success">AJOUTER UN ETUDIANTS</a>
        <table class="mt-3 table table-bordered table-striped">
            <tr class="table-primary">
                <th>ID</th>
                <th>MATRICULE</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>DATE DE NAISSANCE</th>
                <th colspan="1">DETAIL</th>
                <th colspan="1">MODIFIER</th>
                <th colspan="1">SUPPRIMER</th>
            </tr>
           <?php foreach($etudiant as $et) { ?>

                <tr class="bg-info">
                    <td><?=$et ['id']?></td>
                    <td><?=$et ['matricule']?></td>
                    <td><?=strtoupper($et['nom'])?></td>
                    <td><?=ucwords($et['prenom'])?></td>
                    <td><?=$et['dateNaiss']?></td>
                    <td><a href="detaile.php?id=<?=$et['id']?>" class="btn btn-outline-secondary ">DETAILS</a></td>
                    <td><a href="edite.php?id=<?=$et['id']?>" class="btn btn-outline-warning" >MODIFIER</a></td>
                    <td><a href="controle.php?id=<?=$et['id']?>" class="btn btn-outline-danger" onclick ='return confirmation();'>SUPPRIMER</a></td>
                </tr>

           <?php } ?>

           <form method="get" action="" >
           <h2>Recherche</h2>
           <input type="text" name="search" placeholder="votre mot recherche ici">
           <input type="submit" name="submit" value="Recherche">
           </form>

        </table>




    </div>
</body>

</html>
