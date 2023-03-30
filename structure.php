<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>structure 3D view</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Table -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 500px;
}
</style>
   
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->



    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-light navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary">One-Stop Database</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link ">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="ced.html" class="nav-item nav-link ">Celiac Disease</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Databases</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="genes.php" class="dropdown-item">Genes</a>               
                        <a href="#" class="dropdown-item">Proteins</a>
                            <div class="dropdown-menu-proteins">
                                <ul>
                                <li><a href="seq.php"> Sequence</a></li>
                                    <li><a href="str.php">Structure</a></li>  
                                </ul>
                            </div>
                        <a href="omics.php" class="dropdown-item">Omics</a>
                        <a href="clinicaltrials.php" class="dropdown-item">Clinical trials</a>
                    </div>
                </div>
            </div>
          
        </div>
    </nav>
    <!-- Navbar End -->

<body>
    <div class=" text-center">
        <h1 class="display-9 mb-3">3D view</h1>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://3Dmol.org/build/3Dmol-min.js" async></script> 
    <?php
    $pdb1 = $_GET['pdbname'];
    echo '<div class="container align-center">
    
    <div style="height: 500px; position: relative; margin:auto;"
    class="viewer_3Dmoljs" 
    data-pdb='.$pdb1.' 
    data-backgroundcolor="0xffffff" 
    data-style="cartoon:color=spectrum" 
    data-ui="true">
    </div> ';
    ?>

    <!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="#"><img src="https://webstream.sastra.edu/sastrapwi/images/SASTRA-New-Logo.png" class="img-fluid center"  alt="SASTRA DEEMED UNIVERSITY" ;align ="center" width="500px"></a>
        <div class="container py-5 center">
        <div class="text-primary center">
                        <h5 class="text-primary mb-4" ; align="center"; style="float:top"; color="#AB7442" >Contact Us</h5>
                       <h6 class= "text-primary mb-2" ; align="center"; style="float:top"; color="#AB7442">
                       SASTRA DEEMED UNIVERSITY </br>
                        Tirumalaisamudram </br>
                             Thanjavur 613401 </br>
                             Tamilnadu</br>
                              India </br>
                        <a href="https://yennamalli-lab.in/#"><u>https://yennamalli-lab.in/<u></h6>
                                    </div>
                                    </div>
        <div class="container">
            <div class="text-primary mb-4">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0" color="#AB7442">©
                      <a class="border-bottom" href="#">One-Stop Database</a>
                        All Rights Reserved
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                              <a class="border-bottom" href="https://yennamalli-lab.in/" color="#AB7442">Guided by: Ragothaman M Yennamalli</a>
                                              <a class="border-bottom">Designed by: Sebatina Louis</a>
                    </div>
                </div>
            </div>
        </div>
                                    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    
</body>

</html>
</body>

    