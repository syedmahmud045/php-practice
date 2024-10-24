<?php
include ('config.php');

$id= $_GET['userid'];

$query = "DELETE FROM registration WHERE id= $id";
if(mysqli_query($conn, $query)){
    header("Location: userlistforeach.php");
} else {
    echo 'Not Deleted. something is wrong';    
}

?>