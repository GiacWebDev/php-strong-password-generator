<?php 

  // effettuo un controllo con if isset
  if(isset($_POST['submit'])) {
    $password = generateRandomPassword($_POST['numbers']);
  }

  
  function generateRandomPassword($Length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+-=[]{}|;:,.<>?';
    // definisco una lunghezza variabile dei caratteri
    $charactersLength = strlen($characters) -1;
    // creo una variabile vuota che vado a riempire 
    $password = '';
  
    for($i = 0; $i < $Length; $i++) {
      $randomCharacter = $characters[rand(0, $charactersLength)];
      // aggiungi e mantieni
      $password .= $randomCharacter;
    }
    // adesso questo return ha i caratteri all'interno
    return $password;
  
  }

  $passwordLength = $_GET['numbers']; 

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <!-- SCSS -->
  <link rel="stylesheet" href="./scss/main.scss">


  <title>PHP Strong Password Generator</title>
</head>
<body>

  <div class="container pt-5">

    <div class="row">
      <h1>Strong Password Generator</h1>
      <h3>Genera una password sicura</h3>
    </div>

    <!-- STAMPA PASSWORD / ERRORE -->
    <div class="row message-row">
      <div class="col">
      <?php
      if($passwordLength > 8 && $passwordLength < 32) {
      $createdPassword = generateRandomPassword($passwordLength);
      
      echo '<p>Password creata:' . $createdPassword . '</p>'; 
      }else{
        echo '<p>La lunghezza della password deve essere di almeno 8 e massimo 32 caratteri</p>';
      } ?>
      </div>
    </div>

    <div class="row info py-5 px-3">
      <div class=" col">

        <form action="index.php" method="GET">
          <h4>Lunghezza password</h4>
          <button type="submit" class="btn btn-primary ">Invia</button>
          <button class="btn btn-secondary ">Annulla</button>
          
          <input type="number" id="numbers" name="numbers" require>
        </form>

      </div>

    </div>

  </div>
  
</body>
</html>