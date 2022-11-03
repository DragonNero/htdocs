
<?php
   if(isset($_POST['create_post'])) {

    $post_title        = $_POST['title'];
    $post_author       = $_POST['post_author'];
    $post_category_id  = $_POST['post_category'];
    $post_status       = $_POST['post_status'];

    $post_image        = $_FILES['image']['name'];
    $post_image_temp   = $_FILES['image']['tmp_name'];


    $post_tags  = $_POST['post_tags'];
    $content    = $_POST['content'];
    $post_date  = date('d-m-y');




    move_uploaded_file($post_image_temp, "../images/$post_image" );

    $query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image, content, post_tags, post_status) ";

    $query .= "VALUES({$post_category_id},'{$post_title}','{$post_author}',now(),'{$post_image}','{$content}','{$post_tags}', '{$post_status}') ";

    $create_post_query = mysqli_query($connection, $query);

    confirm($create_post_query);

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
          <select class="" name="user_role">

       <label for="post_category">Post Category id</label>
       <input type="text" class="form-control" name="post_category">

      <?php

        $query = "SELECT * FROM users ";
        $select_users = mysqli_query($connection,$query);

        confirm($select_users);


        while($row = mysqli_fetch_assoc($select_users )) {
        $user_id = $row['user_id'];
        $user_role = $row['user_role'];


            echo "<option value='$user_id'>{$user_role}</option>";


        }

      ?>


       </select>

      </div>




<?php

        // $users_query = "SELECT * FROM users";
        // $select_users = mysqli_query($connection,$users_query);
        //
        // // confirmQuery($select_users);
        //
        //
        // while($row = mysqli_fetch_assoc($select_users)) {
        // $user_id = $row['user_id'];
        // $username = $row['username'];
        //
        //
        //     echo "<option value='{$username}'>{$username}</option>";
        //
        //
        // }

?>




<div class="form-group">
   <label for="title">Username</label>
    <input type="text" class="form-control" name="user_name">
</div>


<div class="form-group">
   <label for="title">Email</label>
    <input type="email" class="form-control" name="user_email">
</div>

<div class="form-group">
   <label for="title">Password</label>
    <input type="email" class="form-control" name="user_password">
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" name="create_user" value="Add User">
</div>


</form>
