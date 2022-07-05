<?php
require_once('logics/dbconnection.php');
$countrecords = mysqli_num_rows($sqlQuery)

//echo $fetchrecords['firstname'];
//echo $fetchrecords['lastname'];
while ($fetchrecords = mysqli_fetch_array($sqlQuery)) {
    # code...
    echo $fetchrecords['firstname'];
    echo $fetchrecords['lastname'];
    
}

?>