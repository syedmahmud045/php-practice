<?php 
include ('config.php');

$id = $_GET['id'];
$query = "SELECT * FROM registration where id='$id'";
$result = mysqli_query($conn, $query);
$singleUser = mysqli_fetch_assoc($result);

// echo "<Pre>";
// print_r($singleUser);
// die;

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>user list</h2>
  <a href="userlistforeach.php">BACK List</a>          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Full name</th>
        <td><?php echo $singleUser["fullname"]?></td>
      </tr>
      <tr>
        <th>email</th>
        <td><?php echo $singleUser["email"]?></td>
      </tr>
      <tr>
        <th>gender</th>
        <td><?php echo $singleUser["gender"]?></td>
      </tr>
      <tr>
        <th>password</th>
        <td><?php echo $singleUser["password"]?></td>
      </tr>
     
    </thead>
   
  </table>
</div>

</body>
</html>
