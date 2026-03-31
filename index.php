
<?php

$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
  ['name' => 'Mario', 'surname' => 'Rossi', 'gender' => 'M'],
  ['name' => 'Maria', 'surname' => 'Bianchi', 'gender' => 'F'],
  ['name' => 'Adriano', 'surname' => 'Placido', 'gender' => 'NB']
];

foreach ($users as $user) {
  if ($user['gender'] == 'M') {
    echo "Buongiorno Sig. " . $user['name'] . " " . $user['surname'] . "\n";
  } elseif ($user['gender'] == 'F') {
    echo "Buongiorno Sig.ra " . $user['name'] . " " . $user['surname'] . "\n";
  } else {
    echo "Buongiorno " . $user['name'] . " " . $user['surname'] . "\n";
  }   ;
};