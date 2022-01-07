<?php 
session_start();
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/logo.png">
    <title>LA CARA DE MÉXICO | Home Page</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/sass/sections/index.css">
    <link rel="stylesheet" href="./css/sass/components/left-titles.css">
  </head>

  <body>

    <!-- Navigation -->
    <?php include('includes/header.php');?>
   
    <!-- Carousell -->    
    <div class="content" id="hm-section1">
        <div class="container-fluid" id="carousel-wrap">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./images/portada.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/portada2.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container-fluid" id="side-titles">
      <div class="row">
        <!-- Blog Entries Column -->
        <div class="side-titles col-md-3">
          <div id="etiqueta">
            <span>Lorem ipsum</span>
          </div>
          <ul class="verti" id="title-titles"><h1>Titulos de la semana</h1></ul>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, assumenda? Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, assumenda?</p>
          <?php 
            if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
            } else {
            $pageno = 1;
            }
            $no_of_records_per_page = 8;
            $offset = ($pageno-1) * $no_of_records_per_page;
            $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
            $result = mysqli_query($con,$total_pages_sql);
            $total_rows = mysqli_fetch_array($result)[0];
            $total_pages = ceil($total_rows / $no_of_records_per_page);
            $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
            while ($row=mysqli_fetch_array($query)) {
          ?>
          <a id="side-description" href="category.php?catid=<?php echo htmlentities($row['cid'])?>"> <?php echo ($row['category']);?> </a>
          <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>"> <h3><?php echo ($row['posttitle']);?></h3> </a>
          <!-- Blog Post -->
          <br>
          <?php } ?>
          </div>
          <!-- Sidebar Widgets Column -->
          <?php include('includes/cards-index-two.php');?>
          <?php include('includes/cards-index-three.php');?>
        </div>
      </div>
    </div>

    <!-- Page Content -->
    <div class="container-fluid" id="post-video-container">
      <div class=" row">
        <?php include('includes/cards-index.php');?>
        <!-- Blog Entries Column -->
        <div class="post-video col-lg-6 col-md-12">
          <!-- Blog Post -->
          <?php 
            if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
            } else {
            $pageno = 8;
            }
            $no_of_records_per_page = 1;
            $offset = ($pageno-1) * $no_of_records_per_page;
            $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
            $result = mysqli_query($con,$total_pages_sql);
            $total_rows = mysqli_fetch_array($result)[0];
            $total_pages = ceil($total_rows / $no_of_records_per_page);
            $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate  as postingdate,tblposts.PostUrl  as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
            while ($row=mysqli_fetch_array($query)) {
          ?>

          <div class="" id="grey-container">
              <div class="grey-section-container">
                <p>
                  <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>">
                  <img class="card-img bd-placeholder-img bd-placeholder-img-lg  mx-auto img-fluid" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
                  </a>
                </p>
              </div>
              <div class=" verticalLine">
                <h4 class="card-title  text-justify text-white"><strong><?php echo ($row['posttitle']);?></strong></h4>
              </div> 
              <div class="btn text-white mt-1 mb-1" style=" background-color: rgb(195, 212, 52); border-radius: 0px;">
                <small><strong><?php echo ($row['postingdate']);?></strong></small> 
              </div>
              <p class="card-text text-justify"><?php $pt=$row['postdetails']; echo  (substr($pt,0));?></p>
          </div>


              <?php } ?>
              <!-- Pagination -->
            </div>

    </div>

    <div class="last-banner"></div>
    
    <!-- Footer -->
    <?php include('includes/footer.php');?>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
  </body>
</html>