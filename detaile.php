<?php
  require_once 'connexion.php';
  require_once 'fonction.php';
  $etude=getEtudiantsById($_GET['id']);
  //var_dump($etude);die;
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
<div class="container col-md-6 badge-warning" style="text-align: center;margin-top: 10%;">
    <h4class="display-4 mb-3" style="font-family: 'Times New Roman'">*--LES DETAILLES ETUDIANTS--*</h4>
    <a href="form.php" class="btn btn-block btn-outline-success">Retoure a la formulaire</a>
    <table class="mt-3 table table-bordered bg-primary" >
        <tr>
            <th>
                <ul >
                    <li>ID : <?=$etude ['id']?></li>
                    <li>MATRICULE : <?=$etude ['matricule']?></li>
                    <li>NOM : <?=$etude ['nom']?></li>
                    <li>PRENOM : <?=$etude ['prenom']?></li>
                    <li>DATE DE NAISSANCE : <?=$etude ['dateNaiss']?></li>
                </ul>
            </th>
        </tr>

    </table>




</div>
</body>

</html>