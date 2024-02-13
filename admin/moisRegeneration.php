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
<?php include 'navAdmin.html' ?>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">Regeneration en mois</h1>
        </div>
    <form class="forms-sample" method="post" id="formGenerer">
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="1" value="1" name="mois">
        <label class="form-check-label" >Janvier</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="2" value="2" name="mois">
           
        <label class="form-check-label" >Fevrier</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="3" value="3" name="mois">
           
        <label class="form-check-label" >Mars</label>
    </div>
    <div class="form-check form-check-inline"> 
        <input class="form-check-input" type="checkbox" id="4" value="4" name="mois">
        <label class="form-check-label" >Avril</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="5" value="5" name="mois">
           
        <label class="form-check-label" >Mai</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="6" value="6" name="mois">
           
        <label class="form-check-label" >Juin</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="7" value="7" name="mois">
        <label class="form-check-label" >Juillet</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="8" value="8" name="mois">
           
        <label class="form-check-label" >Aout</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="9" value="9" name="mois">
           
        <label class="form-check-label" >Semptembre</label>
    </div>  
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="10" value="10" name="mois">
        <label class="form-check-label" >Octobre</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="11" value="11" name="mois">
           
        <label class="form-check-label" >Novembre</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="12" value="12" name="mois">
           
        <label class="form-check-label" >Decembre</label>
    </div> 
    <div class="col-12 text-center">
        <button class="btn btn-primary py-3 px-4" type="submit" id="btnVariete">Sauvegarder</button>
    </div>
    </form>                       
</div>
</div>
<?php include 'footerAdmin.html' ?>
<script src="../asset/js/xhr.js"></script>
<script src="../asset/js/generer.js"></script>
</body>

</html>