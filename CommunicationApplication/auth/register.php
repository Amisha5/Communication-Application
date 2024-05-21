<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div style="float:right;padding:30px;">
<button type="button" class="btn btn-primary">
    <a href ='../auth/welcome.php' style="color:white;text-decoration: none;">Home</a></button>
</div>
    <div class="container" style="position:absolute;top:10%;">
        <div class="row">
            <div class="col-md-6 offset-md-3">
            <h2>Registration Form</h2>
                <form method="post" action="registerSuccess.php">
                    <div class="form-group">
                        <label for="fullname">Full Name:</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password </label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password </label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Enter your Password to confirm" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <?php
                    if(isset($_POST["password"]) && isset($_POST["confirmPassword"]))
                    {
                        $password = $_POST["password"];
                        $confirmPassword = $_POST["confirmPassword"];
                        if($password != $confirmPassword)
                        {
                            echo "Paswords do not match"; 
                        }
                    }
                    ?>
            </div>
        </div>
    </div>
     <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    function passwordIncorrect() {
      // Perform delete operation here, for example:
      alert("Password is Incorrect!"); // Replace with your actual delete operation
    }
  </script>

</body>
</html>
