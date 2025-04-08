<?php
	$string = file_get_contents("./events.json");
	$decoded = json_decode($string, true);
	// var_dump($decoded);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DevOps</title>
</head>
<body>

<h1>Devops Days locations</h1>
<ul>
	<?php
		for($i = 0; $i < count($decoded); $i++) {
			?>
			<li>
				<img style="max-height: 15px" src="./src/images/<?=$decoded[$i]["logo"]?>" alt=""> 
				<b><?=$decoded[$i]["lieu"]?></b>: 
				<?=$decoded[$i]["date"]?>
			</li>
			<?php
		}
	?>
</ul>
	
</body>
</html>