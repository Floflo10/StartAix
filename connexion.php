<?php
include 'header.php';

?>
<p>
connexion

</p>


<form action="authentification.php" method="post">
<p>
    Pseudo :<input type="text" name="email" />
    Mot de passe<input type="password" name="pass" />
    <input type="submit" value="Connexion" />
</p>

</form>

<?php
include 'footer.php'

?>
