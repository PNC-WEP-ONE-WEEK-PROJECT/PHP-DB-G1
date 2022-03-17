
<?php
require_once("../models/database.php");
$image=$_FILES['image']['name'];
$content=$_POST['content'];
$posts=getItems();
createItem($content, $image);
header('location: /index.php');

?>


