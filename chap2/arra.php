<?php
	#配列
	$myinfo=array("jhon",25,"usa","college");
	echo "my name is $myinfo[0]\n";
	echo "$myinfo[1] years old\n";
	#split
	#$filename="tmp.txt";
	#$filename_parts=explode(".",$filename);
	#echo "your filename is $filename_parts[0]\n"; 

	#merging array into a string
	$filename="myexamplefile.txt";
	$filename_parts=explode(".",$filename);
	echo " $filename_parts[0]  \n\n";
	#.=で文字列を後方から足す
	$filename_parts[0] .= "_v1";
	$filename=implode(".",$filename_parts);
	echo "your filename is $filename \n";
?>