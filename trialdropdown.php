<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Proteins</title>
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
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary">One-Stop Database</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="project.html" class="nav-item nav-link">Celiac Disease</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Databases</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="feature.php" class="dropdown-item">Genes</a>                   
                        <a href="#" class="dropdown-item">Proteins</a>
                            <div class="dropdown-menu-proteins">
                                <ul>
                                <li><a href="quote.php"> Sequence</a></li>
                                    <li><a href="404.php">Structure</a></li>  
                                </ul>
                            </div>
                        <a href="team.php" class="dropdown-item">Omics</a>
                        <a href="testimonial.php" class="dropdown-item">Clinical trials</a>
                    </div>
                </div>
            </div>
          
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Structure</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Databases</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Structure</li>
                </ol>
            </nav>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>PDB ID</th>
                                    <th>Macromolecule Name</th>
                                    <th>Source Organism</th>
			                        <th>Experimental Method</th>
                                    <th>Chain ID</th>
                                    <th>Sequence Length</th>
                                    <th>Sequence</th>
                                    <th>Resolution &#8491;</th>
                                    <th>PubMed ID</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                    $servername = "localhost";
		                            $username = "root";
		                            $password = "";
		                            $database = "celiac_database";

		                            // Create connection
		                            $connection = new mysqli($servername, $username, $password, $database);

                                    // Check connection
		                            if ($connection->connect_error) {
                                        die("Connection failed: " . $connection->connect_error);
                                    }

                                    // read all row from database table
		                            $sql = "SELECT * FROM trials";   
		                            $result = $connection->query($sql);

                                    if (!$result) {
			                            die("Invalid query: " . $connection->error);
                                    }
                                   
                                    // read data of each row
		                            while($row = $result->fetch_assoc()) {
                                        $q = $row['PDB_ID'];
                                        echo "<tr>
                                                <td><a href=structure.php?pdbname=$q > ".$row['PDB_ID'] ." </a></td>
                                                <td>" . $row['Macromolecule_Name'] . "</td>
                                                <td><i>" . $row['Source_Organism'] . "</i></td>
                                                <td>" . $row['Experimental_Method'] . "</td>
                                                <td>" . $row['Asym_ID'] . "</td>
                                                <td>" . $row['Sequence_Length'] . "</td>
                                                <td>" . $row['Sequence']. "</td>
                                                <td>" . $row['Resolution'] . "</td>
                                                <td>" . $row['PubMed_ID'] . "</td>   
                                                </tr>";
                                            }
                                        $connection->close();
                                    ?>    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div style="height: 400px; width: 400px; position: relative;" class='viewer_3Dmoljs' data-pdb='5IJK' data-backgroundcolor='0xffffff' data-style='stick' data-ui='true'>
    </div>
    
    <div style="height: 400px; width: 400px; position: relative;" class='viewer_3Dmoljs' data-pdb='1YCR' 
         data-select1='chain:A' data-style1='cartoon:color=spectrum' data-surface1='opacity:.7;color:white' data-select2='chain:B' data-style2='stick'>
    </div> 

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
<!-- table end -->     



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
    <!-- 3Dmol -->
    <script src="https://3Dmol.org/build/3Dmol-min.js" async></script> 

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>