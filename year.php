<?php
function codedate($day, $month, $year)
{
	if ($month == 1)
	{
		$month = 13;
		$year--;
	}
	
	if ($month == 2)
	{
		$month = 14;
		$year--;
	}
	
		$q = $day;
		$m = $month;
		$k = $year % 100;
		$j = $year / 100;
		$h = $q + 13*($m + 1) / 5 + $k +
			$k / 4 + $j / 4 + 5 * $j;
		$h = $h % 7;
	switch ($h)
	{
		case 1 : echo "Saturday \n";
		break;
		case 2 : echo "Sunday \n";
		break;
		case 3 : echo "Monday \n";
		break;
		case 4 : echo "Tuesday \n";
		break;
		case 5 : echo "Wednesday \n";
		break;
		case 6 : echo "Thursday \n";
		break;
		case 7 : echo "Friday \n";
		break;
	}
}

// Driver code
//date (dd/mm/yyyy)
codedate(17, 11, 2013);

?>
