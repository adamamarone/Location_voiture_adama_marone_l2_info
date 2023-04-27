<?php
  require_once 'connexion.php';
  require_once 'fonction.php';
  $etude=getEtudiantsById($_GET['id']);
  
?>
<!doctype html>
<html lang="en">

<head>
    <title>Gestion_Ecole</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap-cerulean.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container col-md-6 col-md-offset-3 bg-primary " style="margin-top: 5%" >
    <div class="panel panel-info" style="margin-top: 5%">
        <div class="text-center">
            <img src="senegal.jpg" width="100px" height="100px">
        </div>
        <h1 class=" text-center " style="font-family: Algerian"><marquee direction="left" scrollamount="5" behavior="alternate" width="100%">EDITION ETUDIANT</marquee></h1>
        <div class="panel-body" style="background-color: cyan">
            <form  method="post" action="controle.php" >
                <div class="row mb-3">
                    <input type="text" readonly="readonly" class="form-control"name="id" id="id" value="<?=$etude['id']?>"  autocomplete="off"  >
                    <div class="col col-md-6">
                        <label class="control-label"> </label>
                        <input type="text" class="form-control"name="matricule"readonly="readonly" id="matricule" value="<?=$etude['matricule']?>"  autocomplete="off"  >
                    </div>
                    <div class="col col-md-6">
                        <label class="control-label"> </label>
                        <input type="text" class="form-control"name="nom" id="nom" value="<?=$etude['nom']?>" autocomplete="off">
                        <span id="nomloc" class="text-danger"></span>
                    </div>
                    <div class="col col-md-6">
                        <label class="control-label"></label>
                        <input type="text" class="form-control"name="prenom" value="<?=$etude['prenom']?>" autocomplete="off">
                    </div>
                    <div class="col col-md-6 ">
                        <label class="control-label"></label>
                        <input type="date" class="form-control"name="dateNaiss" value="<?=$etude['dateNaiss']?>" autocomplete="off">
                    </div>


                    <div class=" col-md-6 col-md-offset-3 " style="margin-top: 5%">
                        <button type="submit" class="btn btn btn-success" name="modifier" value="modifier" >Modifier</button>
                        <button type="submit" class="btn btn btn-danger"value="annuler" style="margin-left: 40%">ANULLER</button>
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
