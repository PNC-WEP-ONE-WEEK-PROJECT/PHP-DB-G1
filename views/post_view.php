

<?php
require_once("../templates/header.php");
require_once('../models/database.php');

?>

<div class="container">
    <form action="#" method="post">

        <!-- Your code here -->
        <div class="navigation">
            <h2>Facebook</h2>
            <div class="icons">
                <ul>
                    <li><i class="fa fa-home fa-2x"></i></li>
                    <li><i class="fa fa-user-plus fa-2x"></i></li>
                    <li><i class="fa fa-user-circle fa-2x"></i></li>
                </ul>
            </div>
            <button>Sign In</button>
        </div>
        <div class="add-post">
            <div class="cirles-profile">
                <div class="profile">
                    <img src="../images/rady.jpg" alt="">
                </div>
                <input type="text" name="content" placeholder="What is your mind? ...">
            </div>
            <div class="buttons">
                <button><a href="../views/create_view.php">Add Post</a></button>
            </div>
        </div>
    </form>



    <!-- display post -->
    <?php
    $posts=getItems();
    foreach($posts as $post){
    
     ?>

    <form action="../controllers/post_controller.php">
        <div class="add-post show-post ">
            <div class="delete">
                <div class="cirles-profile">
                    <div class="profile">
                        <img src="../images/p.png" >
                    </div>
                    <p>Savouert</p>
                </div>
                <div class="delete_edit">
                    <div class="circle-icon">

                        <a href="../views/edit_view.php?post_id=<?php echo $post['post_id'];?>"><i class="fa fa-pencil"></i></a>
                    </div>
                    <div class="circle-icon">

                        <a href="../controllers/delete_post.php?post_id=<?php echo $post['post_id'];?>"><i class="fa fa-trash"></i></a>
                    </div>
                </div>
            </div>
            <div class="content-post">
                <p><?php echo $post['content_post'] ?></p>
            </div>
            <?php  if($post['image_name']!==""){ ?>
                <div class="photo-post">
                    <img src="../images/<?php echo $post['image_name']; ?>" alt="" >
                </div>
             <?php }; ?>

          

            <div class="count-like">
                <p> Savouert and 150K</p>
            </div>
            <div class="like-comment">
                <div class="like">
                   <a href="#"><i class="fa fa-thumbs-o-up "></i>Like</a></p>
                </div>
                <div class="comment">
                    <a href="../views/comment_view.php?post_id=<?php echo $post['post_id'];?>"><i class="fa fa-comment-o"></i>Comment</a>
                </div>
            </div>
            <?php  
            $postID=$post['post_id'];
            $commentpost=  getContentCm($postID);
                foreach ($commentpost as $comment){
            ?>
            
            <div class="display-comment">
                <div class="cirles-profile photo">
                    <div class="profile name">
                        <img src="../images/p.png" >
                    </div>
                    <p>Savouert</p>
                    <a href="../controllers/delete_comment.php?comment_id=<?php echo $comment['comment_id'];?>"><i class="fa fa-trash"></i></a>
                </div>
                <div class="text">
                    <p><?php echo $comment['content'] ?> </p>
                </div>
            </div>
            <?php }; ?>
            
        </div>
    </form>
    <?php }; ?>
</div>
<?php
require_once("../templates/footer.php")
?>