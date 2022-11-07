<!-- Blog Sidebar Widgets Column -->
<div class="col-md-4">



    <!-- Login -->
    <div class="well">
        <h4>Login</h4>
        <form class="" action="includes/login.php" method="post">


        <div class="form-group">
            <input name="user_name" type="text" class="form-control" placeholder="Enter Username">

        </div>
        <div class="input-group">
            <input name="password" type="password" class="form-control" placeholder="Enter Password">
            <span class="input-group-btn">
              <button class="btn btn-primary" type="submit" name="login">Submit</button>

            </span>

        </div>
      </form> <!-- search form -->
        <!-- /.input-group -->
    </div>



    <!-- Blog Categories Well -->
    <div class="well">


      <?php
  $query = "SELECT * FROM categories";
  $select_categories_sidebar = mysqli_query($connection, $query);


       ?>



        <h4>Blog Categories</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                  <?php
                  while($row = mysqli_fetch_assoc($select_categories_sidebar)) {
                  $cat_title = $row['cat_title'];
                  $cat_id = $row['cat_id'];
                  echo "<li><a href='category.php?category=$cat_id'>{$cat_title}</a></li>";
}
                   ?>
                </ul>
            </div>
            <!-- /.col-lg-6 -->
            <!-- <div class="col-lg-6">
                <ul class="list-unstyled">
                    <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>
                </ul>
            </div> -->
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
    <?php include "includes/widget.php";?>

</div>
