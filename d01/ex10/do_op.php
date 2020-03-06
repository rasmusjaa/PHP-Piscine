#!/usr/bin/php
<?PHP
if ($argc == 4)
{
	$nb1 = trim($argv[1]);
	$nb2 = trim($argv[3]);
	$op = trim($argv[2]);
	if ($op == "+")
		$nb = $nb1 + $nb2;
	else if ($op == "-")
		$nb = $nb1 - $nb2;
	else if ($op == "*")
		$nb = $nb1 * $nb2;
	else if ($op == "/")
		$nb = $nb1 / $nb2;
	else if ($op == "%")
		$nb = $nb1 % $nb2;
	echo $nb."\n";
}
else
	exit("Incorrect Parameters\n");
?>
