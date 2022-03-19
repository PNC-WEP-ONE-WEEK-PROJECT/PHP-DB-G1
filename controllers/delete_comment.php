<?php  require_once('../models/database.php');
$id=$_GET['comment_id'];
deleteComment($id);
header('location: ../index.php');   
?>