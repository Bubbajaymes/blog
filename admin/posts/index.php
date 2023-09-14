<?php 

  include("../../path.php");
  include( "../../app/controllers/posts.php");

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
    
    <title>Admin Section - Manage Posts </title>
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
                <a href="create.php" class="btn btn-big">Add Post</a>
                <a href="index.php" class="btn btn-big">Manage Posts</a>
            </div>

            <div class="content">
                <h2 class="page-title">Manage Posts</h2>

                <?php 
                   include("../../app/includes/messeges.php");
                ?>
                <table>
                    <thead>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach($posts as $key => $post): ?>
                            <tr>
                             <td><?php echo $key + 1; ?></td>
                             <td><?php echo $post['title']  ?></td>
                             <td>Bubba</td>
                             <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">edit</a></td>
                             <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete">delete</a></td>
                             <?php if ($post['published']): ?>
                                <td><a href="edit.php?published=0&p_id=<?php echo $post['id'] ?>" class="unpublish">Unpublish</a></td>
                             <?php else: ?>
                                <td><a href="edit.php?published=1&p_id=<?php echo $post['id'] ?>" class="publish">Publish</a></td>
                             <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>
                        <!-- <tr>
                            <td>2</td>
                            <td>This is the second post</td>
                            <td>Jaymes</td>
                            <td><a href="" class="edit">edit</a></td>
                            <td><a href="" class="delete">delete</a></td>
                            <td><a href="" class="publish">publish</a></td>
                        </tr> -->
                    </tbody>
                </table>
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