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
    <link href="css/modern-business.css" rel="stylesheet">
    <script src="//platform-api.sharethis.com/js/sharethis.js#property=5c9e29cf6f05b20011c6d7d3&product=inline-share-buttons"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/sass/main.css">
</head>
<body id="blog-body">

    <!-- Navigation -->
    <?php include('includes/header.php');?>
    <!-- Carousell -->    
    <div class="content" id="bl-section1">
        <div class="container-fluid" id="carousel-wrap">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
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

    <div class="container-fluid" id="bl-section2">
        <div class="row">
		    <div class="container-fluid">
                <div class="row featurette">
                    <div class="col-md-8 order-md-2">
                        <ul>
                            <h4 class="featurette-heading text-justify" style="color: rgb(195, 212, 52);">
                                <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, laudantium!</strong>       
                            </h4>
                        </ul>
                        <div class="verticalLine">
                            <ul><p class="lead ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, aut in! Consectetur in, nobis sint dolore tempora quod laboriosam natus harum, voluptatum magni eius delectus expedita fugit recusandae eaque dicta.</p></ul>
                        </div>
                    </div>
                    <div class="col-md-4 order-md-1" id="bl-img-wrap">
                        <div class=" info-icon text-center icon-primary shadow-lg" id="bl-img-container">
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>

    <!--Cartas oscuras -->
    <?php include('includes/blog-card-dark.php');?>


    <div class="container-fluid" id="bl-section4">
        <h1 class="text-center">Lorem ipsum dolor sit amet.</h1>
        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle">Lorem ipsum</h6>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid" id="bl-section5">
        <div class="row">
		    <div class="container-fluid">
                <div class="row featurette">
                    <div class="col-md-8 order-md-2">
                        <ul>
                            <h4 class="featurette-heading text-justify" style="color: rgb(195, 212, 52);">
                                <strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, laudantium!</strong>       
                            </h4>
                        </ul>
                        <div class="verticalLine">
                            <ul><p class="lead ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, aut in! Consectetur in, nobis sint dolore tempora quod laboriosam natus harum, voluptatum magni eius delectus expedita fugit recusandae eaque dicta.</p></ul>
                        </div>
                    </div>
                    <div class="col-md-4 order-md-1" id="bl-img-wrap">
                        <div class=" info-icon text-center icon-primary shadow-lg" id="bl-img-container">
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
  
    <!-- Footer -->
    <?php include('includes/footer.php');?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/main.js"></script>
    </head>
</body>

</html>