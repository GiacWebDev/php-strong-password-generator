<?php 
  $limit = 50
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

    <div class="row message-row">
      <div class="col">
        <p>Scegliere una password con un minimo di 8 caratteri e un massimo di 32 caratteri</p>
      </div>
    </div>

    <div class="row info py-5 px-3">
      <div class=" col d-flex ">

        <div class="div">
          <h4>Lunghezza password</h4>
          <button class="btn btn-primary ">Invia</button>
          <button class="btn btn-secondary ">Annulla</button>
        </div>

        <!-- Creo lista numeri con ciclo for -->
        <div class="div">
          <select class="form-select">
            <?php for ($i = 0; $i < $limit; $i++) { 
              echo "<option>$i</option>";
            } ?>
          </select>
        </div>

      </div>

    </div>


  </div>
  
</body>
</html>