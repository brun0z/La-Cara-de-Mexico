<?php 
  session_start();
  include('includes/config.php');
  //Genrating CSRF Token
  if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
    }
  if(isset($_POST['submit']))
    {
  //Verifying CSRF Token 
  if (!empty($_POST['csrftoken'])) {
  if (hash_equals($_SESSION['token'], $_POST['csrftoken'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $comment=$_POST['comment'];
    $postid=intval($_GET['nid']);
    $st1='0';
    $query=mysqli_query($con,"insert into tblcomments(postId,name,email,comment,status) values('$postid','$name','$email','$comment','$st1')");
  if($query):
    echo "<script>alert('comment successfully submit. Comment will be display after admin review ');</script>";
    unset($_SESSION['token']);
  else :
    echo "<script>alert('Something went wrong. Please try again.');</script>";  
  endif;
  }
  }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="//platform-api.sharethis.com/js/sharethis.js#property=5c9e29cf6f05b20011c6d7d3&product=inline-share-buttons"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="shortcut icon" href="images/logo.png">
    <title> LA CARA DE MÉXICO | Home Page</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sass/sections/post.css">
  </head>
  <body>

    <!-- Navigation -->
   <?php include('includes/header.php');?>
    <!-- Page Content -->
    <div class="container-fluid" id="post-main">
      <div class="row" style="margin-top: 8%">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
          <!-- Blog Post -->
          <?php
            $pid=intval($_GET['nid']);
            $query=mysqli_query($con,"select tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.id='$pid'");
            while ($row=mysqli_fetch_array($query)) {
          ?>
          <div class="card mb-4">
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlentities($row['posttitle']);?></h2>
              <p class="categoria-date text-muted"><b>Categoria : </b> <a class="post-category" href="category.php?catid=<?php echo htmlentities($row['cid'])?>"><?php echo htmlentities($row['category']);?></a> |<b>Sub Categoria : </b><?php echo htmlentities($row['subcategory']);?> <b> Publicado en </b><?php echo htmlentities($row['postingdate']);?></p>
              <img class="mx-auto d-block" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
              <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              <p class="card-text"><?php 
              $pt=$row['postdetails'];
              echo  (substr($pt,0));?></p> 
            </div>
            <div class="card-footer text-muted"> 
          </div>
        </div>
        <?php } ?> 
      </div>
      <!-- Sidebar Widgets Column -->
      <?php include('includes/sidebar.php');?>
    </div>
    <!-- /.row -->
    <!---Comment Section --->
    <p></p>
    <br>
    <div class="row" id="comentarios" >
      <div class="col-md-6">
        <div class="card my-4">
          <h5 class="card-header">Deja un comentario:</h5>
			    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- responsivenoida -->
          <ins class="adsbygoogle"
              style="display:block"
              data-ad-client="ca-pub-5139634720777851"
              data-ad-slot="2364206017"
              data-ad-format="auto"
              data-full-width-responsive="true"></ins>
          <script>
          // (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
            <div class="card-body">
              <form name="Comment" method="post">
              <input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" />
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Ingrese su nombre completo" required>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Ingrese su correo electrónico válido" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="comment" rows="3" placeholder="Comentario" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary" name="submit">Enviar</button>
              </form>
            </div>
        </div>

         <!---Comment Display Section --->
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- responsivenoida -->
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-5139634720777851"
            data-ad-slot="2364206017"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
        // (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        <?php 
          $sts=1;
          $query=mysqli_query($con,"select name,comment,postingDate from  tblcomments where postId='$pid' and status='$sts'");
          while ($row=mysqli_fetch_array($query)) {
        ?>
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="images/usericon.png" alt="">
          <div class="media-body">
            <h5 class="mt-0"><?php echo htmlentities($row['name']);?> <br /><span style="font-size:11px;"><b>at</b> <?php echo htmlentities($row['postingDate']);?></span></h5><?php echo htmlentities($row['comment']);?>
          </div>
        </div>
        <?php } ?>
      </div>
      <div class="col-md-6" id="comentarios-side">
      </div>
    </div>
    </div>
    <div class="last-banner"></div>
    <?php include('includes/footer.php');?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

