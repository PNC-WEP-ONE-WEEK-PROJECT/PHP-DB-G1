
<?php require_once('../templates/header.php')?>
<div class="post_container">
<form action="../controllers/post_controller.php" method="post" enctype="multipart/form-data">
       <div class=" post">
           <p><i class="fa fa-arrow-left">Create Post</i></p>
           <button type=" submit" name="upload"  value="Upload Image">POST</button>
       </div>
       <div class="profile-name">
           <div class="circle-profile-name">
               <img src="../images/rady.jpg" class="logo-profile">
               <h3>Savouert cute girl</h3>
           </div>
           <div class="content">
               <input type="text" name="content" placeholder="Say something about this photo ..." >
           </div>
       </div>
       <div class="upload-img">
            <input type="file" name="image" >
       </div>
       
    </form>
</div>
<?php require_once('../templates/footer.php')?>