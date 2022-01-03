<style>
    .raised-block {
    background-color: #fff;
    margin-bottom: 10px;
    margin-left: 0;
    margin-right: -0.625rem; 
    padding-left: 0.625rem;
    padding-right: 0.625rem;
}
@media (max-width: 33.9em){ 
    .raised-block {
        margin-left: -0.625rem;
    }
}
div#services_block {
   height: 355px;
   background-color: #33363a;
   border-left:3px solid white;
   border-right:3px solid white;
}
.row [class^="col-"]:first-child>.raised-block {
   
    margin-left: -0.625rem;
}

.button-container{
display:inline-block;
position:relative;
}

.button-container a{
position: absolute;
bottom:3em;
text-align:center;
/* right:7.5em; */
/* display: flex; */
align-items: center;
/* justify-content: center; */
background-color: rgb(195, 212, 52);
height: 40px;
margin: 10px -65px;
/* width: 100px; */
top: 50%;
left: 50%;
border-radius:1.5em;
color:white;
text-transform:uppercase;
padding:1em 1.5em;
}

.bbb_advs {
    width: 100%;
    padding-top: 80px;
    padding-bottom: 80px
}

.bbb_adv {
    width: 100%;
    height: 220px;
    border: solid 1px #e8e8e8;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1)
}

.bbb_adv_content {
    padding-left: 30px
}

.bbb_adv_subtitle {
    font-size: 12px;
    color: rgba(0, 0, 0, 0.5);
    margin-bottom: 26px
}

.bbb_adv_title a {
    font-size: 18px;
    font-weight: 500;
    color: #000000
}

.bbb_adv_title a:hover {
    color: #0e8ce4
}

.bbb_adv_title_2 a {
    font-size: 18px;
    font-weight: 500;
    color: #0e8ce4
}

.bbb_adv_title_2 a:hover {
    opacity: 0.8
}

.bbb_adv_text {
    color: #828282;
    margin-top: 10px;
    font-size: 14px
}

.bbb_adv_image {
    width: 168px;
    height: 100%
}

.bbb_adv_image img {
    display: block;
    max-width: 100%
}
</style>
<script>
var myCollapse = document.getElementById('myCollapse')
var bsCollapse = new bootstrap.Collapse(myCollapse, {
  toggle: false
})
  </script>






<div class="col-sm-5">
    
<?php 
if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 3;
$offset = ($pageno-1) * $no_of_records_per_page;


$total_pages_sql = "SELECT COUNT(*) FROM tblposts";
$result = mysqli_query($con,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {

?>
          <!-- Search Widget -->

          <div class="">
      <!-- <div class=" card card-stats shadow-lg"> -->
        <div class=" card-body">
          <div class=" row">
            <div class=" col-5">
              <div class=" info-icon text-center icon-primary">
              <p>  
              <!-- <img class=" text-center bd-placeholder-img rounded-circle" width="40" height="40" src="admin/postimages/23d89f6162bf53ff147715bb1cf6c450jpeg" alt="jerhfuierhvuhfvuhufr"> -->
              <a href="news-details.php?nid=<?=($row['pid'])?>">   
              <img  width="100" height="100" class="card-img  bd-placeholder-img bd-placeholder-img-lg "   src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
              </a>   
            </p>
              </div>
            </div>
            <div class=" col-7">
              <div class=" numbers">
                  <a href="news-details.php?nid=<?=($row['pid'])?>">
                  <h5 class="card-title text-dark" >
                    <strong>
                        <?php echo ($row['posttitle']);?>
                    </strong> 
                  </h5>
                  </a>
            
                <p class=" card-category">  <?php $pt=$row['postdetails'];
                                        echo  (substr($pt,0));?></p>
               
              </div>
            </div>
          </div>
        </div>
        <!-- <div class=" card-footer">
          <hr />

          <div class=" stats">
            <i class=" icons icon-sound-wave"> </i> Last Research
          </div>
        </div> -->
      </div>
      <div class="container">
                         <hr class="featurette-divider">
                    </div>
 
          <!-- <div class="col-lg-12 border-0 bbb_adv_col">
           
                <div class="bbb_adv d-flex flex-row align-items-center justify-content-start">
                    <div class="bbb_adv_content">
                        <div class="bbb_adv_title"><a href="#">Trends 2018</a></div>
                        <div class="bbb_adv_text">  <p class="card-text text-justify"> 
                                     <?php $pt=$row['postdetails'];
                                        echo  (substr($pt,0));?>
                                  </p></div>
                    </div>
                    <div class="ml-auto">
                        <div class="bbb_adv_image"><img src="https://i.imgur.com/iDwDQ4o.png" alt=""></div>
                    </div>
                </div>
            </div> -->

  <!-- <div class="container ">
        <div class="card autocomplete-group bg-light shadow-sm" >
                    <div class="row no-gutters ">
                        <div class="col-sm-5 form-group">
                            <p>  
                            <img class="card-img bd-placeholder-img bd-placeholder-img-lg img-fluid  mx-auto"   src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
                            </p>
                        </div>
                        <div class="col-sm-7">
                            <div class="card-body  form-group">  
                            <h5 class="card-title text-justify" style="color: rgb(195, 212, 52);"> <?php echo ($row['posttitle']);?></h5>
                                <p class="card-text text-justify"> 
                                     <?php $pt=$row['postdetails'];
                                        echo  (substr($pt,0));?>
                                  </p>
                                <div class="text-center text-white">
                                <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="btn btn-dark">Leer más &rarr;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

          <div class="card shadow-lg border-0 bbb_adv_col" >
                <div class="bbb_adv d-flex flex-row b-0  align-items-center justify-content-start" >
                    <div class="bbb_adv_content">
                        <div class="bbb_adv_title"><a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>"><?php echo ($row['posttitle']);?></a></div>
                        <div class="bbb_adv_text">  
                                <?php $pt=$row['postdetails'];
                                        echo  (substr($pt,0));?>
                                </p>
                        </div>
                    </div>
                    <div class="ml-auto">
                        <div class="bbb_adv_image">
                                 <img class="card-img-top" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
                        </div>
                    </div>
                    
                </div>
          </div>
          <div class="container">
                         <hr class="featurette-divider">
                    </div> -->

 <?php } ?>

 
          <!-- Categories Widget -->
          <!-- <div class="card sm-5 shadow-lg">
          <div class="bbb_adv d-flex flex-row b-0  align-items-center justify-content-start" >
          <div class="bbb_adv_content">
          <div class="bbb_adv_title">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
			
                  <?php 
if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 3;
$offset = ($pageno-1) * $no_of_records_per_page;


$total_pages_sql = "SELECT COUNT(*) FROM tblposts";
$result = mysqli_query($con,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {

?>

                    <li>
                      <a href="category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['CategoryName']);?></a>
                    </li>
<?php } ?>
                  </ul>
                </div>
       
              </div>
            </div>
          </div> -->

          <!-- Side Widget -->
          <!-- <div class="card my-4 shadow-lg">
            <h5 class="card-header text-center"> Noticias recientes</h5>
            <div class="card-body">
                      <ul class="mb-0">
				
<?php
$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId limit 8");
while ($row=mysqli_fetch_array($query)) {

?>

  <li>
                      <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>"><?php echo htmlentities($row['posttitle']);?></a>
                    </li>
            <?php } ?>
          </ul>
            </div>
          </div> -->

        </div>
