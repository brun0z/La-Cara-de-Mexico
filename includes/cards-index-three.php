<style>

    #right-news img{
        border-right: 6px solid rgb(195, 212, 52);
    }

    #right-news .verti h5{
        padding-left: 5px;
    }

    #right-news .verti{
        padding-left: 0px;
    }
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
</style>
  
<div class="col-lg-2 col-md-12 d-flex flex-column" id="right-news">
    
    <?php 
        if (isset($_GET['pageno'])) {
        $pageno = $_GET['pageno'];
        } else {
        $pageno = 9;
        }
        $no_of_records_per_page = 1;
        $offset = ($pageno-1) * $no_of_records_per_page;
        $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
        while ($row=mysqli_fetch_array($query)) {
    ?>
    <div class="container-fluid ">
        <div class="  border-0 col-sm-12 autocomplete-group ">
            <div class="row no-gutters">
                <div class="col-sm-12 d-flex flex-column">
                    <div class="card-body  form-group">
                        <p>
                            <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>">
                                <img class="card-img bd-placeholder-img bd-placeholder-img-lg mx-auto img-fluid" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
                            </a>
                        </p>  
                        <ul class=" verti">
                            <h5 class="card-title  text-justify text-dark" > 
                                <strong><?php echo ($row['posttitle']);?></strong>
                            </h5>
                        </ul> 
                        <p class="card-text text-justify"> 
                            <?php $pt=$row['postdetails']; echo  (substr($pt,0));?>
                            <div class="btn text-white mt-2 mb-2" style=" background-color: rgb(195, 212, 52); border-radius: 0px;">
                               <small><strong><?php echo ($row['postingdate']);?></strong></small> 
                            </div>
                        </p>
                        <div class=" button-container text-center  col-sm-12 ">
                    </div>
                 </div>
            </div>
        </div>
    </div>
</div>

 <?php } ?>
