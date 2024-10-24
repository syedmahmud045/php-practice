<?php 
include ('config.php');

$query = "SELECT * FROM registration";
$registrationList = mysqli_query($conn, $query);


/*





  if (mysqli_num_rows($result) > 0) {
    // Fetch all rows as an associative array
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    // Use for loop to iterate over the array by index
    for($i = 0; $i < count($rows); $i++) {
      echo "id: " . $rows[$i]["id"]. " - Name: " . $rows[$i]["firstname"]. " " . $rows[$i]["lastname"]. "<br>";
    }
  }


*/





?>




<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Login Page</title>
    </head>
    <body>
        <div class="container">
            <h1>WellCome User ! </h1>
            <a href="registration.php" ><button type="button" class="btn btn-primary">Add Registraion</button></a>
            <a href="post_list.php" ><button type="button" class="btn btn-success">List Post</button></a>
            <a href="logout.php" ><button type="button" class="btn btn-secondary">Logout</button></a><br><br>
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">User Name</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Registration Date</th>
                       
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>


                     <?php 
                     
                     
                     while ($row = mysqli_fetch_assoc($registrationList)) { 
                        
                        
                        
                        ?>
                     <tr>
                            <th scope="row"><?php echo $row['id']; ?></th>
                            <td><?php echo $row['fullname']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                             <td><?php echo $row['date']; ?></td>
                           
                           <td>
                               <a href="post_details.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-primary">Details</button></a>
                               <a href="edit_post.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                <a href="delete_post.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure!')"><button type="button" class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr> 
                    <?php } ?>

                </tbody>
            </table>


            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>