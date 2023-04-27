<?php
  require_once 'connexion.php';
  require_once 'fonction.php';
$etudiant=getEtudiants();
$matricule = generMatricule(nbEtudiant()['nbetu']);
 //var_dump($etudiante);die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-cerulean.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<div class="container col-md-6 col-md-offset-3 bg-primary " style="margin-top: 2%" >
    <div class="panel panel-info" style="margin-top: 5%">
        <div class="text-center">
            <img src="senegal.jpg" width="100px" height="100px">
        </div>
        <h1 class=" text-center " style="font-family: Algerian"><marquee direction="left" scrollamount="5" behavior="alternate" width="100%">La Formulaire D'Ajout</marquee></h1>
        <div class="panel-body" style="background-color: cyan">
            <form  method="post" action="controle.php" onsubmit="return validation()">
                <div class="row mb-3">
                    <div class="col col-md-6">
                        <label class="control-label"> </label>
                        <input type="text" class="form-control"name="matricule" readonly="readonly" id="matricule" value="<?=$matricule?>" autocomplete="off"  >
                    </div>
                    <div class="col col-md-6">
                        <label class="control-label"> </label>
                        <input type="text" class="form-control"name="nom" id="nom" placeholder="Entrer votre nom" autocomplete="off">
                        <span id="nomloc" class="text-danger"></span>
                    </div>
                    <div class="col col-md-6">
                        <label class="control-label"></label>
                        <input type="text" class="form-control"name="prenom" id="prenom" placeholder="Entrer votre prenom" autocomplete="off">
                        <span id="prenomloc" class="text-danger"></span>
                    </div>
                    <div class="col col-md-6 ">
                        <label class="control-label"></label>
                        <input type="date" class="form-control"name="dateNaiss" id="dateNaiss" placeholder="Entrer votre date de naissance" autocomplete="off">
                        <span id="dateNaissloc" class="text-danger"></span>
                    </div>


                    <div class=" col-md-6 col-md-offset-3 " style="margin-top: 5%">
                        <button type="submit" class="btn btn btn-success" name="ok" value="ajouter" >Valider</button>
                        <button type="submit" class="btn btn btn-danger"value="annuler" style="margin-left: 40%">Annuler</button>
                    </div>
                    <button class=" col-md-6 col-md-offset-3 " style="margin-top: 5%">
                        <a href="index.php" class="btn btn-block">Retour à la Liste</a>
                </div>
            </form>
        </div>
    </div>


    </form>
</div>
<script src="script.js"></script>
</body>
</html>



