    <?php 
        if (isset($_GET['pageno'])) {
        $pageno = $_GET['pageno'];
        } else {
        $pageno = 2;
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

    <div class="container ">
        <div class="card  border-0 col-sm-12  bg-white ">
            <div class="row no-gutters ">   
                <div class="col-sm-12">
                    <div class="  ">
                        <ul class=" verti">
                            <h5  style="color: rgb(214, 223, 17);" class="card-title bold text-justify" ><strong><?php echo ($row['posttitle']);?></strong></h5>
                        </ul> 
                        <p class="card-text text-justify"><?php $pt=$row['postdetails']; echo  (substr($pt,0));?></p>
                    </div>
                </div>
            </div>        
        </div>
    </div>
<br>
<?php } ?>