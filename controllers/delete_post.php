<?php
require_once('../models/database.php');
$id=$_GET['post_id'];
deletePost($id);
header('location: /index.php');

