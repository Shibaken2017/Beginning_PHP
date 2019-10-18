<?php   
	#$data=["test","hoge","nyara"];
	#f#or ($data as $value){
	#	print "値は:{$value} です";
	#}
	for($i=1;$i<=9;$i++){
		$line="";
		for($j=1;$j<=9;$j++){
			$tmp=$i*$j;
			$line=$line . " " . $tmp;
		}
		print $line . "\n";
	}

?>














?>
