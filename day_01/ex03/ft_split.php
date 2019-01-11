#!/usr/bin/php
<?PHP
function ft_split($text)
{
	$words = explode(" ", $text);
	$ret = array_filter($words, 'strlen');
	sort($ret);
	print_r($ret);
}
?>
