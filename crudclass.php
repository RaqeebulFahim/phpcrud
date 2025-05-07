<?php 

class CrudClass{
    public function index(){
        global $db;
        $products = $db->query("select * from products");
        return $products ;

        
    }

    public function create(){
        
    }
    public function update(){

    }
    public function delete(){

    }
    public function find(){

    }
}

?>
