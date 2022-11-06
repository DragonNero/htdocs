
<?php
 if (isset($_GET['edit_user'])) {
  $the_user_id = $_GET['edit_user'];

  $query = "SELECT * FROM users WHERE user_id = $the_user_id  ";

  $select_users_query = mysqli_query($connection,$query);
//    $select_comments=  mysqli_query($connection,$query);

  while($row = mysqli_fetch_assoc($select_users_query)) {
      $user_id            = $row['user_id'];
      $user_name          = $row['user_name'];
      $user_password      = $row['user_password'];
      $user_firstname     = $row['user_firstname'];
      $user_lastname      = $row['user_lastname'];
      $user_email         = $row['user_email'];
      $user_image         = $row['user_image'];
      $user_role          = $row['user_role'];


}





   if(isset($_POST['edit_user'])) {

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
              WHERE user_id = $the_user_id ";

    
    $edit_user_query = mysqli_query($connection, $query);



   }}
   //
   //
   //
   //    // confirmQuery($create_post_query);
   //
   //    $the_post_id = mysqli_insert_id($connection);
   //
   //
   //    echo "<p class='bg-success'>Post Created. <a href='../post.php?p_id={$the_post_id}'>View Post </a> or <a href='posts.php'>Edit More Posts</a></p>";
   //
   //
   //
   // }




?>

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

      <!-- <div class="form-group">
           <label for="post_image">Post Image</label>
            <input type="file"  name="user_image">
      </div> -->









<?php

        // $users_query = "SELECT * FROM users";
        // $select_users = mysqli_query($connection,$users_query);
        //
        // // confirmQuery($select_users);
        //
        //
        // while($row = mysqli_fetch_assoc($select_users)) {
        // $user_id = $row['user_id'];
        // $user_name = $row['user_name'];
        //
        //
        //     echo "<option value='{$user_name}'>{$user_name}</option>";
        //
        //
        // }

?>




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
    <input class="btn btn-primary" type="submit" name="edit_user" value="Edit User">
</div>


</form>
