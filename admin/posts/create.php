<?php
// include();

  include("../../path.php");
  include( ROOT_PATH . "/app/controllers/posts.php");

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
    
    <title>Admin Section - Add Post </title>
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
            include("../../app/includes/adminSidebar.php");
        ?>

        <!-- End of Left Sidebar -->

        <!-- Admin Content -->

        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Post</a>
                <a href="index.php" class="btn btn-big">Manage Posts</a>
            </div>

            <div class="content">
                <h2 class="page-title">Add Posts</h2>

                <?php 
                   include(ROOT_PATH . "/app/helpers/formErrors.php");
                ?>

                <form action="create.php" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="">Title</label>
                        <input type="text" name="title" value="<?php echo $title ?>" class="text-input"> 
                    </div>
                    <div>
                        <label for="">Body</label>
                        <textarea name="body" value="" id="body" ><?php echo $body ?></textarea>
                    </div>
                    <div>
                        <label for="image">
                            <input type="file" name="image" class="text-input">
                        </label>
                    </div>
                    <div>
                        <label for="">Topic</label>
                        <select name="topic_id" class="text-input">
                            <option value=""></option>

                            <?php foreach($topics as $key => $topic): ?>
                                <?php if(!empty($topic_id) && $topic_id == $topic['id']): ?>
                                    <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                                <?php else: ?>
                                    <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                                <?php endif; ?>
                                
                            <?php endforeach; ?>
                            
                        </select>
                    </div>
                    <div>
                        <?php if(empty($published)): ?> 
                            <label>
                                <input type="checkbox" name="published">
                                Publish 
                            </label>                            
                        <?php else: ?>
                            <label>
                                <input type="checkbox" name="published" checked>
                                Publish 
                            </label>                             
                        <?php endif; ?>

                    </div>
                    <div>
                        <button type="submit" name="add-post" class="btn btn-big">Add Post</button>
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