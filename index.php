<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Robot Arm Control Panel</title>
  <link rel="stylesheet" href="./style.css">


<!-- import Bootstrap -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<!-- partial:index.partial.html -->



<div class="range-slider" style="width: 50%;height: 10%;">
<form method="post">
<p> Servo Motor 1</p>
  <input class="range-slider__range" type="range" value="90" min="0" max="180" name="Motor1">
  <span class="range-slider__value">0</span>
</div>
<div class="range-slider" style="width: 50%;height: 10%;">
<p> Servo Motor 2</p>
  <input class="range-slider__range" type="range" value="90" min="0" max="180" name="Motor2">
  <span class="range-slider__value">0</span>
</div>
<div class="range-slider" style="width: 50%;height: 10%;">
<p> Servo Motor 3</p>
  <input class="range-slider__range" type="range" value="90" min="0" max="180" name="Motor3">
  <span class="range-slider__value">0</span>
</div>

<div class="range-slider" style="width: 50%;height: 10%;">
<p> Servo Motor 4</p>
  <input class="range-slider__range" type="range" value="90" min="0" max="180" name="Motor4">
  <span class="range-slider__value">0</span>
</div>
<div class="range-slider" style="width: 50%;height: 10%;">
<p> Servo Motor 5</p>
  <input class="range-slider__range" type="range" value="90" min="0" max="180" name="Motor5">
  <span class="range-slider__value">0</span>
</div>
<div class="range-slider" style="width: 50%;height: 10%;">
<p> Servo Motor 6</p>
  <input class="range-slider__range" type="range" value="90" min="0" max="180" name="Motor6">
  <span class="range-slider__value">0</span><br>


<p style="text-align:left;">On/Off Switch </p>
<label class="switch">
  <input type="checkbox" name="CheckBox">
  <span class="slider round"></span>
</label><br>

<input type="submit" class="btn btn-primary btn-round mr-md-3 mb-md-0 mb-2" value="Save" name="Save" >
</div>






<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>



<?php 

require 'DataBase.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$motor_1=$_POST["Motor1"];
	$motor_2=$_POST["Motor2"];
	$motor_3=$_POST["Motor3"];
	$motor_4=$_POST["Motor4"];
	$motor_5=$_POST["Motor5"];
	$motor_6=$_POST["Motor6"];
	if($_POST["CheckBox"]){
		$checkbox=1;
		
	}else{
		$checkbox=0;
	}
	$sql = "UPDATE motors_values SET motor_1='$motor_1',motor_2='$motor_2',motor_3='$motor_3',motor_4='$motor_4',motor_5='$motor_5',motor_6='$motor_6',checkbox='$checkbox'";

if ($conn->query($sql) === TRUE) {
  echo '<p style="color:white; text-align:center;" >Record updated successfully</p>';
} else {
  echo '<p style="color:white; text-align:center;" >Error updating record:</p>' . $conn->error;
}
	
	
	
	
}

$conn->close();




 ?>