<?php
try
{
    $bdd = new PDO('mysql:host=db598237151.db.1and1.com;dbname=db598237151;charset=utf8', 'dbo598237151', 'appYNOV13100');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$req = $bdd->prepare('INSERT INTO startup(N_Startup, IDMessage, Nom, Objectif, IDSalle, Video, Groupe, Logo) VALUES(?, 1, ?, ?, ?, ?, ?, NULL)');
$req->execute(array(
  $_POST['N'],
  $_POST['name'],
  $_POST['des'],
  $_POST['salle'],
  $_POST['video'],
  $_POST['member'],
  //$_POST['logo']));

function Start_Select($x)
{

  global $bdd;


  $req = $bdd->prepare('SELECT* FROM startup WHERE N_Startup="$x"');
  $req->execute();
  $Choice = $req->fetchAll();

  return $Choice;

}

?>
