<head></head>

<footer>
        <div class="footer-logo">
            <img src="./images/logo-w.png" alt="">
        </div>
        <div class="footer-text-container">
            <div class="footer-text">
                <h4>Categorias</h4>
                <a href=""><p>Ultimas Noticias</p></a>
            </div>
            <div class="footer-text">
                <?php 
                    if (isset($_GET['pageno'])) {
                    $pageno = $_GET['pageno'];
                    } else {
                    $pageno = 3;
                    }
                    $no_of_records_per_page = 3;
                    $offset = ($pageno-1) * $no_of_records_per_page;
                    $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
                    $result = mysqli_query($con,$total_pages_sql);
                    $total_rows = mysqli_fetch_array($result)[0];
                    $total_pages = ceil($total_rows / $no_of_records_per_page);
                    $query=mysqli_query($con,"select tblcategory.CategoryName as category,tblcategory.id as cid, from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
                    while ($row=mysqli_fetch_array($query)) {
                ?>
                <a href="category.php?catid=<?php echo htmlentities($row['cid'])?>"><p><?php echo ($row['category']);?></p></a>
                <?php } ?>
            </div>
            <div class="footer-text">
                <h4>Contactenos</h4>
                <a href="contact.php#contact"><p>Anúnciese con nosotros</p></a>
                <a href=""><p>Términos y condiciones</p></a>
                <a href=""><p>Política de protección de datos personales</p></a>
                <a href=""><p>© 2021-2022 - La Cara de México</p></a>
            </div>
        </div>
        <div class="nav-footer">
            <ul>
                <li><a href="index.php">NOTICIAS</a></li>
                <li><a href="blog.php">BLOG</a></li>
                <li><a href="contact.php">CONTACTO</a></li>
            </ul>
            <div class="icon-box"><i class="fa fa-facebook"></i></div>
            <div class="icon-box"><i class="fa fa-instagram"></i></div>
            <div class="icon-box"><i class="fa fa-twitter"></i></div>
            <div class="icon-box"><i class="fa fa-linkedin"></i></div>
        </div>
    </footer>