#!/usr/bin/php
<?PHP

while (true)
{
	echo "Enter a number: ";
	$number = fgets(STDIN);
	$number = trim($number);
	if (is_numeric($number))
	{
		if ($number % 2 == 0)
			echo "The number $number is even";
		else
			echo "The number $number is odd";
	}
	else
		if (feof(STDIN))
	{
		echo "\n";
		exit();
	}
	else
		echo "'$number' is not a number";
	echo "\n";
}
?>
