
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

                <button type="submit">Add Posts</button>
            </div>
        </div>
    </div>
<?php
require_once("templates/footer.php")
 ?>