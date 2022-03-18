<?php
$db=new PDO("mysql:host=localhost;dbname=facebooks_db","root","");

function getItems()
{
    global $db;
    $statement = $db->prepare("SELECT post_id, content_post, image_name FROM posts order by post_id desc");
    $posts=$statement->execute();
    $posts = $statement->fetchAll();
    return $posts;
}

function createItem($content, $image)
{
    global $db;
    $statement=$db->prepare("INSERT INTO posts (content_post, image_name,user_id) values (:content_post,:image_name,3)");
    $statement->execute([
        'content_post'=> $content,
        'image_name'=> $image
    ]);
    return $statement->rowCount()==1;
};

function deletePost($id)
{
    global $db;
    $statement=$db->prepare("DELETE FROM posts WHERE  post_id=:post_id");
    $statement->execute([
        'post_id'=>$id
    ]);
    return ($statement->rowCount()==1); 
}
function updatePost($id, $content,$image)
{
    global $db;
    $statement=$db-> prepare("UPDATE posts set content_post=:content_post,image_name=:image_name where post_id=:post_id");
    $statement->execute([
        ':post_id'=>$id,
        ':content_post'=>$content,
        ':image_name'=>$image
    ]);
    $statement->fetchAll();
    return($statement->rowCount()==1);
}

function getItemById($id)
{
    global $db;
    $statement=$db->prepare("SELECT * from posts where post_id=:post_id  ;");
    $statement->execute([
        ':post_id'=>$id
    ]);
    return $statement->fetch();  
}