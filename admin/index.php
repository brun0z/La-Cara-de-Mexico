<?php
 session_start();
//Database Configuration File
include('includes/config.php');
//error_reporting(0);
if(isset($_POST['login']))
  {
 
    // Getting username/ email and password
    $uname=$_POST['username'];
    $password=$_POST['password'];
    // Fetch data from database on the basis of username/email and password
    $sql =mysqli_query($con,"SELECT AdminUserName,AdminEmailId,AdminPassword FROM tbladmin WHERE (AdminUserName='$uname' || AdminEmailId='$uname')");
    $num=mysqli_fetch_array($sql);
    if($num>0)
    {
    $hashpassword=$num['AdminPassword']; // Hashed password fething from database
    //verifying Password
    if (password_verify($password, $hashpassword)) {
    $_SESSION['login']=$_POST['username'];
    echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
    } else {
    echo "<script>alert('Wrong Password');</script>";
 
  }
}
//if username or email not found in database
    else{
    echo "<script>alert('User not registered with us');</script>";
    }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
    
	<script src="//platform-api.sharethis.com/js/sharethis.js#property=5c9e29cf6f05b20011c6d7d3&product=inline-share-buttons"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5139634720777851",
    enable_page_level_ads: true
  });
</script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="News Portal.">
        <meta name="author" content="PHPGurukul">
        <link rel="shortcut icon" href="assets/images/LOGO.png">


        <!-- App title -->
        <title> Admin Panel</title>

        <!-- App css -->
        <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link href="signin.css" rel="stylesheet">
        <script src="assets/js/modernizr.min.js"></script>
        <!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    </head>


    <body class="text-center">
    <main class="form-signin">
  <form  method="post">
    <img class="mb-4" src="logo.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Admin Blog</h1>

    <div class="form-floating">
      <input class="form-control" type="text" required="" id="floatingInput" name="username" placeholder="Username or email" autocomplete="off">
      <!-- <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"> -->
      <label for="floatingInput">User</label>
    </div>
    <div class="form-floating">
      <!-- <input type="password" class="form-control" id="floatingPassword" placeholder="Password"> -->
      <input class="form-control" type="password" id="floatingPassword" name="password" required="" placeholder="Password" autocomplete="off">
      <label for="floatingPassword">Password</label>
    </div>

    <!-- <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div> -->
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="login">Iniciar Sesión</button>
    <!-- <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button> -->
    <p class="mt-5 mb-3 text-muted">&copy;  LA CARA DE MÉXICO <?= date("F j, Y"); ?>  </p>
     
  </form>
</main>

    

        <!-- HOME -->
        <!-- <section>
            <div class="container-alt">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                                <div class="text-center account-logo-box">
                                    <h2 class="text-uppercase">
                                        <a href="index.html" class="text-success">
                                            <span><img src="" alt="" height="56"></span>
                                        </a>
                                    </h2>
                                    <h4 class="text-uppercase font-bold m-b-0">Sign In</h4>
                                </div>
                                <div class="account-content">
                                   <form class="form-horizontal" method="post">

                                        <div class="form-group ">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="text" required="" name="username" placeholder="Username or email" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input class="form-control" type="password" name="password" required="" placeholder="Password" autocomplete="off">
                                            </div>
                                        </div>                   
                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-xs-12">
                                                <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" type="submit" name="login">Log In</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="clearfix"></div>
                                </div>
                            </div>                  
                        </div>
                    </div>
                </div>
            </div>
          </section> -->
          <!-- END HOME -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- <script src="assets/js/bootstrap.min.js"></script> -->
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>