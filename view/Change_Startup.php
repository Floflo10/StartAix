<?php
include 'header.php';

?>

<form action="../model/model.php" method="post" enctype="multipart/form-data">
<p>
    N°Startup <input type="text" name="N" /> <br> </br>
    Nom <input type="text" name="name" /> <br> </br>
    Description <textarea type="message" row="8" cols="45" name="des" > </textarea> <br> </br>
    Salle <select name="salle" />
      <option value="1">A1</option>
      <option value="2">A2</option>
      <option value="3">A3</option>
      <option value="4">A4</option>
      <option value="5">A5</option>
      <option value="6">A6</option>
      <option value="7">A7</option>
      <option value="8">A8</option>
      <option value="9">A9</option>
      <option value="10">A10</option>
    </select> <br> </br>
    Lien video <input type="text" name="video" /> <br> </br>
    Membre <input type="text" name="member" /> <br> </br>
    Logo <input type="file" name="logo" /><br> <br/>
    <input type="submit" value="Envoyer" />
</p>
