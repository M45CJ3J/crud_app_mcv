<?php
class OrderController 
{
    public function product_sort()
    {
        $db = new OrderModel();  
        $data['rows'] = $db->get_products_sorted();
    //  var_dump($data['rows']);
       return view::load('order/product_sort',$data);
           }

    public function order_details($product_id)
    {
        $db = new OrderModel();  
        $data['rows'] = $db->get_one_product($product_id);
           $data['countusers'] = $db->get_product_ordertack($product_id);
           $data['countpennding'] = $db->get_product_pennding($product_id);
           $data['countdone'] = $db->get_product_done($product_id);
           $data['countusedone'] = $db->get_product_usedone($product_id);
           $data['countusedmore'] = $db->get_product_usedmore($product_id);
           $data['countorder'] = $db->get_product_orders($product_id);
           $data['countordercairo'] = $db->get_product_ordertack_cairo($product_id);
           $data['countordergiza'] = $db->get_product_ordertack_giza($product_id);
           
           return view::load('order/order_details',$data);      
         
    }

}    