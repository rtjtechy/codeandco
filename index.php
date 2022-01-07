<!DOCTYPE html>
<html>
<title>Day Code</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.myLink {display: none}
</style>
<body class="w3-light-grey">

<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-border-bottom w3-xlarge">
  <a class="w3-bar-item w3-button w3-text-red w3-hover-red"><b><i class="fa fa-code w3-margin-right"></i>Day Code</b></a>
  <a  class="w3-bar-item w3-button w3-right w3-hover-red w3-text-grey"></a>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
  <img class="w3-image" src="https://www.w3schools.com/w3images/london2.jpg" alt="London" width="1500" height="700">
  <div class="w3-display-middle" style="width:65%">
    <div class="w3-bar w3-black">
      <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Flight');"><i class="fa fa-calendar w3-margin-right"></i>Day</button>
     
    </div>

    <!-- Cal -->
    
    <div id="Flight" class="w3-container w3-white w3-padding-16 myLink">
    
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


?>
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  



<h2>Day in the Week</h2>
<form action = "index.php" method="POST">
  Day: &nbsp;&nbsp; <input type="number" name="day" value="">
  <br><br>
  Month: <input type="number" name="month" value="">
  <br><br>
  Year: &nbsp; &nbsp;<input type="number" name="year" value="">
  <br><br>
  <button class="w3-button w3-dark-grey"  type="submit"  name="submit">Find Day</button>
<?php
echo "<h2>Your Input:</h2>";
 if (isset($_POST['submit'])) 
 {
    $sday = $_POST["day"];
    $smonth = $_POST["month"];
    $syear = $_POST["year"];
    codedate($sday, $smonth, $syear);

 }
?>

</form>
</body>
</html>
    
    <!-- Tabs -->
        
        
    
     
      
    </div>

    

    
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:800px;">

  <!-- Good offers -->
  

  <!-- Newsletter -->
 
  <!-- Contact -->
  
  
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-center w3-opacity w3-margin-bottom">

</footer>

<script>
// Tabs
function openLink(evt, linkName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("myLink");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(linkName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}

// Click on the first tablink on load
document.getElementsByClassName("tablink")[0].click();
</script>

</body>
</html>
