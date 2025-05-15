<?php

class CrudClass
{
    public function index()
    {
        global $db;
        $products = $db->query("select * from products");
        return $products;
    }

    public function create()
    {

        $message = null;

        try {
            if (isset($_POST["submit"])) {
                $name = $_POST["name"];
                $price = $_POST["price"];
                $description = $_POST["description"];
                $desc = str_ireplace("'", "\'", $description);


                // $photo=$_FILES["photo"];
                $photoName = $_FILES["photo"]["name"];
                $photoNamePath = $_FILES["photo"]["full_path"];
                $photoPath = $_FILES["photo"]["tmp_name"];
                // $photoType=$_FILES["photo"]["type"];
                // $photoSize=$_FILES["photo"]["size"];

                move_uploaded_file($photoPath, "./img/" . $photoNamePath);
                global $db;
                $db->query("insert into products (name, price, description, photo)values('$name','$price','$desc','$photoName');");


                $message = "Product Added Successfully";

                // print_r($name); echo "<br>";
                // print_r($price); echo "<br>";
                // print_r($photo);echo "<br>";
                // print_r($description);echo "<br>";
                // echo "<br>";
                // echo "<br>";

                // print_r($photoName);echo "<br>";
                // print_r($photoNamePath);
                // echo "<br>";
                // print_r($photoType);echo "<br>";
                // print_r($photoPath);
                // echo "<br>";
                // print_r($photoSize);echo "<br>";


            }
        } catch (\Throwable $th) {
            print_r($th->getMessage());
        }
        return $message;
    }
    public function update()
    {
        if (isset($_POST["update"])) {
            $id = $_POST["id"];
            $name = $_POST["name"];
            $price = $_POST["price"];

            $description = $_POST["description"];
            $desc = str_ireplace("'", "\'", $description);

            // $photo= $_POST["photo"];
            global $db;
            if (!$_FILES["photo"]["name"]) {

                $db->query("update products set name='$name', price='$price', description='$desc' where id=$id");
                header("Location: index.php");
            } else {
                $photoName = $_FILES["photo"]["name"];
                $photoNamePath = $_FILES["photo"]["full_path"];
                $photoPath = $_FILES["photo"]["tmp_name"];

                $db->query("update products set name='$name', price='$price', description='$desc', photo='$photoName' where id=$id");
                move_uploaded_file($photoPath, "./img/" . $photoNamePath);
                header("Location: index.php");
            }
        }

        
        return ;
       
    }



    public function delete()
    {
        if (isset($_POST["delete"])) {
            $del_id = $_POST["id"];
            //    print_r($Del_id);
            global $db;
            $db->query("delete from products where id=$del_id");
        }
    }
    public function find($id)
    {
        global $db;
        $products = $db->query("select * from products where id=$id");
        return $products;
    }
}
