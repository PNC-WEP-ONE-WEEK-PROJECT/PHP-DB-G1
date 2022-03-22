<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>

<body>
    <?php
    // require_once("controllers/.php");

    // require_once('models/database.php');
   
    // $_SESSION['password_error']="";
    // $_SESSION['email_error']="";

    // if(isset($_POST['emails'])){
    //      $emailuser=$_POST['emails'];
    //      echo $emailuser;
    // }


 
    ?>
     <section class="vh-100 "> 
            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-5">
                        <h2 class="text-uppercase text-center mb-5"></i>Facebook</h2>

                        <form action="#" method="POST">     
                        <div class="form-outline mb-4">
                            <input type="email" id="form3Example3cg" class="form-control form-control-lg" placeholder="Your Email" name="emails"/>  
                            <small class="form-text"></small class="form-text">             
                        </div>  
                        <div class="form-outline mb-4">
                            <input type="password" id="form3Example4cg" class="form-control form-control-lg"  placeholder="Password" name="passwords"/>                     
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" >Log in</button>
                            <a href="views/post_view.php">Log in</a>
                       </div>
                        <h4>or</h4>
                        <div class="d-flex justify-content-center">
                            <button type="submit"  class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"><a href="views/form.php">Create New Account</a> </button>
                        </div>
                        </form>  
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>
    </form>
    </body> 
 </html>   