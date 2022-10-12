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
              if(isset($_POST['submit'])){

              echo $search = $_POST['search'];

              $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' ";
              $search_query = mysqli_query($connection, $query);

              if(!$search_query) {
                die("QUERY FAILED" . mysqli_error($connection));
              }
              $count = mysqli_num_rows($search_query);

              if($count == 0) {

                echo "<h1>No result</h1>";
              } else {
                echo "SOME RESULT";
              }

              }

          ?>

<?php include "includes/footer.php";?>
