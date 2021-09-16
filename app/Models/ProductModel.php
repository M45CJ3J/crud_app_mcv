<?php
class ProductModel extends DB{

    private $table = "products";
    private $conn;

    public function __construct()
    {
        $this->conn = $this->connect();
    }
    
    public function getAll()
    {
        return $this->conn->rawQuery('SELECT * from products');
    }
    
    public function insert($dataInsert)
    {
       
        $product_name = $dataInsert['product_name'];
        $product_price = $dataInsert['product_price'];
        $product_description = $dataInsert['product_description'];
        $sql = "     INSERT INTO products (product_id , product_name , product_price , product_description)
        VALUES (NULL,'$product_name','$product_price','$product_description')";
        return $this->conn->rawQuery($sql);
    }
    public function delete($product_id)
    {
        return $this->conn->rawQuery('DELETE FROM products WHERE product_id = '. $product_id );

    }

    public function get_product($product_id)
    {
         return $this->conn->rawQuery('SELECT * FROM products WHERE product_id = '. $product_id );
    }
 
    public function update_product($product_id,$updatedata)
    {
        $product_name = $updatedata['product_name'];
        $product_price = $updatedata['product_price'];
        $product_description = $updatedata['product_description'];
        $sql = "UPDATE products SET product_name ='$product_name' , product_price = '$product_price',
        product_description = '$product_description' WHERE products.product_id = $product_id;
        ";
        return $this->conn->rawQuery($sql);
        
    }
   
}



