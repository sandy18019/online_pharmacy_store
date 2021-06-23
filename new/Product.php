<?php 
require_once("Model.php");
class Product extends Model{
    public $id;
    public $name;
    public $image;
    public $price;
    public $description;
public function set_name($name){
    $this->name=$name;
}
public function set_image($image){
    $this->image=$image;
}
public function set_price($price){
    $this->price=$price;
}
public function set_description($description){
    $this->description=$description;
}
public function get(){
    $SQL = 'SELECT * FROM product';
    $stmt = self::$_connection->prepare($SQL);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_CLASS,'product');
    return $stmt->fetchAll();
}
/*
public function getForUser($user_id){
    $SQL = 'SELECT * FROM product WHERE user_id= :user_id';
    $stmt = self::$_connection->prepare($SQL);
    stmt->execute(['user_id'=>$user_id]);
    $stmt->setFetchMode(PDO::FETCH_CLASS,'product');
    return $stmt->fetchAll();
}
*/
public function create(){
    $SQL = 'INSERT INTO product(name,price,description,Product_Type)VALUE (:name,:price,:description,:type)';
    $stmt = self::$_connection->prepare($SQL);
    $stmt->execute(['name'=>$this->name,'description'=>$this->description,'price'=>$this->price,'type'=>5]);
    return $stmt->rowCount();
}

public function find($id){
    $SQL = 'SELECT * FROM product WHERE id= :id';
    $stmt = self::$_connection->prepare($SQL);
    $stmt->execute(['id'=>$id]);
    $stmt-> setFetchMode(PDO::FETCH_CLASS,'product');
    $this->id = $id;
    return $stmt->fetchAll();

}

public function update(){
    echo $this->id;
    $SQL= 'UPDATE product SET name = :name,description = :description,price=:price WHERE id = :id';
    $stmt = self::$_connection->prepare($SQL);
    $stmt->execute(['name'=>$this->name,'description'=>$this->description,'price'=>$this->price,'id'=>$this->id]);
    return $stmt->rowCount();
}

public function delete(){
    echo $this->id;
    $SQL = 'DELETE FROM product WHERE id= :id';
    $stmt = self::$_connection->prepare($SQL);
    return $stmt->execute([':id'=>$this->id]);
}
}
