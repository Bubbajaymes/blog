<?php 
  include("../../path.php");
//   include(ROOT_PATH . "./app/controllers/topics.php");
include( "../../app/controllers/topics.php");

 
//  include("../../app/database/db.php");

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
    
    <title>Admin Section - Add Topic </title>
</head>
<body>
<!-- Admin header  -->
<?php 

   include("../../app/includes/adminheader.php");
?>

    <!-- Admin Page Wrapper -->

    <div class="admin-wrapper">

        <!-- Left Sidebar -->
<?php 

include("../../app/includes/adminSidebar.php");
?>


        <!-- Admin Content -->

        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Topic</a>
                <a href="index.php" class="btn btn-big">Manage Topics</a>
            </div>

            <div class="content">
                <h2 class="page-title">Add Topic</h2>
                <?php 
                    include(ROOT_PATH . "/app/helpers/formErrors.php");
                ?>

                <form action="create.php" method="post" >
                    <div>
                        <label for="">Name</label>
                        <input type="text" name="name" value="<?php echo $name ?>" class="text-input"> 
                    </div>
                    <div>
                        <label for="">Description</label>
                        <textarea name="description" value="<?php echo $description ?>" id="body" ></textarea>
                    </div>

                    <div>
                        <button type="submit" name="add-topic"  class="btn btn-big">Add Topic</button>
                    </div>

                </form>
            </div>

        </div>

        <!-- End of Admin Content -->

    </div>

    <?php 
    //  if (isset($_POST['add_topic'])) {
    //     dd($_POST);
    //  }
    ?>

    <!--End of  Page Wrapper -->

    <!-- JQuery -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <!-- Ckeditor 5 -->

    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

    <!-- Custom Script -->

    <script src="../../assets/js/scripts.js"></script>
</body>
</html>