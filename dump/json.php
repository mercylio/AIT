<?php 
require_once('config.php'); 
require_once('functions.php'); 
mb_language("Uni");
mb_internal_encoding("utf-8");
mb_http_input("auto"); 
mb_http_output("utf-8"); 
$dbh = connectDb(); 
$sth = $dbh-> prepare("SELECT * FROM tablename");
//rewrite the tablename
$ Sth-> execute ();
$ UserData = array ();  
$ UserData = $ row = $ sth-> fetchAll (PDO :: FETCH_ASSOC);
// Output as json
Header ( 'Content-Type: Application / json' );
Appended to the front and back for reading with //Chart.js
Echo '{ "Ga":' , json_encode ($ userData, JSON_HEX_TAG | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES),'}';
?>

<?php
Request = Isset $($_SERVER ['HTTP_X_REQUESTED_WITH'?])strtolower($_SERVER['HTTP_X_REQUESTED_WITH' ]):'';
If (!$Request == 'Xmlhttprequest' ) Exit;
?>