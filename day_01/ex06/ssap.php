#!/usr/bin/php
<?PHP
	if ($argc > 1)
	{
		$i = 1;
		$str = "";
		while($i < $argc)
		{
			$str .= " ".$argv[$i]." ";
			$i++;
		}
		$text = trim($str);
		while ((strpos($text, "  ")) == TRUE)
			$text = str_replace("  ", " ", $text);
		$tab = explode(" ", $text);
		sort($tab);
		foreach ($tab as $elem)
			echo "$elem\n";
	}
?>
