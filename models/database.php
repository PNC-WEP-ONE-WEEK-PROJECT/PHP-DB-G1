<?php
$db=new PDO("mysql:host=localhost;dbname=facebooks_db","root","");

function getItems()
{
    global $db;
    $statement = $db->prepare("SELECT post_id, content_post, image_name, date_post FROM posts order by post_id desc");
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


function AddComments($comment,$pid){
    global $db;
    $statment=$db->prepare("INSERT INTO comments(content,user_id,post_id) VALUES (:content,2,:postID)");
    $statment->execute([
        ":content"=>$comment,
        ":postID"=>$pid
    ]);
};

function getContentCm($idPost){
    global $db;
    $statement=$db->prepare('SELECT * FROM comments WHERE post_id=:post_id;');
    $statement->execute([
        ':post_id'=>$idPost
    ]);
    return $statement->fetchAll();
};

function deleteComment($id)
{
    global $db;
    $statement=$db->prepare("DELETE FROM comments where comment_id=:comment_id");
    $statement->execute([
        ':comment_id'=>$id
    ]);
    $statement->rowCount()==1;
    return $statement;
}

function createNewItem($first_name,$last_name,$email,$passwords,$date_of_birth,$gender)
{
    global $db;
    $statement=$db->prepare("INSERT INTO users (first_name,last_name,email,passwords,date_of_birth,gender) values (:first_name,:last_name,:email,:passwords,:date_of_birth,:gender)");
    $statement->execute([
        ':first_name'=> $first_name,
        ':last_name'=> $last_name,
        ':email'=> $email,
        ':passwords'=>$passwords,
        ':date_of_birth'=> $date_of_birth,
        ':gender'=>$gender
    ]);
    return $statement->rowCount()==1;
};

function login($email,$password){
    global $db;
    $statement=$db->prepare("SELECT email,passwords FROM users Where email=:email,passwords=:passwords");
    $statement->execute([
        ':email'=>$email,
        ':passwords'=>$password
    ]);
    return $statement->fetch();  
}




function validate_firstName($firstName)
{
    $check_name=false;
    if (ctype_alnum($firstName)){
        $check_name=true;
    }
    return $check_name;  
}
function validate_lastName($lastName)
{
    $check_name=false;
    if (ctype_alnum($lastName)){
        $check_name=true;
    }
    return $check_name;  
}

function validate_email($email)
{
    // function to check if email is correct (must contain '@')
    $check_email = false;
    for ($index = 0; $index < strlen($email) ; $index++){
        if ($email[$index] == "@"){
            $check_email = true;
        }
    }
    return $check_email;
}
function validate_password($passwords)
{
    $check_password=false;
    if (strlen($passwords) >= 8) {
        $check_password=true;
    }
    return $check_password;
}
