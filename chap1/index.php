<?php
	$hourlyRate=10.00;
	$hoursWorked=12;
	$rateMultiplier=1.5;
	$commissionRate=0.1;
	$grossSales=25;
	$bonus=0;

	$holidayRate=$hourlyRate * $rateMultiplier;
	$holidayPay=$holidayRate * $hoursWorked;
	$commission=$commissionRate * $grossSales;
	$salary = $holidayPay +$commission;

	if ($grossSales>1000){
		$bonus=1000;
	}
	$total=$salary + $commission;
	echo "total is {$total}\n";
	#echo "total is ${$salary + $commission}";

?>