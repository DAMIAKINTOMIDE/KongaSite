<!DOCTYPE html>
<html>
<head>
	<title>PHP Quizes</title>
</head>
<style type="text/css">
	.quiz_box{
		width: 500px;
		height: 500px;
		border: solid black 1px;
		float:left;
		padding: 5px 5px 5px 5px;
		overflow:auto;
		margin: 10px;
	}
</style>
<body>

	<div class="quiz_box">
		<h2>Quiz 1</h2>
	
		<?php

		echo nl2br("My name is damilola Akintomide. \n I am really happy i joined this program because i have learnt so much.\n I studied computer science.\n I enjoy IT because of the unending solutions it provides from different sectors.\n it's amazing.\n I hope one day i can add to the solutions that would change the world for bettter.\n");

		?>
	</div>

	<!-- end of quiz 1 -->

	<div class="quiz_box">
		<h2>Quiz 2</h2>
		<?

			$num1 = 23;
			$num2 = 10;
			$num3 =	5;

			$result1 = $num1 * $num3;
			$result2 = $num1 - $num2;
			$result3 = $num3 / $num2;

			echo nl2br("The product of the first and third number is " . $result1 ."\n");
			echo nl2br("The substraction of the first and third number is " . $result2 ."\n");
			echo nl2br("The division of the first and third number is " . $result3 ."\n");





			
		?>
	</div>

	<!-- end of quiz 2 -->
	<div class="quiz_box">
		<h2>Quiz 3</h2>
		<?
			$temp_day = 27.9;

			if ($temp_day  <= 20) {
				print_r("It is really cold today");
					
			}
			elseif ($temp_day > 20 && $temp_day < 30) {
				print_r("The weather is just perfect.");	
					
			}elseif ($temp_day >= 30 &&  $temp_day <= 40) {
				print_r( "It’s so hot today.");
						
			}elseif ($temp_day >= 40) {
				print_r("Am I in the Sahara Desert?!");
			}

		?>
	</div>

	<!-- end of quiz 3 -->

	<div class="quiz_box">
		<h2>Quiz 4</h2>
		<?
			
			for($i = 100; $i <= 150;$i++){

				echo nl2br($i."\n");
			}

		?>
	</div>

	<!-- end of quiz 4 -->

	<div class="quiz_box">
		<h3>Quiz 4 - section 2</h3>
		<?
				for ($i=0; $i <=50 ; $i++) { 
					if ($i % 2 == 0) {
					echo nl2br($i."\n");
					}
				}

		?>
	</div>

	 <!-- end of quiz 4  -->

	 <div class="quiz_box">
		<h1>Quiz 5</h1>
		<?

		$array1 =  array("damilola","jibola","eniola");
		$array2 = array("watching movies","drawing"," eating food ");

		$count_array1 = count($array1);
		$count_array2 = count($array2);


		
		
		for ($j=0; $j < $count_array2 ; $j++) { 
			echo ("My name is ".$array1[$j]);
				echo nl2br(". I love"
				.$array2[$j]."\n");
			}
			

		?>
	</div>

	<!-- end of quiz 5 -->

	<div class="quiz_box">
		<h1>Quiz 6</h1>
		<?

		function _calculate($x,$y){
			$addition = $x + $y;

			$multiplication = $x * $y;

			echo nl2br("The sum of a and b is " .$addition ."\n");

			echo "The product of a and b is ". $multiplication ; 

		}


		_calculate(20,20);

	 
	 
		?>
	</div>
	<!-- end of quiz 6 -->
		
</body>
</html>
