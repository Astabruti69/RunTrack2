<?php
function calcule($a, $operation, $b ) {
   if ($operation == "+") {
        $result = $a + $b;
   } elseif ($operation == "-") {
        $result = $a - $b;
   } elseif ($operation == "*") {
        $result = $a * $b;
   } elseif ($operation == "/") {
        $result = $a / $b;
   } elseif ($operation == "%") {
        $result = $a % $b;
   }
   return $result;
}
echo calcule(6, "+", 3), " = 6 + 3 <br/>";
echo calcule(6, "-", 3), " = 6 - 3 <br/>";
echo calcule(6, "*", 3), " = 6 x 3 <br/>";
echo calcule(6, "/", 3), " = 6 / 3 <br/>";
echo calcule(6, "%", 3), " = 6 % 3 <br/>";
?>