<html>
<?php
function myfunction()
{
	static $x=10;
	echo "$x<br>";
	$x++;
	echo "$x<br>";
}
echo "KESHAV GARG<br>";
myfunction();
myfunction();
?>
</html>