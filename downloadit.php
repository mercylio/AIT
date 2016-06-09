<?php
include 'session_handler.php';

function downloadItem($table){
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "password";
  $dbname = "HONOURS";

  // output headers so that the file is downloaded rather than displayed
  header('Content-Type: text/csv; charset=utf-8');
  header('Content-Disposition: attachment; filename='.$table.'.csv');
  // create a file pointer connected to the output stream
  $output = fopen('php://output', 'w');

  // output the column headings
  fputcsv($output, array('ID', 'List', 'Year', 'Order', 'Level', 'Award', 'Name', 'Citation','County'));


  $conn = mysql_connect($dbhost, $dbuser, $dbpass);
  if (!$conn) {
  die('Could not connect: ' . mysql_error());
  }
  if (!mysql_select_db($dbname))
  die("Can't select database");

  $select = "SELECT `ID`, `List`, `Year`, `Order`, `Level`, `Award`, `Name`, `Citation`, `County` FROM `".$table."`";

  // fetch the data
  $rows = mysql_query($select,$conn);
  // loop over the rows, outputting them
  while ($row = mysql_fetch_assoc($rows)){
  	fputcsv($output, $row);
  }
	return $output;
}


if ($_SESSION["login"] == 1){

	if(isset($_GET["id"])){
		downloadItem($_GET["id"]);
	}

	if(isset($_GET["remove"])){
		$key = array_search($_GET["remove"], $_SESSION["shopping_cart"]);
		unset($_SESSION["shopping_cart"][$key]);
		header("Location: download.php?action=removedId=".$_GET["remove"]);
	}

	if(isset($_GET["removeAll"])){
		unset($_SESSION["shopping_cart"]);
		$_SESSION["shopping_cart"] = array();
		header("Location: datasets.php?action=removedAll");

	}
	
}
else
{
	header("Location: download.php");
}
?>