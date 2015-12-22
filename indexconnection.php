<?php
include 'header.php';
?>
<div class="center row">

  <div class="section-container tabs" data-section="tabs">
      <p class="title" data-section-title><a href="index.php">Connexion</a>
        <a href="signup.php">Inscription</a>
      <div class="content" data-section-content>
        <p>
          <div class="row">
            <div class="large-12 columns">
              <div class="signup-panel">
                <p class="welcome">Digit Up</p>
                <form action="authentification.php" method="post">
                  <div class="row collapse">
                    <div class="small-2 columns">
                      <span class="prefix"><i class="material-icons">assignment_ind</i><i class="fi-mail"></i></span>
                    </div>
                    <div class="small-10  columns">
                      <input type="text" placeholder="Email" name="email">
                    </div>
                  </div>
                  <div class="row collapse">
                    <div class="small-2 columns ">
                      <span class="prefix"><i class="material-icons">lock</i><i class="fi-lock"></i></span>
                    </div>
                    <div class="small-10 columns ">
                      <input type="password" placeholder="Mot de Passe" name="pass">
                    </div>
                  </div>
                  <div class="row collapse">
                    <div class="small-15 columns ">
                      <input class="button" type="submit" value="Valider">
                    </div>
                  </div>
                </form>
              </div>
            </div>
           </div></p>
      </div>
  </div>
  </div>
  
  <?php
  include 'footer.php'

  ?>
