<?php
$str = "This is a String";
echo $str;
$lenn = strlen($str);
echo "<br/> The length of the string is: " . $lenn;
echo "<br/> The num of words in the string is: " . str_word_count($str);
echo "<br/> The reverse of the string is: " . strrev($str);
