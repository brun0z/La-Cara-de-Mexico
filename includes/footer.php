<head></head>

<footer>
        <div class="footer-logo">
            <img src="./images/logo-w.png" alt="">
        </div>
        <div class="footer-text-container">
            <div class="footer-text" id="footer-left">
                <h4>Categorias</h4>
                <?php 
            if (isset($_GET['pageno'])) {
                $pageno = $_GET['pageno'];
                } else {
                $pageno = 1;
                }
                $no_of_records_per_page = 4;
                $total_pages_sql = "SELECT COUNT(*) FROM tblcategory";
                $result = mysqli_query($con,$total_pages_sql);
                $total_rows = mysqli_fetch_array($result)[0];
                $total_pages = ceil($total_rows / $no_of_records_per_page);
                $query=mysqli_query($con,"select id,CategoryName from tblcategory");
                    while($row=mysqli_fetch_array($query))
                    {
                ?>
                <li>
                    <a href="category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['CategoryName']);?></a>
                </li>
            <?php } ?>
            </div>
            <div class="footer-text" id="footer-right">
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