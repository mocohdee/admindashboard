<?php
require_once('logics/dbconnection.php');
$sqlDeleteStudent= mysqli_query($conn, "DELETE FROM enrollment WHERE no='".$_GET['no']."' ");
if($sqlDeleteStudent)
{
    echo "User records deleted";
    header('location:students.php');
}
else
{
    echo "Error occured";
}


?>