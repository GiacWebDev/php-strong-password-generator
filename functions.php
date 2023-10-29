<?php 


function generateRandomPassword($Length) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+-=[]{}|;:,.<>?';
  // definisco una lunghezza variabile dei caratteri
  $charactersLength = strlen($characters);
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