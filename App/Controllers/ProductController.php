<?php

// session_start();

class ProductController
{

    public function index()
    {
        $db = new Product();
        $data['products'] = $db->getAllProducts();
        View::load('product/index', $data);
    }

    public function add()
    {
        View::load("product/add");
    }

    public function store()
    {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            // $image = $_POST['image'];
            $image = $_FILES['file']["tmp_name"];
            // ///////////

            $target_dir = "UPLOADS/";
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image

            $check = getimagesize($_FILES["file"]["tmp_name"]);
            if ($check !== false) {

                $uploadOk = 1;
            } else {

                $uploadOk = 0;
            }

            // Check if file already exists
            if (file_exists($target_file)) {
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["file"]["size"] > 500000) {
                $uploadOk = 0;
            }

            // Allow certain file formats
            if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            ) {
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                } else {
                }
            }
            // $this->conn = new Product();
            $data = array(
                "name" => $name,
                "price" => $price,
                "image" => $target_file
            );
            // echo $name ."---------------" . $price ."---------------".$target_file;
            $db = new Product();
            if ($db->insertProduit($data)) {
                // $data['success'] = "Data Added Successfully";
                View::load('product/add', ["success" => "Data Added Successfully"]);
            } else {
                // $data['error'] = "Error";
                View::load('product/add');
            }
        }
        // return View::load('products/add');
    }



    public function edit($id)
    {

        $db = new Product();
        // var_dump($db->getRow($id));
        if ($db->getRow($id)) {
            $data['row'] = $db->getRow($id);
            // var_dump($data['row']) ;
            View::load('product/edit', $data);
        } else {
            echo 'error';
        }
    }



    public function delete($id)
    {

        $db = new Product();
        $db->deleteProduct($id);
        if ($db->deleteProduct($id)) {

            // View::load("product/delete");
            View::load($this->index(), ["success" => "Data Delete Successfully"]);
            // View::load( $this->index(), $data['products'] = $db->getAllProducts());
            // echo 'hh';
        } else {
            echo "error";
        }

        // $this->index();
    }


    // public function update($id)
    // {
    //     if (isset($_POST['submit'])) {
    //         $name = $_POST['name'];
    //         $price = $_POST['price'];

    //         // Retrieve the current image file name from the database
    //         $db = new Product();
    //         $row = $db->getRow($id);
    //         $currentImage = $row['image'];
    //         echo $currentImage;

    //         $image = isset($newImage) ? $newImage : $currentImage;
    //         //  echo $image;
    //         $data = array(
    //             "name" => $name,
    //             "price" => $price,
    //             "image" => $image // Use the current image file name
    //         );
    //         if ($db->updateProduct($id, $data)) {
    //             // echo $currentImage;
    //             View::load("product/edit", ["success" => "Data Updated Successfully", 'row' => $db->getRow($id)]);
    //         } else {
    //             View::load("product/edit", ['row' => $db->getRow($id)]);
    //         }
    //     }
    // }


    public function update($id)
    {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];

            // Retrieve the current image file name from the database
            $db = new Product();
            $row = $db->getRow($id);
            $image = $_FILES['file']["tmp_name"];

            $target_dir = "UPLOADS/";
            $target_file = $target_dir . basename($_FILES["file"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            $check = getimagesize($_FILES["file"]["tmp_name"]);
            if ($check !== false) {

                $uploadOk = 1;
            } else {

                $uploadOk = 0;
            }

            // Check if file already exists
            if (file_exists($target_file)) {
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["file"]["size"] > 500000) {
                $uploadOk = 0;
            }

            // Allow certain file formats
            if (
                $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif"
            ) {
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                } else {
                }
            }


            $data = array(
                "name" => $name,
                "price" => $price,
                "image" => $target_file // Use the current image file name
            );
            if ($db->updateProduct($id, $data)) {
                View::load("product/edit", ["success" => "Data Updated Successfully", 'row' => $db->getRow($id)]);
            } else {
                View::load("product/edit", ['row' => $db->getRow($id)]);
            }
        }
    }
}
