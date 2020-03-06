#!/usr/bin/php
<?PHP

function upper($matches)
{
	return strtoupper($matches[0]);
}

if ($argc == 2)
{
	$fd = fopen($argv[1], "r");
	if ($fd === false)
		exit();
	$pattern = "/[a-z]*/";
	while ($line = fgets($fd))
	{
		$line = preg_replace_callback($pattern, 'upper', $line);
		echo "$line";
	}

# https://regex101.com/
# (?<=<a).+(?=<\/a>)
# https://stackoverflow.com/questions/13618077/php-regex-to-match-the-last-occurrence-of-a-string

#	$stripped = preg_replace('/( |\t)+/', ' ', $argv[1]);
#	$stripped = trim($stripped);
#	echo "$stripped\n";
}
?>
