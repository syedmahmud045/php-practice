<?php
include ('config.php');


// echo "<pre>";
// print_r($_POST);
// print_r($_FILES);

// die;


if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $email= $_POST['email'];
    $pass= $_POST['password'];
    $gender= $_POST['gender'];
    $date= date("Y-m-d");
//$attphoto= $_POST['attphoto'];

//INSERT INTO table_name VALUES (value1, value2, value3, );
 
$insertQuery  = "INSERT INTO registration(fullname,email,password,gender,date) VALUES('$fullname','$email','$pass','$gender','$date')"; 


$insert = mysqli_query($conn, $insertQuery);


if($insert){
   //$_SESSION['success']=1;
    header("Location: userlistforeach.php");
} else {
    die("something is wrong!");
    header("Location: register.php");
}


}
?>