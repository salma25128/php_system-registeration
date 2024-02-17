<?php
 $servername = 'ns1.dns-parking.com';
 $dbUsername = 'count';
 $dbPassword = 'Count2024@162' ;
 $dbname = 'aaacount';


$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname );

if(!$conn){
    die("Connection Failed". mysqli_connect_error());
}

?>