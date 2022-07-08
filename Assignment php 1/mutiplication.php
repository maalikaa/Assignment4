<h2>Multiplication table from 2 to 10</h2>
<table border='1' width="100%">
<?php
//filename : multiplication.php
$number = 10;

for($num = 1; $num <= 10; $num++)
{	
    echo "<tr>";
	
	for($num2 =2; $num2 <= $number; $num2++)
	{
		$multi = ($num * $num2);
		echo "<td>$num2  x $num =  $multi </td>";
	}
	
	echo "<tr/>";
}
?>
</table>