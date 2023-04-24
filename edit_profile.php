
<?php
include('Connection.php');
session_start();
$user = $_SESSION['user'];
$query = "SELECT * FROM users WHERE name = '" . $user . "'";
$resultq = mysqli_query($conn, $query);
$result = mysqli_fetch_all($resultq, MYSQLI_ASSOC);

if (isset($_POST['update'])) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "UPDATE users SET name = '" . $username ."', email = '" . $email ."' , password = '". $password ."' WHERE name = '" . $user."'";
    mysqli_query($conn,$query);
    header('location: login.php');

}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>
<body >
   <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand text-white" href="home.php">Go back</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
   
            </div>
        </div>
    </nav>
  <h3 class = "text-center">
    Edit Your Profile!
  </h3>
      <section id="contact">
    <div class="container-lg">

     
      <div class="row justify-content-center my-5">
        <div class="col-lg-6">

          <form method="POST">
            <label for="email" class="form-label">Username:</label>
            <div class="input-group mb-4">
              <span class="input-group-text">
                <i class="bi bi-person-fill"></i>
              </span>
              <input type="text" id="email" name="name" class="form-control" placeholder="Enter your new name" />
            </div>
            <label for="name" class="form-label">Email:</label>
            <div class="mb-4 input-group">
              <span class="input-group-text">
                <i class="bi bi-envelope-fill text-secondary"></i>
              </span>
              <input type="text" id="name" name="email" class="form-control" placeholder="Enter your new email address" />
            </div>
            <label for="name" class="form-label">Password:</label>
            <div class="mb-4 input-group">
              <span class="input-group-text">
                <i class="bi bi-lock"></i> </span>
              </span>
              <input type="password" id="name" name="password" class="form-control" placeholder = "Enter your new password" />
            </div>
            <div class="mb-4 text-center">
              <button class = "btn btn-success"name="update" value="Register" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Update</button>
            </div>
          </form>
 

        </div>
      </div>
    </div>
  </section>
  <?php include('footer.php'); ?>

</body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>