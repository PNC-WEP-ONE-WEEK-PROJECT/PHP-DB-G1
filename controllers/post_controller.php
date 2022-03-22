
<?php
require_once("../models/database.php");
if(isset($_POST['upload'])){
    $target="../images/".basename($_FILES['image']['name']);
    $image=$_FILES['image']['name'];
    $content=$_POST['content'];
    $userID=2;
    createItem($content, $image);
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {
        $msg="Succesfull";
    }
    header("location:../views/post_view.php");
};


?>


