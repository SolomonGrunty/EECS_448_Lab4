<?php

	function mult($x, $y)
	{
		$z = $x * $y;
		return $z;
	}

	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$shirt = $_POST["shirt"];
	$head = $_POST["eihead"];
	$minion = $_POST["minion"];
	$ship = $_POST["ship"];
	
	echo "<h>Welcome, $user.  Your password is $pass.</h>";
	$costship = 0;
	switch($ship) {
		case "7 Day":
			$costship = 0;
			break;
		case "3 Day":
			$costship = 5;
			break;
		case "Overnight":
			$costship = 50;
			break;
		default:
			$costship = 0;
	}
	$costshirt = mult($shirt, 20);
	$costhead = mult($head, 420);
	$costminion = mult($minion, 69);
	$totalcost = $costshirt + $costhead + $costminion + $costship;
	echo "<table style=\"width: 750px;\" border = \"5\" cellpadding = \"3\">
	<tbody>
		<tr>
			<td> </td>
			<td>Quantity </td>
			<td>Cost Per Item </td>
			<td>Sub Total </td>
		</tr>
		<tr>
			<td>Shirt </td>
			<td> $shirt </td>
			<td> $20.00 </td>
			<td>$ $costshirt  </td>
		</tr>
		<tr>
			<td>Easter Island Head </td>
			<td> $head </td>
			<td> $420.00 </td>
			<td>$ $costhead</td>
		</tr>
		<tr>
			<td>Minion </td>
			<td>$minion </td>
			<td>$69.00 </td>
			<td>$ $costminion </td>
		</tr>
		<tr>
			<td>Shipping </td>
			<td colspan = \"2\">$ship </td>
			<td>$ $costship </td>
		</tr>
		<tr>
			<td>Total </td>
			<td colspan = \"3\"> $ $totalcost </td>
		</tr>
	</tbody>
</table>"
?>
