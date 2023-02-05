<!DOCTYPE html>
<html>

<head>
	<title>Hello, World!</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<?php
	include 'menu.php';
	?>

	<div class="container">
		<h1 class="<?php echo $class ?>">
			<?php echo "Hello, World!" ?>
		</h1>
		<p>
			<?php
			echo "Today date is " . date('y/m/d') . "<br>";
			echo "Time is " . date('h:i:s');
			?>
		</p>
	</div>
</body>

</html>

