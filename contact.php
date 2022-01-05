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
        <link rel="stylesheet" href="./css/sass/sections/contact.css">
    </head>

<style>
    .form-container{
        width: 100%;
        height: 100vh;
        background-color: lightgrey;
    }
</style>
    <body>

        <!-- Navigation -->
        <?php include('includes/header.php');?>

                <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contactanos</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Nombre *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nombre es obligatorio</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">Email es obligatorio</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email no valido.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Telefono" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Mensaje *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Mensaje es obligatorio.</div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-btn text-center"><button class="btn btn-xl text-uppercase text-white" id="submitButton" type="submit">Enviar</button></div>
                    <div class="alert"><p>Tu mensaje ha sido enviado</p></div>
                </form>
            </div>
        </section>
        <!-- Footer -->
        <?php include('includes/footer.php');?>
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="https://www.gstatic.com/firebasejs/4.3.0/firebase.js"></script>
        <script src="js/contact_me.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        </head>
    </body>
</html>