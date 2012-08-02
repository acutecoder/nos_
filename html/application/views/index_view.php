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
		
		<h1><?php echo $hi ?></h1>

		<h2><?php echo $how ?></h2>

		Watch me count:
		<ul>
			<?php if( !empty( $count ) ) : ?>
				<?php foreach( $count as $number ) : ?>
					<li>
						<?php echo $number ?>
					</li>
				<?php endforeach ?>
			<?php endif; ?>
		</ul>
	
	</body>
</html>