
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sign Up Page</title>
  </head>
  <body>
      <div class="container">
   <h1>Sign Up</h1>
 
   <form action="regisave.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputfullname">Full Name</label>
    <input type="text" name="fullname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter fullname" required="">
  </div>
     <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password"  name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="">
  </div>
     <div class="form-group col-md-4">
      <label for="inputState">Gender</label>
      <select id="inputState" name="gender" class="form-control" >
        <option selected>Choose...</option>
        <option value="Male" required="">Male</option>
        <option value="Female" required="">Female</option>
      </select>
    </div>
     <div class="form-group">
    <label for="exampleInputphoto">Profile Photo</label>
    <input type="file"  name="profile" class="" id=" " >
  </div>
     
       <button type="submit" name="submit" value="yes" class="btn btn-primary">Sign Up</button>
 </form><br><br>
   
</div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>