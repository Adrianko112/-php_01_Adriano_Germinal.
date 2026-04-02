
<?php


//CHECK PASSWORD;
//deve contenere almeno 8 caratteri ----okkk
//deve contenere almeno una lettera maiuscola
//deve contenere almeno un numero
//deve contenere almeno un carattere speciale



// $password = readLine("Inserisci la password: ");


//controllo lunghezza

 function ceckLength($psw) {
  if (strlen($psw)>=8) {
    return true;
  } 
    echo "La password deve contenere almeno 8 caratteri" . "\n";
    return false;
 };

 //variabile che contiene il risultato del controllo lunghezza

  //$length = ceckLength($password);

 //controllo numeri

 function checkNumber($psw) {
  for ($i=0; $i < strlen($psw); $i++) { 
    if (is_numeric($psw[$i])) {
      return true;
    }
  }
  echo "La password deve contenere almeno un numero" . "\n";
  return false;
 };

//variabile che contiene il risultato del controllo numeri

 //$hasNumber = checkNumber($password);

//controllo lettere maiuscole
  function checkUpperCase($psw) {
    for ($i=0; $i < strlen($psw); $i++) { 
      if (ctype_upper($psw[$i])) {
        return true;
      }
    }

    echo "La password deve contenere almeno una lettera maiuscola" . "\n";
    return false;
   
  };
  //variabile che contiene il risultato del controllo lettere maiuscole

  //$upperCase = checkUpperCase($password);


  //controllo caratteri speciali
  function checkSpecialChar($psw) {
    //mi sono fatto generare un array di caratteri speciali 
    $specialChars = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '+', '-', '=', '[', ']', '{', '}', '|', ';', ':', '"', "'", ',', '<', '.', '>', '/', '?'];
    for ($i=0; $i < strlen($psw); $i++) { 
      if (in_array($psw[$i], $specialChars)) {
        return true;
      }
    }
    echo "La password deve contenere almeno un carattere speciale" . "\n";
    return false;
  };

  //variabile che contiene il risultato del controllo caratteri speciali
  //$hasSpecialChar = checkSpecialChar($password);

function checkPassword($psw) {
 $length = ceckLength($psw);
 $hasNumber = checkNumber($psw);
 $upperCase = checkUpperCase($psw);
 $hasSpecialChar = checkSpecialChar($psw);
  if ($length && $hasNumber && $upperCase && $hasSpecialChar) {
    echo "La password è valida" . "\n";
  } 
    return $length && $hasNumber && $upperCase && $hasSpecialChar;

};


//inserisco do/while per far ripetere la richiesta della password finché non viene inserita una password valida
do {
  $password = readLine("Inserisci la password: ");
} while (!checkPassword($password));