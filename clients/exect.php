<?php 
    include("../fonction/fonction.php");
    $c = getAllCueilleur();
    $p = getAllParcelle();
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
              
        <h1 class="display-5 mb-5">Cuillette</h1>
        </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-light rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row g-3">
                            <form class="forms-sample" method="post" action="#" id="formCueillette" >
                                <div class="col-sm-12">
                                    <div class="form-floating">
                                        <input type="date" class="form-control border-0" id="name" placeholder="Gurdian Name" name="dateCueillette" value="<?php echo date('Y-m-d'); ?>" >
                                        <label for="name">Date : </label>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-floating mt-3 mb-3">
                                        <select class="form-select" id="floatingSelect" name="idCueilleur"
                                            aria-label="Floating label select example" >
                                            <?php for ($i=0; $i <count($c) ; $i++) { ?> 
                                                <option value="<?php echo $c[$i]["idCueilleur"]; ?>"><?php echo $c[$i]["nomCueilleur"]; ?></option>    
                                            <?php } ?>
                                            
                
                                        </select>
                                        <label for="floatingSelect"> Choix cueilleur : </label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-floating mt-3 mb-3">
                                        <select class="form-select" id="floatingSelect" name="idParcelle"
                                            aria-label="Floating label select example">
                                            <?php for ($i=0; $i <count($p) ; $i++) { ?> 
                                                <option value="<?php echo $p[$i]["idParcelle"]; ?>"> numero <?php echo $p[$i]["idParcelle"]; ?></option>    
                                            <?php } ?>
                                        </select>
                                        <label for="floatingSelect"> Choix parcelle : </label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-floating mb-3">
                                        <input type="number"  class="form-control" id="floatingInput"
                                            placeholder="30" name="poids" >
                                        <label for="floatingInput"> Poids cueilli :  </label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary py-3 px-4" type="submit">Submit Now</button>
                                </div>
                                <p class="erreur" style="color:red;" ></p>
                                <!-- <div style="border: 1px solid #000; padding: 8px; border-radius: 3px; width: 250px;">
                                    <p style="color: red; font-weight: bold; margin-bottom: 5px;">Erreur :</p>
                                    <p style="margin: 0;">manque de poids</p>
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->

    <?php include 'footerClient.html' ?>
<script src="../asset/js-Ajax/xhr.js"></script>
<script src="../asset/js-Ajax/ajax-client.js"></script>
</body>

</html>