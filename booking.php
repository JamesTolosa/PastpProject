<?php
function build_calendar($month, $year){
	$daysOfWeek = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');

	$firstDayOfMonth = mktime(0,0,0,$month,1,$year);
	
	$numberDays =date('t',$firstDayOfMonth);
	$dateComponents = getdate($firstDayOfMonth);
	$monthName= $dateComponents['month'];
	$daysOfWeek = $dateComponents['wday'];
	$dateToday = date('Y-m-d');
	$calendar = "<table class='table table-bordered'>";
	$calendar = "<center><h2>$monthName $year </h2></center>";
	$calendar ="<tr>";
	
	foreach((array)$daysOfWeek as $day){
		$calendar= "<th class= 'header'>$day</th>";
	}
	$calendar = "</tr><tr>";
	
	if($daysOfWeek > 0){
		for($k=0;$k<$daysOfWeek;$k++){
		$calendar="<td></td>";
		}
	}
		$currentDay=1;
		
		$month=str_pad($month,2,"0", STR_PAD_LEFT);
		
	while($currentDay <= $numberDays){
	

	
	
	
	$currentDayRel=str_pad($currentDay,2,"0", STR_PAD_LEFT);
	$date = "$year-$month-$currentDayRel";
	
	$calendar = "<td><h4>$currentDay</h4>";
	$calendar = "</td>";
	
	$currentDay++;
	$daysOfWeek++;
}


if($daysOfWeek !=7){
$remainingDays =7-$daysOfWeek;
for($i=0;$i<$remainingDays;$i++){
$calendar= "<td></td>";

}
}
$calendar = "</tr>";
$calendar = "</table>";

echo $calendar;

} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">

<style>
table{
	table-layout:fixed;
}
td{
width:33%;
}
.today{
	background:yellow;
}
</style>

</head>

<body>


	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
				$dateComponents =getdate();
				$month = $dateComponents['mon'];
				$year = $dateComponents['year'];
				echo build_calendar($month, $year);
				?>
				
			
			</div>
		</div>
	</div>


	

	


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/contact.js"></script>
</body>
</html>