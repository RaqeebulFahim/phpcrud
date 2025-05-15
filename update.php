<?php
include("db_config.php");
include("crudclass.php");


$createData = new CrudClass();
$message = $createData->create();;

// echo $_POST["id"];
$product=$createData->find($_POST["id"])->fetch_assoc();

$message=$createData->update();


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
        <div class="w-75 mx-auto border rounded m-2 p-5">
            <form method="post" enctype="multipart/form-data">
                <fieldset>

                    <div class="form-group m-2">
                        <!-- <label for="exampleInputEmail1">Email address</label> -->
                        <input type="hidden" class="form-control" name="id" placeholder="Enter Product Name" value="<?php echo $product["id"];?>" required>
                        <input type="text" class="form-control" name="name" placeholder="Enter Product Name" value="<?php echo $product["name"];?>" required>
                    </div>
                    <div class="form-group m-2">
                        <input type="number" class="form-control" name="price" value="<?php echo $product["price"];?>" placeholder="Input Product Price">
                    </div>
                    <div class="form-group m-2">
                        <input type="text" class="form-control" name="description" value="<?php echo $product["description"];?>" placeholder="Input Product Description">
                    </div>
                    <div class="form-group m-2">
                        <input type="file" class="form-control" name="photo" value="<?php echo $product["photo"];?>" placeholder="Input Product Photo">
                        <img src='./img/<?php echo $product["photo"];?>' alt='Image' height='90px' width='90px' style='border-radius:20%'>
                    </div>

                    <input type="submit" name="update" class="btn btn-info">
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