<?php 

  include("path.php");
//   include(ROOT_PATH . "/app/database/db.php");
// include("./app/database/db.php");

  include(ROOT_PATH . '/app/controllers/topics.php');

  $posts = array();
  $postsTitle = 'Recent Post';
  
//   dd($posts);

if (isset($_GET['t_id'])) {
    $posts = getPostsByTopicId($_GET['t_id']);
    $postsTitle = "You searched for posts under " . "'" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
    $postsTitle = "You searched for " . "'" . $_POST['search-term'] . "'";
    $posts = searchPosts($_POST['search-term']);
    // dd($_POST);
} else {
  $posts = getPublishedPosts();  
}


  
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
    
    <title>Blog</title>
</head>
<body>

<?php 
  include(ROOT_PATH . "/app/includes/header.php");
//   include("./app/includes/header.php");
?>

<?php 
  include(ROOT_PATH . "/app/includes/messeges.php");
    // include("./app/includes/messeges.php");
?>



    <!-- Page Wrapper -->

    <div class="page-wrapper">

        <!-- Post Slider -->
        
        <div class="post-slider">

            <h1 class="slider-title">Trending Topics</h1>
            <i class="fa fa-chevron-left prev"></i>
            <i class="fa fa-chevron-right next"></i>

            <div class="post-wrapper">

                <?php foreach($posts as $post): ?>
                    <div class="post">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="slider-image">
                        <div class="post-info">
                            <h4><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title'] ?></a></h4>
                            <i class="fa fa-user"><?php echo $post['username']; ?></i>
                            &nbsp;
                            <i class="fa fa-calendar"><?php echo date('F l, Y', strtotime($post['created_at']));  ?></i>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

        </div>
        <!-- End of Post Slider -->

        <!-- Content  -->

        <div class="content clearfix">

            <!-- Main Content -->

            <div class="main-content">
                <h1 class="recent-post-title"><?php echo $postsTitle; ?></h1>

                <?php foreach($posts as $post): ?>
                    <div class="post clearfix">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-image">
                        <div class="post-preview">
                            <h2><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title'] ?></a></h1>
                            <i class="fa fa-user"><?php echo $post['username']; ?></i>
                            &nbsp;
                            <i class="fa fa-calendar"><?php echo date('F l, Y', strtotime($post['created_at']));  ?></i>
                            <p class="preview-text">
                                <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
                            </p>
                            <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Read More</a>
                        </div>
                    </div>
                <?php endforeach; ?>


            </div>
            <!-- End od Main Content -->

            <div class="sidebar">

                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.php" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>

                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <?php foreach($topics as $key => $topic): ?>
                            <li>
                                <a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>"><?php echo $topic['name']; ?></a>
                            </li>
                        <?php endforeach; ?>
                        

                    </ul>
                </div>
            </div>

        </div>
        <!-- End of Content -->

    </div>

    <!--End of  Page Wrapper -->

    <!-- Footer -->

    <?php 
       include(ROOT_PATH . "/app/includes/footer.php");
    //    include("./app/includes/footer.php");
    ?>

    <!-- End of Footer -->

    <!-- JQuery -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <!-- Slick Carousel link -->

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Custom Script -->

    <script src="assets/js/scripts.js"></script>
</body>
</html>