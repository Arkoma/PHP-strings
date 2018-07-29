<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Strings</title>
  </head>
  <body>
		<?php
			$first = "The quick brown fox";
			$second = " jumped over the lazy dog.";

			$third = $first;
			$third .= $second;

			echo $third;


		?>
  </body>
</html>
