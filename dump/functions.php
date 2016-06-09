<?php
function connectDb(){ 
Try { 
Return  New  PDO(DSN, DB_USER, DB_PASSWORD);} 
Catch (PDOException $E) {Echo $E-> getMessage ();
        exit;
    }
}
?>