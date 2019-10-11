<?php
	echo "hello world\n\n";
	$name = "shibata";
	$age = 25;
	$weeks=52;
	$hourlyRate = 10.50;
	$hours = 40;
	$weeklyPay=$hourlyRate * $hours;
	$salary=$weeklyPay* $weeks;

	echo "{$name} is {$age}  years old \n";
	echo "{$name} makes $ {$hourlyRate} an hour\n";
	echo "{$name} will make {$salary} ,this year\n\n"
?>
