
<?php
   if(isset($_POST['create_user'])) {

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




    move_uploaded_file($user_image_temp, "../images/$user_image" );

    $query = "INSERT INTO users(user_firstname, user_lastname, user_role, user_name, user_email, user_password) ";

    $query .= "VALUES('{$user_firstname}','{$user_lastname}','{$user_role}','{$user_name}','{$user_email}', '{$user_password}') ";

    $create_user_query = mysqli_query($connection, $query);

    confirm($create_user_query);

   }
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
          <input type="text" class="form-control" name="user_firstname">
      </div>

      <div class="form-group">
         <label for="title">Lastname</label>
          <input type="text" class="form-control" name="user_lastname">
      </div>

      <div class="form-group">
        <label for="title">User Role</label>
        <select class="form-control" name="user_role">
          <option value="subscriber">Select Options</option>
          <option value="admin">Admin</option>
          <option value="subscriber">Subscriber</option>

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
    <input type="text" class="form-control" name="user_name">
</div>


<div class="form-group">
   <label for="title">Email</label>
    <input type="email" class="form-control" name="user_email">
</div>

<div class="form-group">
   <label for="title">Password</label>
    <input type="password" class="form-control" name="user_password">
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" name="create_user" value="Add User">
</div>


</form>
