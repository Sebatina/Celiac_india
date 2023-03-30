<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Omics</title>
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
    <!-- <link href="help.css" rel="stylesheet"> -->

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	<!-- table -->
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
<style>

.button {
    display:block;
    width: 100px;
    height: 50px;
    background: #AB7442;
    border: 1px solid #F5F5F5;
    color:  white;
    text-align: center;
    font-size: 18px;
    line-height: 50px;
    border-radius: 3px;
    cursor: pointer;
    transition: .5s;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.4);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
  z-index: 999;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 500px;
}
.popup {
  margin: 70px auto;
  padding: 20px;
  background: #F5F5F5;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: 5s ;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #AB7442;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
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


    <!-- Topbar Start -->
   
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary">One-Stop Database</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="project.html" class="nav-item nav-link">Celiac Disease</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Databases</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="feature.php" class="dropdown-item">Genes</a>
                        <a href="#" class="dropdown-item">Proteins</a>
                            <div class="dropdown-menu-proteins">
                                <ul>
                                <li><a href="quote.php"> Sequence</a></li>
                                    <li><a href="404.php">Structure</a></li>  
                                </ul>
                            </div>
                        <a href="team.php" class="dropdown-item active">Omics</a>
                        <a href="testimonial.php" class="dropdown-item">Clinical Trials</a>
                    </div>
                </div>
                
            </div>

        </div>
    </nav>
    
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Omics</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Databases</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Omics</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Pop up box start -->
    <div class="box">
	    <a class="button" href="#popup1">Help</a>
    </div>

    <div id="popup1" class="overlay">
	<div class="popup">
		<h2>HELP !</h2>
		<a class="close" href="#">&times;</a>
		<div class="content">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae cupiditate deserunt magni voluptates iste porro sed, veniam molestiae, sequi quasi fugit veritatis nostrum expedita deleniti saepe at iusto incidunt, optio modi consequatur? Sapiente autem repellat maiores, consectetur officiis rem a voluptatibus quibusdam cumque pariatur reiciendis quam minima delectus enim aspernatur, et, vero minus ab nemo dolores dolorum magni. Ut aliquid rem possimus dolorum aliquam et, officia delectus quae repudiandae in aspernatur soluta modi minus deleniti quia nobis dolor consequatur. Dolor, aspernatur officiis? Perferendis in cupiditate eum, beatae numquam quas et quod saepe soluta sint. Soluta, earum. Odio non ullam cum.
		</div>
	</div>
</div>

<!-- Pop up box end -->
	
	<!-- table -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="row">
                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Omics Type</th>
                                    <th>Source Organism</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Database Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","celiac_database");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM omics WHERE CONCAT(id,omicsType,Organisms,source,title,description) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);


                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['omicsType']; ?></td>
                                                    <td><i><?= $items['organisms']; ?></i></td>
                                                    <td><?= $items['title']; ?></td>
                                                    <td><?= $items['description']; ?></td>
                                                    <td><?= $items['source']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                    }
                                    elseif (isset($_GET['search'])) 
                                    {
                                        $filtervalues = $_GET['search'];
                                        if($filtervalues=='#')
                                        {
                                        $query = "SELECT * FROM omics";
                                        $query_run = mysqli_query($con, $query);
                                        }
                                    }    
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

<!-- table end -->
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
 <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>

   


</html>


