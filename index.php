<!DOCTYPE html>
<html>

<link rel="stylesheet" href="index.css">

<head>
	<title>Emoji Calculator</title>
</head>
<body>

	<div class ="header">
			<h1>Hello, I am your emoji calculator</h1>
		</div>
		
	<div class="main">
		
		<hr>		
			<?php 
				echo " &#128125  Addition ||    &#128128  Subtracion   ||   &#128123  Multiplication   ||  &#128561  Division  ";
			?>		
		<hr>

		<form action="" method="post">
			<table>
				<tr>
					<td>
						 Enter first number:    
					</td>
					<td>
						<input type="integer" name="num1" placeholder="Enter a number">
					</td>
				</tr>
				<tr>
					<td>
						Enter second number:    
					</td>
					<td>
						<input type="integer" name="num2" placeholder="Enter a number">
					</td>
				</tr>
				<tr>
					<td>	
					</td>
					<td>
						<input type="submit" value="<?php echo '&#128125'?>" name="addition">
						<input type="submit" value="<?php echo '&#128128'?>" name="subtraction">
						<input type="submit" value="<?php echo '&#128123'?>" name="multiplication">
						<input type="submit" value="<?php echo '&#128561'?>" name="division">
				</tr>
			</table>
		</form>

		<?php
			if(isset($_POST['addition']))
			{
				$n1 = $_POST['num1'];
				$n2 = $_POST['num2'];
				if(empty($n1) || empty($n2)){
					echo "<span >Please enter the numbers!!!</span>";
				}
				else{
					echo "Your first number = ".$n1." and your second number = ".$n2."<br>";
					echo "<span style='color:white'>Addition = ".$n1 + $n2."</span>";
				}
				
			}
			if(isset($_POST['subtraction']))
			{
				$n1 = $_POST['num1'];
				$n2 = $_POST['num2'];
				if(empty($n1) || empty($n2)){
					echo "<span >Please enter the numbers!!!</span>";
				}
				else{
					echo "Your first number = ".$n1." and your second number = ".$n2."<br>";
					echo "<span style='color:white'>Subtracion = ".$n1 - $n2."</span>";
				}
				
			}
			if(isset($_POST['multiplication']))
			{
				$n1 = $_POST['num1'];
				$n2 = $_POST['num2'];
				if(empty($n1) || empty($n2)){
					echo "<span >Please enter the numbers!!!</span>";
				}
				else{
					echo "Your first number = ".$n1." and your second number = ".$n2."<br>";
					echo "<span style='color:white'>Multiplication = ".$n1 * $n2."</span>";
				}
				
			}
			if(isset($_POST['division']))
			{
				$n1 = $_POST['num1'];
				$n2 = $_POST['num2'];
				if(empty($n1) || empty($n2)){
					echo "<span >Please enter the numbers!!!</span>";
				}
				else{
					echo "Your first number = ".$n1." and your second number = ".$n2."<br>";
					echo "<span style='color:white'>Divition = ".$n1 / $n2."</span>";
				}
				
			}			
		?>

		

	</div>
	<div class ="footer">
			<h1>Sadi Muhammad Tanzim</h1>
		</div>

</body>
</html>
