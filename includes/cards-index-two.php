<style>

  #middle-content{
    padding-top: 30px;
    box-shadow: rgba(0, 0, 0, 0.15) 2.6px 1.95px 2.6px;
  }

  #middle-content .card-body{
    height: 300px;

  }

  #middle-content .card-category{
  }

  #middle-content .numbers{
    height: 245px;
    overflow: hidden;

  }

  #middle-content button{
    float: right;
    cursor: pointer;
    border: none;
    background-color: transparent;
    color: rgb(195, 212, 52);
  }

  #middle-content button:hover {
    color: grey;
  }

  #middle-content .col-7{
    height: 285px;
  }

  .boton{
    border-radius: none;
    width: 80px;
    text-align: center;
    font-size: 20px ;
  }

  .card{
    box-shadow: none;
    margin-bottom: 25px;
    border-bottom: 2px solid black;
  }

  #card-body-middle{
    border-bottom: 2px solid black;
  }

  .card-body p{
    color: black;
  }
}
@media (max-width: 33.9em){ 
  .raised-block {
    margin-left: -0.625rem;
  }
}
</style>
<script>
var myCollapse = document.getElementById('myCollapse')
var bsCollapse = new bootstrap.Collapse(myCollapse, {
  toggle: false
})
  </script>

    <div class="col-sm-7" id="middle-content">
      <!--Articulo #1-->
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
        $i = 0;
        $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
        while ($row=mysqli_fetch_array($query)) {
        $id = 'id-' . $i;
        $i++;
      ?>
      <a href="news-details.php?nid=<?=($row['pid'])?>">      
        <div class=" card border-0 card-stats">
          <div class=" card-body" id="card-body-middle">
            <div class=" row">
              <div class=" col-4">
                <div class=" info-icon text-center icon-primary">
                  <p>  
                    <a href="news-details.php?nid=<?=($row['pid'])?>">   
                      <img class="img-fluid  bd-placeholder-img bd-placeholder-img-lg "   src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
                    </a>   
                  </p>
                </div>
              </div>
              <div class="col-8">
                <div class=" numbers">
                  <a href="news-details.php?nid=<?=($row['pid'])?>"><h4 class="card-title text-dark" ><strong><?php echo ($row['posttitle']);?></strong></h4></a>
                  <div class="boton text-white" style=" background-color: rgb(195, 212, 52);"><small> 23 <bold> OCT </bold></small></div>
                  <p class=" card-category">  <?php $pt=$row['postdetails'];echo  (substr($pt,0));?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container" id="#<?=$id?>"></div>
        <?php } ?>
      </a>
    </div>