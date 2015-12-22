<?php
try
{
    $bdd = new PDO('mysql:host=db598237151.db.1and1.com;dbname=db598237151;charset=utf8', 'dbo598237151', 'appYNOV13100');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

//$pass_hache = sha1($_POST['pass']);
//$email=$_POST['email'];
$req = $bdd->prepare( 'SELECT IDPersonne FROM etudiants WHERE utilisateur = ? AND mots_de_pass = ? ');


$req->execute(array(
    $_POST['email'],
    $_POST['pass']));

$resultat = $req->fetch();

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
  session_start();
  $_SESSION['IDpersonne'] = $resultat['IDPersonne'];
  $_SESSION['email'] = $email;
  header('Location: ../view/dashboard.php');

}
