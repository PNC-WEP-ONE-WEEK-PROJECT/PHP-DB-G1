<?php
/**
 *
 * Your code here
 * 
 * User for Add post and display post btn(add,post)   click add call post_view.php
 *
 */
// require_once('views/post_view.php')
// ?>

<?php
require_once("templates/header.php")
 ?>
 
 <div class="container">
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
                    <img src="images/rady.jpg" alt="">
                </div>
                <input type="text" name="content" placeholder="What is your mind? ...">
            </div>
            <div class="buttons">
                <button><a href="views/post_view.php">Add</a></button>
            </div>
        </div>
        <form action="controllers/post_controller.php">
            <div class="add-post show-post">
                <div class="cirles-profile">
                    <div class="profile">
                        <img src="images/rady.jpg" alt="">
                    </div>
                    <p>Savouert</p>
                </div>
                <div class="content-post">
                    <p></p>
                </div>
                <div class="photo-post">
                    <!-- <input type="file" name="image" value="upload image"> -->

                </div>
                <div class="like-comment">
                    <div class="like">
                        <a href="#"><i class="fa fa-thumbs-o-up "></i>Like</a>
                    </div>
                    <div class="comment">
                        <a href="#"><i class="fa fa-comment-o"></i>Comment</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php
require_once("templates/footer.php")
 ?>