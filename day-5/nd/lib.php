<?php
declare(strict_types=1);

$myNumbers = ["Mantas", "Darius", "Ignas", "Indre", "Ruta", "Gytis"];

print("<br><pre>");
print("Before sorting:");
print_r($myNumbers);
for($i = 0; $i < count($myNumbers); $i++){
  for($j = 0; $j < count($myNumbers) - $i - 1; $j++){
    // to compare strings use: strcmp($first_str, $second_str)
    if(strcmp($myNumbers[$j], $myNumbers[$j + 1]) > 0){
      // swap  operation
      $tmp = $myNumbers[$j];
      $myNumbers[$j] = $myNumbers[$j + 1];
      $myNumbers[$j + 1] = $tmp;
    }
  }
}
print("After sorting:");
print_r($myNumbers);
print("</pre><br>");

$num = 32445;

function doSomethingWithNumber(int $a) {    
    $newNum = ($a * 1234) / pow($a, 4) -432543 + $a *34;
    return $newNum;
}

$countedNum = doSomethingWithNumber($num);

echo $countedNum;

