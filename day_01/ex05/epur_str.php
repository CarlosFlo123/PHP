#!/usr/bin/php
<?PHP
	if ($argc > 1)
	{
		$text = trim($argv[1]);
		while ((strpos($text, "  ")) == TRUE)
			$text = str_replace("  ", " ", $text);
		echo ("$text\n");
	}	
?>
