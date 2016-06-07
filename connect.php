<?php
$server = "localhost";
$username = "root";
$password = "password";

// $con = mysql_connect('localhost', 'root', '');
$con = new mysqli($server, $username, $password);

if($con -> connect_error){
	die("Failed to Connect");
}
//echo "Connection Successful";


// Select the data base
$db = mysqli_select_db($con, 'HONOURS') 
  or die("Could not select examples");
if ( !$db ) {
  die ( 'Error selecting database \'HONOURS\' : ' . mysqli_connect_error() );
}

// Fetch the data

// store values to arrays

$chart = 1;
$labels[$chart] = array();
for ($chart = 1; $chart<=16;$chart++) {
	if ($chart <= 8){
		$yr = "BD" . ($chart + 2007);
	}
	else {
		$yr = "NY" . ($chart + 1999);
	}
	$query = "SELECT COUNT(*) as No,Award FROM $yr group by Award ORDER BY Award asc;";
	$result = mysqli_query( $con, $query );

	// All good?
	if ( !$result ) {
	  // Nope
	  $message  = 'Invalid query: ' . mysqli_connect_error() . "\n";
	  $message .= 'Whole query: ' . $query;
	  die( $message );
	}

	while ( $row = mysqli_fetch_assoc( $result ) ) {
		$labels[$chart][] = $row["Award"];
		$data[$chart][] = $row["No"];
	}
}

// Close the connection
mysqli_close($con);
?>
