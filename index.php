<?php 

include __DIR__ . '/functions.php';

// effettuo un controllo con if isset
if(isset($_GET['submit'])) {
  $password = generateRandomPassword($_GET['numbers']);
}
  
  $passwordLength = $_GET['numbers']; 

?>

<!-- Importo head da un file esterno -->
<?php include __DIR__ . '/Layout/head.php'; ?>

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
  
  <?php include __DIR__ . '/Layout/footer.php'; ?>
  