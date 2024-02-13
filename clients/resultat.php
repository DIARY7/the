<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>The</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../asset/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../asset/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../asset/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../asset/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../asset/css/style.css" rel="stylesheet">
</head>

<body>
<?php include 'navClient.html' ?>

<div class="container-xxl py-5">
    <div class="container">
    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">Resultat</h1>
        </div>
        <div class="bg-light rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.1s">
            <form class="forms-sample" method="post"  id="formRecherche">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="form-floating">
                                <input type="date" class="form-control border-0" name="dateMin"  value="<?php echo date('Y-m-d'); ?>" >
                                <label for="name">Min : </label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating">
                            <input type="date" class="form-control border-0" name="dateMax"  value="<?php echo date('Y-m-d'); ?>" >
                            <label for="name">Max : </label>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn btn-primary py-3 px-4" type="submit">Submit Now</button>
                    </div>
                </div>
            </div>
       </div>
       <div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="img/carousel-1.jpg">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-sm-6 text-center wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-4 text-white" data-toggle="counter-up" id="totalCueillette">0987u984909u80</h1>
                    <span class="fs-5 fw-semi-bold text-light">Poids total cueillette</span>
                </div>
                <div class="col-sm-6 text-center wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-4 text-white" data-toggle="counter-up" id="reste" >0987u984909u80</h1>
                    <span class="fs-5 fw-semi-bold text-light">Pois restant sur les parcelles</span>
                </div>
                <div class="col-sm-6 text-center wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-4 text-white" data-toggle="counter-up" id="cout_revient" >0987u984909u80</h1>
                    <span class="fs-5 fw-semi-bold text-light">Cout de revient /kg</span>
                </div>
                
    
                <div class="col-sm-6 text-center wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-4 text-white" data-toggle="counter-up" id="montant_vente" >0987u984909u80</h1>
                    <span class="fs-5 fw-semi-bold text-light"  >Montant des ventes</span>
                </div>
                <div class="col-sm-6 text-center wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-4 text-white" data-toggle="counter-up" id="montant_depense" >0987u984909u80</h1>
                    <span class="fs-5 fw-semi-bold text-light"  >Montant des dépenses</span>
                </div>
                <div class="col-sm-6 text-center wow fadeIn" data-wow-delay="0.7s">
                    <h1 class="display-4 text-white" data-toggle="counter-up" id="benefice" >0987u984909u80</h1>
                    <span class="fs-5 fw-semi-bold text-light">Bénéfice</span>
                </div>
                
            </div>
        </div>
        </div>
        </div>
<?php include 'footerClient.html' ?>
<script src="../asset/js-Ajax/xhr.js"></script>
<script src="../asset/js-Ajax/ajax-stat.js"></script>
</body>

</html>