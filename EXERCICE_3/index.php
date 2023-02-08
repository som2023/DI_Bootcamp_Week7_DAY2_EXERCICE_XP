<?php
  function myFunction($value) {
    try {
      if (!filter_var($value, FILTER_VALIDATE_INT)) {
        throw new Exception("La valeur n'est pas un entier valide");
      }
    } catch (Exception $e) {

      echo $e->getMessage();
      
    } finally {

      echo "Validation complete \n";

    }
  }

  $value = 2.5;
  myFunction($value);
?>
