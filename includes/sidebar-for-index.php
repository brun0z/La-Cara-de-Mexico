<div class="col-md-4">

          <!-- Categories Widget -->
          <div class="card mb-4 shadow-lg">
            <h5 class="card-header text-center">Categorías</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
				   <!-- <li>
                      <a href="" target="_blank">Alpha</a>
                    </li> -->
<?php $query=mysqli_query($con,"select id,CategoryName from tblcategory");
while($row=mysqli_fetch_array($query))
{
?>

                    <li>
                      <a href="category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['CategoryName']);?></a>
                    </li>
<?php } ?>
                  </ul>
                </div>
       
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4 shadow-lg">
            <h5 class="card-header text-center"> Noticias recientes</h5>
            <div class="card-body">
                      <ul class="mb-0">
					   <!-- <li>
                      <a href="">Nuestro tutorial esta en nuestro link</a>
                    </li> -->
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
          </div>

          <!--Slice notice Actuales -->

         

<!-- Three columns of text below the carousel -->
    <!-- <div class="col-md-4">
        <div class="card" style="text-align:center;display:inline-block;"> -->
                      <div class="" >
                    
   <?php 
     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 2;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        
$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by rand()  LIMIT $offset, $no_of_records_per_page");
while ($row=mysqli_fetch_array($query)) {
?>

   
                  <div class="card my-4 text-center shadow-lg">
                    <br>
                  <a href="news-details.php?nid=<?=($row['pid'])?>">
                  <img class=" bd-placeholder-img rounded-circle"  width="140" height="140"  src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
                  </a>
                      <h5 class="card-title"><?php echo ($row['posttitle']);?></h5>
                      <p><b>Categoria : </b> <a href="category.php?catid=<?php echo htmlentities($row['cid'])?>"><?php echo htmlentities($row['category']);?></a> </p>
                      <p class="text-muted">
                        <small >   <?php echo ($row['postingdate']);?></small>
                        <div class="container">
                            <hr class="featurette-divider">
                        </div>
                      </p>
                      <p><a class="btn btn-primary " href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>">Leer más &raquo;</a></p>
                  </div>

         
<?php } ?>

</div>

<div class="shadow-lg " >
<!-- <h4>Ejemplo con Acordeón</h4> -->
    <div class="accordion" id="accordionExample">
    <div class="card">
                    
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
                 $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by rand()  LIMIT $offset, $no_of_records_per_page");
                 while ($row=mysqli_fetch_array($query)) {
                    $collapseId = 'id-' . $i;
                    $i++;
                 ?>
                 
    
        
            <div class="card-header " id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#<?=$collapseId?>" aria-expanded="true" aria-controls="#<?=$current_id?>">
                    <?php echo $row['posttitle'];?>
            </button>
                </h2>
            </div>

            <div id="<?=$collapseId?>"  class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div  class="card-body text-center">
                <?php 
                $pt=$row['postdetails'];
              echo  (substr($pt,0));?>
                </div>
            </div>
       
        <!-- <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Collapsible Group Item #2
            </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                    on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,
                    raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
    -->
   
                                   <!-- <div class="card my-4 text-center shadow-lg">
                                     <br>
                                   <a href="news-details.php?nid=<?=($row['pid'])?>">
                                   <img class=" bd-placeholder-img rounded-circle"  width="140" height="140"  src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
                                   </a>
                                       <h5 class="card-title"><?php echo ($row['posttitle']);?></h5>
                                       <p><b>Categoria : </b> <a href="category.php?catid=<?php echo htmlentities($row['cid'])?>"><?php echo htmlentities($row['category']);?></a> </p>
                                       <p class="text-muted">
                                         <small >   <?php echo ($row['postingdate']);?></small>
                                         <div class="container">
                                             <hr class="featurette-divider">
                                         </div>
                                       </p>
                                       <p><a class="btn btn-primary " href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>">Leer más &raquo;</a></p>
                                   </div>
                  -->
                          
                 <?php } ?>
                 </div>
                 </div>
                 </div>


<?php 
$pagetype='aboutus';
$query=mysqli_query($con,"select PageTitle,Description from tblpages where PageName='$pagetype'");
while($row=mysqli_fetch_array($query))
{

?>
<br>
          <!-- Search Widget -->
          <div class="card mb-4 shadow-lg">
            
          <!-- <h4>Ejemplo con múltiples elementos</h4>   -->
    <!-- <p>
      <a class="btn btn-success" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
    </p> -->
    <button class="btn btn-primary" data-toggle="collapse" data-target="#demo">Nosotros</button>
          <div  id="demo" class="collapse text-black-100 card card-body shadow-lg">              
              <?php echo $row['Description'];?>
          </div>
 
            <!-- <h5 class="card-header">Nosotros</h5> -->
            <!-- <button class="btn btn-primary" data-toggle="collapse" data-target="#demo">Nosotros</button>
          <div  id="demo" class="collapse text-black-100">              
              <?php echo $row['Description'];?>
          </div> -->
            <!-- <div class="card-body"> -->
                   <!-- <form name="search" action="search.php" method="post"> -->
              <div class="input-group">
          
        <!-- <input type="text" name="searchtitle" class="form-control" placeholder="Buscar..." required> -->
                <span class="input-group-btn">
                  <!-- <button class="btn btn-secondary" type="submit">Go!</button> -->
                </span>
              <!-- </form> -->
              </div>
            <!-- </div> -->
          </div>
 <?php } ?>
    
</div>


      <!-- Side Widget -->
      <!-- <div class="card my-4">
            <h5 class="card-header"> Noticias recientes</h5>
            <div class="card-body">
                      <ul class="mb-0"> -->
					   <!-- <li>
                      <a href="">Nuestro tutorial esta en nuestro link</a>
                    </li> -->
<!-- <?php
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

                 
<!-- <div class="card">
                            <img src="~/images/blog/blog1.jpeg" />
                            <div class="card-body">
                                <h4 class="card-title">@author.Title</h4>
                                <small class="text-muted">Written by @author.Author</small>
                                <hr>
                                <p class="card-text">
                                     @Comments
                                </p>
                            </div>
                        </div> -->

                 
					   <!-- <li>
                      <a href="">Nuestro tutorial esta en nuestro link</a>
                    </li> -->
<?php
$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId limit 8");
while ($row=mysqli_fetch_array($query)) {

?>

 
            <?php } ?>
          </ul>
            </div>
          </div>
<!-- <p></p> -->
        </div>

