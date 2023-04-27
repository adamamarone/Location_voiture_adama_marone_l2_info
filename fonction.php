<?php
function getEtudiants(){
  global $db;
      $sql="SELECT * FROM etudiants";
      return $db->query($sql)->fetchAll(2);

}

function nbEtudiant(){
    global $db;
    $sql="SELECT count(*) as nbetu FROM etudiants";
    return $db->query($sql)->fetch(2);
}
function generMatricule($nbetu){
    $nbetu = intval($nbetu);
    $matricule = "ETU_".date('Y-m-d'.'-@-'.($nbetu+1));
    return $matricule;
}
  function addEtudiants($nom,$prenom,$dateNaiss){
    global $db;
      $matricule = generMatricule(nbEtudiant()['nbetu']);
    $sql = "INSERT INTO etudiants values(null,'$matricule','$nom','$prenom','$dateNaiss')";
    return $db->exec($sql);
  }
  function deletetudiant($id){
    global $db;
    $sql="DELETE FROM  etudiants WHERE id=$id";
    return $db->exec($sql);
  }
  function getEtudiantsById($id){
    global $db;
        $sql="SELECT * FROM etudiants where id=$id";
    return $db->query($sql)->fetch(2);

  }
  function updateEtudiant($id,$matricule,$nom,$prenom,$dateNaiss)
    {
        global $db;

        $sql = "UPDATE etudiants 
                SET matricule = '$matricule',
                 nom = '$nom',
                 prenom = '$prenom',
                 dateNaiss='$dateNaiss'
                       where etudiants.id=$id";
            return $db->exec($sql);
    }
    function recherch($mocle){
    global  $db;
    $sql="select * from etudiants where nom  like '%$mocle%' || prenom LIKE '%$mocle%' || dateNaiss LIKE '%$mocle%' || matricule LIKE '%$mocle%' || id LIKE '%$mocle%'";
        return $db->query($sql)->fetchAll(2) ;
    }

?>