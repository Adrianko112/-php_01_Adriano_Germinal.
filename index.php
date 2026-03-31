
<?php

$numeri=[1, 2, 3, 4, 5, 6, 7, 8, 9, 10,32, 45, 67, 89, 90];

//ho bisogno delle variabili che contengano la somma e il totale dei numeri pari 
$somma=0;
$totaleNumeriPari= 0;

foreach($numeri as $numero){
  if ($numero % 2 == 0){
    $somma += $numero;
    $totaleNumeriPari++;};
};

$media= $somma/$totaleNumeriPari; 

echo "La media dei numeri pari è {$media}";