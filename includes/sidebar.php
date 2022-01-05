<div class="col-md-3">
  <!-- Categories Widget -->
  <div class="card my-4" id="categorias-container">
    <h5 class="card-header text-center">Categorías</h5>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-6">
          <ul class="list-unstyled mb-0">
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
  <div class="card my-4" id="recent-news">
    <h5 class="card-header text-center"> Noticias recientes</h5>
    <div class="card-body">
      <ul class="mb-0" id="recent-news-titles">
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
</div>
