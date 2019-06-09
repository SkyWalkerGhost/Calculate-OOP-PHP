<?php
	
	if($_SERVER['REQUEST_METHOD'] === "POST") {

	include('class/class.php');

	if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['cal'])) {

		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$cal  = $_POST['cal'];

		function Is_valid($num1,$num2) {
			if(empty($num1 || $num2)) {
					echo ' Fields Is Empty ';
				} 
			}
		Is_valid($num1,$num1);
		

		$calculator = new Calculate($num1, $num2, $cal);
		echo ' The Answer is : ' . $calculator->calcMethod();

	}
}


 ?>

	<br>
 
 	<a href="work.php"> Go Back </a>