<?php

function insert_categoties()
{
  global $connection;
  if (isset($_POST["submit"])) {
    $catTitle = $_POST["cat_title"];

    if ($catTitle == "" || empty($catTitle)) {
      echo "This field should not be empty";
    } else {
      $query = "INSERT INTO categories(cat_title) ";
      $query .= "VALUE('{$catTitle}')";
      $createCategoryQuery = mysqli_query($connection, $query);
      if (!$createCategoryQuery) {
        die('Query failed' . mysqli_error($connection));
      }
    }
  }
}


function findAllCategories()
{
  global $connection;
  $query = "SELECT * FROM categories";
  $select_categories = mysqli_query($connection, $query);

     while ($row = mysqli_fetch_assoc($select_categories)) {
       $cat_id = $row['cat_id'];
       $cat_title = $row['cat_title'];
       echo "<tr>";
       echo "<td>{$cat_id}</td>";
       echo "<td>{$cat_title}</td>";
       echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
       echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
       echo "</tr>";
  }

}


function deleteCategory()
{
  global $connection;
  if (isset($_GET['delete'])) {
    $the_cat_id = $_GET['delete'];
    $query = "DELETE FROM categories WHERE cat_id={$the_cat_id}";
    $delete_query = mysqli_query($connection, $query);
    header("Location: categories.php");
  }
}
 ?>
