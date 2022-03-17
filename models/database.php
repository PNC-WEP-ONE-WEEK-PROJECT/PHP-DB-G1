<?php
/**
 * Your code here 
  */
  // function upload($image,$text){
  if(isset($_POST['upload'])){
    // the path to store the uploaded image
    $target="images/".basename($_FILES['image']['name']);

    // connect to the database
    $db=mysqli_connect('localhost','root','','facebooks_db');

    // get all the sumbitted data from form
    $image=$_FILES['image']['name'];
    $text=$_POST['content'];
  
    $sql = "INSERT INTO users (first_name, last_name) VALUES ('$image', '$text')";
  	// execute query
  	mysqli_query($db, $sql);

    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        $msg='image uploaded successfully';
    }else{
        $msg='There was a problem upoading image';
    };
};
  // };