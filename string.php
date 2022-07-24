<?php
$str = "HelloSujit";

echo $str."<br>";

$lenn = strlen($str);
echo " This is counting Number ".$lenn . ". Thank You";
echo " This is counting Number ".str_word_count($str). ". Thank You<br>";
echo " This is reverse string ".strrev($str)." Thank You<br>";
echo " This is position of string ".strpos($str, "Su")." Thank You<br>";
echo " This is replace word".str_replace("Tejas","Sujit",$str). "Thank You";

//echo $lenn;



?>