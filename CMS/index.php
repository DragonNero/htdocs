<?php include "includes/db.php";?>
<?php include "includes/header.php";?>

<body>

<?php  include "includes/navigation.php";?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
            <?php
            $query = "SELECT * FROM posts";
            if (isset($_POST['search']))  {
              $search = $_POST['search'];
              $query .= " WHERE post_tags LIKE '%$search%' ";
            }
            $select_all_posts = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($select_all_posts)) {
              $post_id = $row['post_id'];
              $post_title = $row['post_title'];
              $post_author = $row['post_author'];
              $post_date = $row['post_date'];
              $post_image = $row['post_image'];
              $content = substr($row['content'], 0,100);
              $post_tags = $row['post_tags'];
              $post_comment_count = $row['post_comment_count'];
            ?>
            <h1 class="page-header">
                Page Heading
                <small>Secondary Text</small>
            </h1>

            <!-- First Blog Post -->
            <h2>
                <a href="post.php?p_id=<?= $post_id; ?>"> <?php echo $post_title; ?></a>
            </h2>
            <p class="lead">
                by <a href="index.php"><?php echo $post_author ?></a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
            <hr>
            <a href="post.php?p_id=<?php echo $post_id;  ?>">
                <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="">
            <hr>
            <p><?php echo $content ?></p>
            <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

            <hr>
            <?php
            }

             ?>

            </div>
<?php include "includes/sidebar.php";?>


        </div>
        <!-- /.row -->

        <hr>
<?php include "includes/footer.php";?>
