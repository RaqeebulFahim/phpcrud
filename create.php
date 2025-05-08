<?php
include("db_config.php");
include("crudclass.php");


$createData = new CrudClass();
$message = $createData->create();;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP raw CRUD</title>
    <link rel="shortcut icon" href="img/raqeebulfahim.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 w-75 mx-auto">
        <div class="text-center bg-warning p-2 rounded">
            <h1> PHP raw CRUD: Create</h1>
        </div>
        <div class="d-flex">
            <div>
                <a class='btn btn-info my-2' href="index.php">CRUD Index</a>
            </div>
            <div class="mx-auto text-center  rounded my-2 px-5">
                <?php
                if ($message) {
                    echo "<h3 class='bg-info '>$message</h3>";
                }
                ?>
            </div>

        </div>
        <div class="w-75 mx-auto">
            <form method="post" enctype="multipart/form-data">
                <fieldset>

                    <div class="form-group m-2">
                        <!-- <label for="exampleInputEmail1">Email address</label> -->
                        <input type="text" class="form-control" name="name" placeholder="Enter Product Name" required>
                    </div>
                    <div class="form-group m-2">
                        <input type="number" class="form-control" name="price" placeholder="Input Product Price">
                    </div>
                    <div class="form-group m-2">
                        <input type="text" class="form-control" name="description" placeholder="Input Product Description">
                    </div>
                    <div class="form-group m-2">
                        <input type="file" class="form-control" name="photo" placeholder="Input Product Photo">
                    </div>

                    <input type="submit" name="submit" class="btn btn-info">
                </fieldset>
            </form>
        </div>

    </div>


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>