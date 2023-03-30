<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Search genes</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
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
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>GeneID</th>
			                        <th>tax_id</th>
                                    <th>Org_name</th>
                                    <th>Symbol</th>
                                    <th>Aliases</th>
                                    <th>description</th>
                                    <th>map_location</th>
                                    <th>chromosome</th>
                                    <th>orientation</th>
                                    <th>exon_count</th>
                                    <th>OMIM</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","celiac_database");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM genes WHERE CONCAT(GeneID,Symbol,Aliases,description,chromosome,OMIM) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['GeneID']; ?></td>
                                                    <td><?= $items['tax_id']; ?></td>
                                                    <td><?= $items['Org_name']; ?></td>
                                                    <td><?= $items['Symbol']; ?></td>
                                                    <td><?= $items['Aliases']; ?></td>
                                                    <td><?= $items['description']; ?></td>
                                                    <td><?= $items['map_location']; ?></td>
                                                    <td><?= $items['chromosome']; ?></td>
                                                    <td><?= $items['orientation']; ?></td>
                                                    <td><?= $items['exon_count']; ?></td>
                                                    <td><?= $items['OMIM']; ?></td>
                                                </tr>
                                                <?php
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
</html>