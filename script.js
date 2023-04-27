function confirmation() {
    return confirm("Voullez-Vous Vraiment Supprimer Cette Element ?");
}
function confirmation1() {
    return confirm("Voullez-Vous Vraiment Modifier ?");
}
//--------------------------------------------------------------------------
document.addEventListener('DOMContentLoaded', function() {

});
function valider() {
    var status = false;
    let nom = document.getElementById("nom").value;
    let prenom = document.getElementById("prenom").value;
    let dateNaiss = document.getElementById("dateNaiss").value;



    if (nom.length < 1) {
        document.getElementById('nomloc').innerHTML = "veullier saisir un nom SVP";
        status = false;
    } else {
        document.getElementById('nomloc').innerHTML = "";
        status = true;
    }

    if (prenom.length < 1) {
        document.getElementById('prenomloc').innerHTML = "veullier saisir un prenom SVP";
        status = false;
    } else {
        document.getElementById('prenomloc').innerHTML = "";
        status = true;
    }

    if (dateNaiss.length < 1) {
        document.getElementById('dateNaissloc').innerHTML = "veullier saisir la dateNais SVP";
        status = false;
    } else {
        document.getElementById('dateNaissloc').innerHTML = "";
        status = true;
    }

    return status;
}

