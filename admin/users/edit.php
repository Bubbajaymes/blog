<?php 

  include("../../path.php");
  include(ROOT_PATH . "/app/controllers/users.php");

  adminOnly();

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
    
    <link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
        <!-- Custom Styling -->

    <link rel="stylesheet" href="../../assets/css/style.css">

            <!-- Admin Styling -->
        
            <link rel="stylesheet" href="../../assets/css/admin.css">
    
    <title>Admin Section - Edit User </title>
</head>
<body>

<!-- Admin header -->
<?php 
  include("../../app/includes/adminheader.php");
?>

    <!-- Admin Page Wrapper -->

    <div class="admin-wrapper">

        <!-- Left Sidebar -->

        <?php 
  include("../../app/includes/adminSidebar.php");
?>

        <!-- End of Left Sidebar -->

        <!-- Admin Content -->

        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add User</a>
                <a href="index.php" class="btn btn-big">Manage Users</a>
            </div>

            <div class="content">
                <h2 class="page-title">Edit User</h2>
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                <form action="edit.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div>
                        <label for="">Username</label>
                        <input type="text" name="username" value="<?php echo $username; ?>"  class="text-input">
                    </div>
                    <div>
                        <label for="">Email</label>
                        <input type="email" name="email" value="<?php echo $email; ?>"  class="text-input">
                    </div>
                    <div>
                        <label for="">Password
                        </label>
                        <input type="password" name="password" value="<?php echo $password; ?>"  class="text-input">
                    </div> 
                    <div>
                        <label for="">Password Confirmation</label>
                        <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>"  class="text-input">
                    </div>
                    <div>
                        <?php if(isset($admin) && $admin == 1): ?>
                            <label for="">
                                <input type="checkbox" name="admin" checked>
                                Admin
                            </label>                            
                        <?php else: ?>
                            <label for="">
                                <input type="checkbox" name="admin">
                                Admin
                            </label>                             
                        <?php endif; ?>

                        
                    </div>                      

                    <div>
                        <button type="submit" name="update-user" class="btn btn-big">Update User</button>
                    </div>

                </form>
            </div>

        </div>

        <!-- End of Admin Content -->

    </div>

    <!--End of  Page Wrapper -->

    <!-- JQuery -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <!-- Ckeditor 5 -->

    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

    <!-- Custom Script -->

    <script src="../../assets/js/scripts.js"></script>
</body>
</html>