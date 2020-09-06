<?php

require_once "../../config/lib/simple_html_dom.php";
require_once "../config/function/help_func.php";

$url = "https://applicant.21-school.ru/piscines";
$html = get_curl($url);

$dom = str_get_html($html);

$h2 = $dom->find('h2', 2);
$p = $dom->find('p');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../stylesheets/style.css">
</head>
<body>
	
	<div class="wrap">

		<div class="container">
			<?php
				echo '<h3>' . $h2->plaintext . '</h3>' . '<br>';

				foreach ($p as $i) {
					# code...
					echo '<div class="p"><p>' . $i->plaintext . '</p></div>';
				}
			?>
		</div>
		
	</div>

</body>
</html>