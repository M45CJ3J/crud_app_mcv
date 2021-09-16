<?php
class OrderModel extends DB{
    
    private $table = "orders";
    private $conn;

    public function __construct()
    {
        $this->conn = $this->connect();
    }

    public function get_products_sorted()
    {
        return $this->conn->rawQuery('SELECT * from products');
     }

    public function get_one_product($product_id)
    {
         return $this->conn->rawQuery(' SELECT * FROM products WHERE product_id =' .$product_id);

    }

    public function get_product_ordertack($product_id)
    {
         return $this->conn->rawQuery('SELECT COUNT(orders.user_id) as count FROM orders WHERE product_id =' .$product_id);

    }

    public function get_product_pennding($product_id)
    {
         return $this->conn->rawQuery('SELECT COUNT(orders.order_type) as count FROM orders WHERE orders.order_type =0 AND product_id =' .$product_id);
    }

    public function get_product_done($product_id)
    {
         return $this->conn->rawQuery('SELECT COUNT(orders.order_type) as count FROM orders WHERE orders.order_type =1 AND product_id =' .$product_id);
    }

    public function get_product_usedone($product_id)
    {
         return $this->conn->rawQuery('SELECT COUNT(orders.user_id) as count FROM orders WHERE orders.user_id =1 AND product_id =' .$product_id);
    }

    public function get_product_usedmore($product_id)
    {
         return $this->conn->rawQuery('SELECT COUNT(orders.user_id) as count FROM orders WHERE orders.user_id > 1 AND product_id =' .$product_id);
    }

    public function get_product_orders($product_id)
    {
         return $this->conn->rawQuery('SELECT COUNT(orders.order_id) as count FROM orders WHERE product_id =' .$product_id);
    }

    public function get_product_ordertack_cairo($product_id)
    {
         return $this->conn->rawQuery('SELECT COUNT(orders.user_id) AS count FROM orders INNER JOIN users ON orders.user_id=users.user_id
     WHERE   product_id =' .$product_id.' AND users.city_name = "cairo" 
     ');
    }

    public function get_product_ordertack_giza($product_id)
    {
         return $this->conn->rawQuery('SELECT COUNT(orders.user_id) AS count FROM orders INNER JOIN users ON orders.user_id=users.user_id
     WHERE   product_id =' .$product_id.' AND users.city_name = "giza" 
     ');
    }
}