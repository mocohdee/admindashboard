<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "web2";

$conn = mysqli_connect($server,$username,$password,$database);

$sqlQuery = mysqli_query($conn, "SELECT *FROM contactus");
$countrecords = mysqli_num_rows($sqlQuery)

//echo $fetchrecords['firstname'];
//echo $fetchrecords['lastname'];
while ($fetchrecords = mysqli_fetch_array($sqlQuery)) {
    # code...
    echo $fetchrecords['firstname'];
    echo $fetchrecords['lastname'];
    
}

?>