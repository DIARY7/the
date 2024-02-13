<?php 
    include("../fonction/fonction.php");
    $liste = getListePaiement();
?>
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
    <!-- Quote Start -->
    <div class="container-fluid py-5">
        <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
              
        <h1 class="display-5 mb-5">Liste de payement de cueiller</h1>
        </div>
            <div class="row justify-content-center">
            <div class="bg-light rounded h-100 p-4">
    <h6 class="mb-4">Liste Employer</h6>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">date </th>
                <th scope="col"> nom cueilleur</th>
                <th scope="col"> poids </th>
                <th scope="col"> %bonus </th>
                <th scope="col"> %mallus </th>
                <th scope="col"> montant paiement</th>                                      
            </tr>
            </thead>
            <tbody> 
                <?php for ($i=0; $i < count($liste) ; $i++) { ?> 
                    <tr>
                    <td><?php echo $liste[$i]["date"]; ?></td>
                    <td><?php echo $liste[$i]["nom_cueilleur"]; ?></td>
                    <td><?php echo $liste[$i]["poids"]; ?></td>
                    <td><?php echo $liste[$i]["bonus"]; ?></td>
                    <td><?php echo $liste[$i]["malus"]; ?></td>
                    <td><?php echo $liste[$i]["montant_paiement"]; ?></td>
                </tr>    
                <?php } ?>
                                                                
            </tbody>
    </table>
</div>
            </div>
    </div>

    <?php include 'footerClient.html' ?>

</body>

</html>