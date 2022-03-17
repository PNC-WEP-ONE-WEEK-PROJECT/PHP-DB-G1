
<?php
require_once("../models/database.php");
// $image=$_FILES['image']['name'];
// $content=$_POST['content'];
if(isset($_POST['upload'])){
    // the path to store the uploaded image
    $target="../images/".basename($_FILES['image']['name']);
    // get all the sumbitted data from form
    $image=$_FILES['image']['name'];
    $content=$_POST['content'];
    $userID=2;
    createItem($content, $image);
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {
        // echo  '<img src="../images/'.$image. '" alt="">';
        $msg="Succesfull";
    }
    header("location:/index.php");
};





?>


