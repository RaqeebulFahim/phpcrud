<?php
include "./db_config.php";
include "./crudclass.php";

$crudData = new CrudClass;

$fetchData = $crudData->index();
// echo "<pre/>";
// print_r($fetchData);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP raw crud</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="text-center bg-warning m-0 p-2 rounded">
        <h1 > PHP Raw CRUD</h1>
        </div>
    <button class='btn btn-info my-2'>Create New</button>
       <table class="table table-striped">
       <thead class="table table-dark">
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Action</th>
            </tr>
        </thead>



        <tbody>
            <?php
            foreach ($fetchData as $data) {
                // echo "<pre/>";
                // print_r($data);
                // echo "$data[id] <br/>";
                // echo "$data[name]<br/>";
                // echo "$data[price]<br/>";

                echo <<<fahim
                <tr>
                    <td>$data[id]</td> 
                    <td>$data[name]</td>
                    <td>$data[price]</td>
                    <td>
                        <button class='btn btn-success'>Edit</button>
                        <button class='btn btn-danger'>Delete</button>
                    </td>
                 </tr>
                fahim;
            }
            ?>
            <tr>
                <td></td>
            </tr>
        </tbody>
       </table>
    </div>



    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>