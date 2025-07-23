<?php
$str = "I'm sorry Dave I'm afraid I can't do that.";
$voyelle =  ["A", "E", "I", "O", "U", "Y",
             "a", "e", "i", "o", "u", "y"];

     for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $voyelle)) {
            echo $str[$i];
        }
     }
?>