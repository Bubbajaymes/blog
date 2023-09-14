<?php
// include();

  include("../path.php");
//   include(ROOT_PATH . "/app/helpers/middlewire.php");

//   adminOnly();
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
    
    <title>Admin Section - Dashboard </title>
</head>
<body>

<!-- Admin header -->
<?php 
  include( ROOT_PATH . "/app/includes/adminheader.php");
?>

    <!-- Admin Page Wrapper -->

    <div class="admin-wrapper">

        <!-- Left Sidebar -->

        <?php 
            include("../app/includes/adminSidebar.php");
        ?>

        <!-- End of Left Sidebar -->

        <!-- Admin Content -->

        <div class="admin-content">


            <div class="content">
                <h2 class="page-title">Dashboard</h2>

                <?php 
                   include("../app/includes/messeges.php");
                ?>

 
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

    <script src="../assets/js/scripts.js"></script>
</body>
</html>