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
    <script src="../asset/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script> 
</head>

<body>

<?php include 'navClient.html' ?>
<div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">           
                <h1 class="display-5 mb-5">Prevision</h1>
            </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="bg-light rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="row g-3">
                                <form class="forms-sample" method="post" action="#" id="formPrevision" >
                                    <div class="col-sm-12">
                                        <div class="form-floating">
                                            <input type="date" class="form-control border-0" id="name" placeholder="Gurdian Name" name="dateCueillette" value="<?php echo date('Y-m-d'); ?>" >
                                            <label for="name">Date : </label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                    <button class="btn btn-primary py-3 px-4" type="submit" id="btnVariete">Valider</button>
                                </div>
                                </form>
                            </div>
                            <div class="row ">
                                <div class="col-sm-6">
                                    <div style="border: 1px solid #000; padding: 8px; border-radius: 3px; width: 300px;">
                                        <p>Parcelle id :</p>
                                        <p>Nom :</p>
                                        <p>10 ha</p>
                                            <img src="../asset/image/the2.jpg" width="280px" height="200">
                                        <p>Nombre de pieds :</p>
                                        <p>Poids the restant :</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div style="border: 1px solid #000; padding: 8px; border-radius: 3px; width: 300px;">
                                        <p>Parcelle id :</p>
                                        <p>Nom :</p>
                                        <p>10 ha</p>
                                            <img src="../asset/image/the1.jpg" width="280px" height="200">
                                        <p>Nombre de pieds :</p>
                                        <p>Poids the restant :</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
</div>

<?php include 'footerClient.html' ?>

<script>
    var form = document.getElementById("formPrevision");
    form.addEventListener("submit",(e)=>{
        e.preventDefault();
        Swal.fire({
            
            title: 'DESOLE!',
            text: "Désolé mais a n'a pas pu finir ce dernier😥",
            imageUrl: "../asset/image/images/please-pleaseplease.gif",
            imageWidth: 300,
            imageHeight: 200,
            //src: '../asset/image/images/asset/image/images/please-pleaseplease.gif',
            confirmButtonText: 'Pardonnez'
            
        })
    });
</script>

</body>

</html>