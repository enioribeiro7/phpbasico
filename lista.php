<html>
	<head>
		<title>Lista</title>
	</head>
	<?php 
		$lista = array(
			array(
				"nome" => "enio",
				"email" => "enio@enio.com"
			),
			array(
				"nome" => "pedro",
				"email" => "pedro@pedro.com"
			)
		);
	?>
	
	
	<body>
		<ul>
			<?php foreach ($lista as $item) { ?>
				<li>
					nome: <?php echo $item["nome"];?><br />
					email:<?php echo $item["email"];?>
				</li>
			<?php }?>
		</ul>

	</body>

</html>