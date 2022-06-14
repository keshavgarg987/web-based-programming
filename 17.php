<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Raghav Makan\n";
fwrite($myfile, $txt);
$txt ="Keshav Garg\n";
fwrite($myfile, $txt);
fclose($myfile);
?>