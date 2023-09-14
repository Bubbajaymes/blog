<?php 
  include("path.php");
  include(ROOT_PATH . "/app/controllers/posts.php");

  if (isset($_GET['id'])) {
    $post = selectOne('posts', ['id' => $_GET['id']]);
    //  
  }

  $topics = selectAll('topics');
  $posts = selectAll('posts', ['published' => 1] );
  
  
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
    
    <title><?php echo $post['title']; ?> | Hope In Hell</title>
</head>
<body>

    <!-- Facebook Page Plugin SDK -->

    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v17.0" nonce="wMXg8Dtc"></script>

<?php 
  include(ROOT_PATH . "/app/includes/header.php");
?>

    <!-- Page Wrapper -->

    <div class="page-wrapper">

        <!-- Content  -->

        <div class="content clearfix">

            <!-- Main Content Wrapper-->

            <div class="main-content-wrapper">

                <div class="main-content single">
                    <h1 class="post-title"><?php echo $post['title']; ?></h1>

                    <div class="post-content">
                        <?php echo html_entity_decode($post['body']); ?>
         
                    </div>
                </div>
            </div>
            <!-- End od Main Content -->

            <!-- Sidebar -->

            <div class="sidebar single">

                <div class="fb-page" data-href="https://www.facebook.com/bubbaThoughts" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/bubbaThoughts" class="fb-xfbml-parse-ignore">
                    <a href="https://www.facebook.com/bubbaThoughts">Bubba</a></blockquote>
                </div>

                <div class="section popular">
                    <h2 class="section-title">Popular</h2>

                    <?php foreach($posts as $post    ): ?>
                        <div class="post clearfix">
                            <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-image" alt="">
                            <a href="" class="title"><h4><?php echo $post['title'] ?></h4></a>
                        </div>                    
                    <?php endforeach; ?>

                </div>

                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <?php foreach($topics as $topic): ?>
                            <li>
                            <a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']; ?>"><?php echo $topic['name']; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <!-- End of Sidebar -->

        </div>
        <!-- End of Content -->

    </div>

    <!--End of  Page Wrapper -->

    <!-- Footer -->

    <?php 
       include(ROOT_PATH . "/app/includes/footer.php");
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