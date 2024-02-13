<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gardener - Gardening Website Template</title>
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

<!-- Quote Start -->
<div class="container-fluid py-5">
        <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-5">Parcelle</h1>
        </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-light rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row g-3">
                            <form class="forms-sample" method="post" action="#" id="formParcelle">
                                <input type="hidden" name="idParcelle" class="form-control" id="idParcelle">
                                <div class="col-sm-12">
                                    <div class="form-floating mb-3">
                                        <input type="number" name="surface" class="form-control" id="surface"
                                            placeholder="1">
                                        <label for="surface"> Surface : </label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-floating mt-3 mb-3">
                                        <select class="form-select" id="idVariete" name="idVariete"
                                            aria-label="Floating label select example">
                                        </select>
                                        <label for="idVariete">Variete de the : </label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary py-3 px-4" type="submit">Insert</button>
                                </div>
                            </form>
                            <input class="btn btn-primary py-3 px-4" type="button" value="Modifier" id="modifier">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->
    <?php include 'footerAdmin.html' ?>

    <script src="../asset/js/xhr.js"></script>
    <script src="../asset/js/parcelle.js"></script>
    </body>

</html>