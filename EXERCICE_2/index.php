<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> EXERCICE_XP_2</title>
</head>
<body>
<form  method="post">
  <label for="name">Nom:</label>
  <input type="text" id="name" name="name">
  <br><br>
  <label for="age">Age:</label>
  <input type="text" id="age" name="age">
  <br><br>
  <input type="submit" value="Envoyer">
</form>
<?php
  if (isset($_POST['name']) && isset($_POST['age'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    echo "Hi $name. You are $age years old.";
  }
?>
</body>
</html>