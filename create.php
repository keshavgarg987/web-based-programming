<?php
echo "KESHAV GARG<br>";
$file = fopen("new.txt", "w");
$txt = "garg'S\n";
fwrite($file, $txt);
$txt ="always on TOP\n";
fwrite($file, $txt);
fclose($file);
?>