<?php
include 'header.php';

try
{
    $bdd = new PDO('mysql:host=db598237151.db.1and1.com;dbname=db598237151;charset=utf8', 'dbo598237151', 'appYNOV13100');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


function Start_Select($x)
{

  global $bdd;


  $req = $bdd->prepare('SELECT* FROM startup WHERE N_Startup = "'.$x.'"');

  $Choice = $req->fetchAll();


  return $Choice;


}

?>

<div class="container-fluid">

  <header class="row">
    <div class="col-lg-12">
      <div class="col-lg-10">
        <h1>Start'Aix</h1>
      </div>

      <div class="col-lg-2">

          <div class="btn-group">
            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Connection <span class="caret"></span></button>
            <div class="dropdown-menu">

          <form action="../controler/authentification.php" method="post">
          <p>
              Pseudo :<input type="text" name="email" />
              Mot de passe<input type="password" name="pass" />
              <input type="submit" value="Connexion" />
          </p>

        </div>

          </form>

      </div>

    </header>

    <section class="col-lg-12">
      <div class="row">

        <!-- Génération des Startups -->
        <?php
        $Number = 44;

        for ($x=0 ; $x<$Number ; $x++)
        {

          $Startup = Start_Select($x);               //Choix Startup selon N° du champ


          echo '
          <div class="panel panel-default col-lg-2">
            <a href="#infos" data-toggle="modal">Startup N°'; echo $Startup['N_Startup'];
              echo ' </a>

              <div class="modal fade" id="infos">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">

                      <button type="button" class="close" data-dismiss="modal">x</button>

                      <h4 class="modal-title">'; echo $Startup['N_Startup'];
                        echo '</h4>
                      </div>


                      <div class="modal-body">
                        <div class="col-lg">';
                          echo $Startup['Logo'];
                          echo '
                          </div>
                        <div class="col-lg-2">';
                          echo $Startup['Video'];
                            echo '
                        </div>
                        <div class"row">';
                          echo $Startup['Objectif'];
                        echo '  </div>
                        <div class="row">';
                          echo $Startup['IDsalle'];
                        echo '  </div>
                        <div class="row">';
                          echo $Startup['Groupe'];
                        echo ' </div>
                         </div>
                      </div>
                    </div>
                  </div>
                </div> '; 
              }
              ?>

            </div>
          </section>

        </div>

      </div>

      <?php
      include 'footer.php'

      ?>
