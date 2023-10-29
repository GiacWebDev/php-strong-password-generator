<?php 
include __DIR__ . '/functions.php';
include __DIR__ . '/Layout/head.php';

session_start();
$_SESSION['password'] = $password;
header("Location: /index.php");
?>

<div class="container">
  <div class="row">
    <div class="col">

      <h1>La tua password è</h1>
      <?php
      if($passwordLength > 8 && $passwordLength < 32) {
        $createdPassword = generateRandomPassword($passwordLength);
      
      echo '<p>Password creata:' . $createdPassword . '</p>'; 
      }else{
        echo '<p>La lunghezza della password deve essere di almeno 8 e massimo 32 caratteri</p>';
      } ?>

    </div>
  </div>
</div>

<?php include __DIR__ . '/Layout/footer.php'; ?>