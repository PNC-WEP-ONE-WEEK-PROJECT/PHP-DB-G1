<?php
/**
 * Your code here 
 */
if(isset($_POST['upload'])){

  $target="uploads/".basename($_FILES['image']['name']);

  $db=mysqli_connect('localhost','root','','facebooks_db');

    // connect to the database

    // get all the sumbitted data from form
    $image=$_FILES['image']['name'];
    $text=$_POST['content'];
  
    $sql = "INSERT INTO posts(content_post, image_name,user_id) VALUES ( '$text','$image','2')";
  	// execute query
  	mysqli_query($db, $sql);


}


