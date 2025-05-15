<?php
include "./db_config.php";
include "./crudclass.php";

$crudData = new CrudClass;

$fetchData = $crudData->index();
if (isset($_POST["delete"])) {
    
    $delData = $crudData->delete();
}
// echo "<pre/>";
// print_r($fetchData);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP raw crud</title>
    <link rel="shortcut icon" href="img/raqeebulfahim.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5 w-75 mx-auto">
        <div class="text-center bg-warning m-0 p-2 rounded">
            <h1> PHP raw CRUD: Index</h1>
        </div>
        <a class='btn btn-info my-2' href="create.php">Create New</a>
        <table class="table table-striped text-center ">
            <thead class="table table-dark">
                <tr>
                    <th> Product ID</th>
                    <th> Name</th>
                    <th> Price</th>
                    <th> Description</th>
                    <th> Photo</th>
                    <th> Action</th>
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

                    $photo = $data["photo"];
                    echo "
                <tr>
                    <td>$data[id]</td> 
                    <td>$data[name]</td>
                    <td>$data[price]</td>
                    <td>$data[description]</td>
                    <td><img src='./img/$photo' alt='Image' height='40px' width='50px' style='border-radius:20%'></td>
                    <td class='d-flex align-items-center justify-content-center'>
                        <form method='post' action='update.php'>
                                <input type='hidden' class='form-control' name='id' value='$data[id]'>  
                                
                                <button type='submit' class='btn btn-group btn-success' name='delete'>Edit</button>   
                        </form>
                        
                         <form method='post'>
                            <input type='hidden' class='form-control' name='id' value='$data[id]'>  
                             <div class='btn btn-group' role='group'>
                               
                                <button type='submit' class='btn btn-group btn-danger' name='delete'>Delete</button>   
                            </div>                    
                         </form>
                             
                    </td>
                 </tr>
                ";
                }
                ?>
            </tbody>
        </table>
    </div>



    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>