<?php 
  include("path.php");
?>

<?php
  include(ROOT_PATH . "/app/controllers/users.php"); 
  guestsOnly();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Google fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Candal&family=Kanit:ital,wght@1,900&family=Lora&family=Poppins:wght@300&display=swap" rel="stylesheet">
    
    
    <!-- font awesome -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="assets/css/style.css">
    
    <title>Login</title>
</head>
<body>

<?php 
  include(ROOT_PATH . "/app/includes/header.php");
?>

    <div class="auth-content">
        <form action="login.php" method="post">
            <h2 class="form-title">Login</h2>

            <?php 
              include(ROOT_PATH . "/app/helpers/formErrors.php");
            ?>            

            <div>
                <label for="">Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>"  class="text-input">
            </div>
            <div>
                <label for="">Password
                </label>
                <input type="password" name="password" value="<?php echo $password; ?>"  class="text-input">
            </div> 
            <div>
                <button type="submit" name="login-btn" class="btn btn-big">Login</button>
            </div>
            <p>Or <a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></p>

        </form>
    </div>

    <!-- JQuery -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    
    <!-- Custom Script -->

    <script src="assets/js/scripts.js"></script>
</body>
</html>