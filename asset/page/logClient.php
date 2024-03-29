
<?php 
    include "../../fonction/fonction.php";
    $user = getLoginDefautUser();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>the</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
</head>

<body>

    <?php include 'navbarLog.html' ?>

    <!-- Quote Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Client</p>
                <h1 class="display-5 mb-5">Login</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-light rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row g-3">
                            <form class="forms-sample" method="post" action="../../page-traitement/traitement-login-client.php">
                                <div class="col-sm-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0" id="name" placeholder="Gurdian Name" name="login" value="<?php echo $user["nomUser"]; ?>" >
                                        <label for="name">Nom : </label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-floating">
                                        <input type="password" class="form-control border-0" id="pass" placeholder="Gurdian Email" name="mdp" value="<?php echo $user["mdp"]; ?>" >
                                        <label for="pass">Pass : </label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary py-3 px-4" type="submit">Submit Now</button>
                                </div>
                            </form>                           
                        <?php if (isset($_GET["erreur"])) { ?>
                                <script>
                                    Swal.fire({
                                        icon:"error",
                                        title: 'Error!',
                                        text: 'Identification incorrecte',
                                        icon: 'error',
                                        confirmButtonText: 'Ressayer'
                                    
                                    })
                                </script>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->
    

    <?php include 'footer.html' ?>
    
</body>

</html>