#!/usr/bin/php
<?PHP
if ($argc > 1)
{
	$arr = $argv;
	array_shift($arr);
	$line = implode(" ", $arr);
	$line = trim($line);
	$arr = explode(" ", $line);
	$arr = array_filter($arr);
	$chars = array();
	$numbers = array();
	$others = array();
	foreach ($arr as $value)
	{
		if (preg_match("/^[a-zA-Z]$/", $value[0]))
			array_push($chars, $value);
		else if (preg_match("/^[0-9]$/", $value[0]))
			array_push($numbers, $value);
		else
			array_push($others, $value);
	}
	natcasesort($chars);
	sort($numbers, SORT_STRING);
	sort($others, SORT_STRING);
	$lines[3];
	$lines[0] = implode("\n", $chars);
	$lines[1] = implode("\n", $numbers);
	$lines[2] = implode("\n", $others);
	$line = implode("\n", $lines);
	echo "$line\n";
}
?>
