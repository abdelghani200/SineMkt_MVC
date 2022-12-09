<?php



class ProductController{

    public function index(){
        $db = new Product();   
        $data['products'] = $db->getAllProducts();
        View::load('product/index',$data);
    }

    public function add(){
        View::load("product/add");
    }

    public function store()
    {
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $price = $_POST['price'];
            // $image = $_POST['image'];
            $image = $_FILES['image']["tmp_name"];

           
            // $this->conn = new Product();
            $data = Array ( "name" => $name ,
                            "price" => $price,
                            "image" => $image
                            );
            // echo $name ."---------------" . $price ."---------------";
            $db = new Product();
            if($db->insertProduit($data))
            {
                // $data['success'] = "Data Added Successfully";
                View::load('product/add',["success"=>"Data Added Successfully"]);
            }
            else 
            {
                // $data['error'] = "Error";
                View::load('product/add');
            }
        }
        // return View::load('products/add');
    }

    public function delete($id){
        
        $db = new Product();
        if($db->deleteProduct($id)){
            
            View::load("product/delete");
        }
        else{
            echo "error";
        }
    }
}