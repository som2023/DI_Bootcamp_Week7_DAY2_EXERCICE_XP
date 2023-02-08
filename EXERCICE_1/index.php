
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="post">
  <label for="username">Nom d'utilisateur:</label>
  <input type="text" id="username" name="username">
  <input type="submit" value="Envoyer">
</form>
<?php
  if (isset($_POST['username'])) {
    $username = $_POST['username'];
    echo "Bonjour, $username";
  }
?>
</body>
</html>