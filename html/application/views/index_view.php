<html>
	<head>
		<title>Home</title>
		<style>
			li {
				list-style:none;
			}
		</style>
	</head>
	<body>
		

		<!--<h1><?php echo $hi ?></h1>-->

		<!--<h2><?php echo $how ?></h2>

		Watch me count:-->
		<ul>
			<?php if( !empty( $hi ) ) : ?>
				<?php foreach( $hi as $row => $values ) : ?>
					<li>
						<?php echo $row . ' :: ' . $values['t_input']; ?>
					</li>
				<?php endforeach ?>
			<?php endif; ?>
		</ul>
	
	</body>
</html>