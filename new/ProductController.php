<?php

require_once('Product.php');
class ProductController{

    public function index(){
        $items = $this->model('Product')->get();
        $this->view('product/index', ['items'=>$items]);
    }

    public function create(){
        if(isset($_POST['action'])){
            var_dump($_POST);
            $newItem = new Product;
            $newItem->name = $_POST['name'];
            $newItem->description = $_POST['Description'];
            $newItem->price = $_POST['price'];
            $newItem->create();
            header('location:/index.php');
        }else{
            $this->view('create.php');
        }
    }

    public function addPicture($id){    
    if(isset($_FILES['newPicture']) && $_FILES['newPicture']['error'] == UPLOAD_ERR_OK)
    {
        $info = getimagesize($_FILES['newPicture']['tmp_name']);
        $allowedTypes = [IMAGETYPE_JPEG=>'.jpg',IMAGETYPE_PNG=>'.png',IMAGETYPE_GIF=>'.gif'];
        if($info === false){
            $this->view('product/addPicture',['error'=>'Bad file format']);
        }else if(!array_key_exists($info[2],$allowedTypes)){
            $this->view('product/addPicture',['error'=>'Not an accepted file type']);
        }else{
            //save the picture in the images folder
            $path= getcwd().DIRECTORY_SEPERATOR.'images'.DIRECTORY_SEPERATOR;
            $filename= uniqid().$allowedTypes[$info[2]];
            move_uploaded_file($_FILES['newPicture']['tmp_name'], $path.$filename);

           $newPicture = $this->model('Picture');
           $newPicture->id = $id;
           $newPicture->filename=$filename;
           $newPicture->description = $_POST['description'];
           $newPicture->create();
           header("Location: index.php"); 
        }
    }else{
        $this->view('product/addPicture');

    }
}

public function detail($id){
    $product = new Product;
    $product->find($id);

    $this->view('product/detail',$product);
}

public function edit($id){
    $product = new Product;

    $product->find($id);
    if(isset($_POST['action'])){
        $product->set_name($_POST['name']);
        $product->set_price($_POST['price']);
        $product->set_description($_POST['description']);
        $product->update();
        header('location:/product/index');
    }else{
        $this->view('/product/edit',$product);
    }
}

    public function delete($id){

        $theProduct = $this->model('Product')->find($id);

        if(isset($_POST['action'])){
            $theProduct->delete();
            header('location:/product/index');
    }else{
        $this->view('product/delete',$theProduct);
    }
        }
    
}
?>