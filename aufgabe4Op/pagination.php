<?php

$numberAll = $number;
$mod = $number % 10;
$number -= $mod;
$number /= 10;

//calculating number of pages
if($mod > 0){
	$numberPages = $number+1;
}else{
	$numberPages = $number;
}


if(isset($_GET['start'])){
	$start = $_GET['start'];
	$previous = $_GET['start']-10;
	if($previous < 0){
		$previous = 0;
	}
	if($numberPages > ($start/10)+1){
		$next = $start + 10;
	}else{
		$next = $start;
	}
}else{
	$start = 0;
	$previous = 0;
	$next = 10;	
}

$currentPage = ($start/10) +1;

if($currentPage > 5){
	$firstPage = ($start/10) - 4;
	if(($currentPage + 5) > $numberPages){
		$range = $numberPages;
	}
	else{
		$range = $currentPage + 5;
	}
}
else{
	$firstPage = 0;
	if($numberPages < 10){
		$range = $numberPages;
	}
	else{
		$range = ($currentPage) + 10;
	}
}

?>