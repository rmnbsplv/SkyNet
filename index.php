<?php


require(__DIR__ . '/f/tarifs.php');

$data = json_decode(file_get_contents("http://sknt.ru/job/frontend/data.json"), true);
$tarifs = $data["tarifs"];
$class_tarifs = new Tarifs;

?>
<!DOCTYPE HTML public>
<html lang="ru-ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Веб-интерфейс выбора тарифа</title>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">
		<link rel="stylesheet" type="text/css" href="/f/style.css">
		<link rel="shortcut icon" href="http://sknt.ru/favicon.ico">
	</head>
	<body>


		<div id="container">
			<?php
				echo $class_tarifs->TarifsGroups();
			?>
		</div>
		<div id="result_container"><div id="result_content">
			<div id="result_header">
				<div id="back" class="pointer"><i class="arrow"></i></div>
				<div id="result_title" class="bold"></div>
			</div>
			<div id="result"></div>
		</div></div>

		<div id="result_container2"><div id="result_content2">
			<div id="result_header2">
				<div id="back2" class="pointer"><i class="arrow"></i></div>
				<div id="result_title2" class="bold"></div>
			</div>
			<div id="result2"></div>
		</div></div>





		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="/f/js.js"></script>
	</body>
</html>