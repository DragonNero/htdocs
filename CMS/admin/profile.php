<?php include "includes/admin_header.php"; ?>
<?php


  if(isset($_SESSION['user_name'])) {
  $username =  $_SESSION['user_name'];

  $query = "SELECT * FROM users WHERE user_name = '$username' ";
  $select_user_profile = mysqli_query($connection, $query);

  while($row = mysqli_fetch_array($select_user_profile)) {
    $user_id            = $row['user_id'];
    $user_name          = $row['user_name'];
    $user_password      = $row['user_password'];
    $user_firstname     = $row['user_firstname'];
    $user_lastname      = $row['user_lastname'];
    $user_email         = $row['user_email'];
    $user_image         = $row['user_image'];
    $user_role          = $row['user_role'];
  }
}









// $_SESSION['user_name'] = $db_username;
// $_SESSION['user_firstname'] = $db_firstname;
// $_SESSION['user_lastname'] = $db_lastname;
// $_SESSION['user_role'] = $db_role;


 ?>


<?php
if(isset($_POST['update_user'])) {

 $user_firstname       = $_POST['user_firstname'];
 $user_lastname  = $_POST['user_lastname'];
 $user_role       = $_POST['user_role'];

 // $user_image        = $_FILES['user_image']['name'];
 // $user_image_temp   = $_FILES['user_image']['tmp_name'];
 //

 $user_name  = $_POST['user_name'];
 $user_email    = $_POST['user_email'];
 $user_password    = $_POST['user_password'];
 // $post_date  = date('d-m-y');





 $query = "UPDATE users
           SET user_firstname = '$user_firstname',
               user_lastname = '$user_lastname',
               user_role = '$user_role',
               user_name = '$user_name',
               user_email = '$user_email',
               user_password = '$user_password'
           WHERE user_name = '$user_name' ";


 $edit_user_query = mysqli_query($connection, $query);



}
 ?>





<div id="wrapper">
  <div id="page-wrapper">

    <?php include "includes/admin_navigation.php"; ?>

    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">
              Welcome to admin
              <small>Author</small>
          </h1>






        </div>

      </div>   <!-- /.row -->
    </div><!-- /.container-fluid -->
    <form action="" method="post" enctype="multipart/form-data">


      <div class="form-group">
         <label for="title">Firstname</label>
          <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="user_firstname">
      </div>

      <div class="form-group">
         <label for="title">Lastname</label>
          <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="user_lastname">
      </div>

      <div class="form-group">
        <label for="title">User Role</label>
        <select class="form-control" name="user_role">
          <option value="subscriber"><?php echo $user_role;?></option>
          <?php
          if ($user_role == 'admin' ) {
            echo "<option value='subscriber'> subscriber</option>";
          } else {
            echo "<option value='admin'> admin</option>";
          }
           ?>

        </select>

      </div>






<div class="form-group">
   <label for="title">user_name</label>
    <input type="text" value="<?php echo $user_name; ?>" class="form-control" name="user_name">
</div>


<div class="form-group">
   <label for="title">Email</label>
    <input type="email" value="<?php echo $user_email; ?>" class="form-control" name="user_email">
</div>

<div class="form-group">
   <label for="title">Password</label>
    <input type="password" value="<?php echo $user_password; ?>" class="form-control" name="user_password">
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" name="update_user" value="Update Profile">
</div>


</form>





  </div>
</div>
<?php include "includes/admin_footer.php";?>
