<?php
    $strings = ["Hello", "World", "PHP", "Programming"];
    foreach ($strings as $str) {
        $array = str_split($str);
        $count=0;
        foreach ($array as $char) {
            if($char=='a'||$char=='e'||$char=='i'||$char=='o'||$char=='u'||$char=='A'||$char=='E'||$char=='I'||$char=='O'||$char=='U'){
                $count+=1;
            }
        }
        $revstr=strrev($str);
        echo "Original String: $str, Vowel Count: $count, Reversed String: $revstr".PHP_EOL;
    }
?>