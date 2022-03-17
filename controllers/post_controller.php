
<?php
require_once("../models/database.php");
$image=$_FILES['image']['name'];
$content=$_POST['content'];
$posts=getItems();
foreach ($posts as $post){
    $post['content_post'];
};
createItem($content, $image);
header('location: /index.php');

?>


