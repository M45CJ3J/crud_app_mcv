<?php
class ProductController 
{
   
    public function index()
    {  
        $db = new ProductModel();   

        $data['products_id_order'] =  $db->getAll();
     //   var_dump($data['products_id_order']);
        if($data['products'] == 0){
            $data = "no data";
            view::load('home',$data);
        }
        view::load('home',$data);
    }

    public function create()
    {
        view::load('product/create');
    }

    public function store()
    {
 
           if(isset($_POST['submit'])){
            $product_id = NULL;  
            $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];
            $product_description = $_POST['product_description'];
            $dataInsert = Array(
                "product_id" => $product_id,
                "product_name"=>$product_name,
            "product_price"=>$product_price,
            "product_description"=>$product_description);
           //  var_dump($dataInsert);         
            $db = new ProductModel();
            if(!$db->insert($dataInsert))
            {
                $data['success'] = "Data Added Successfully";
                return view::load('product/create',$data);
            }
            else 
            {
                $data['error'] = "Error";
                return view::load('product/create',$data);
            }  }
  
            return view::load('product/create');    
    } 
    
    
    public function delete($product_id)
    {   
        $db = new ProductModel();  
      if (!$db->delete($product_id)) {
        $data['success'] = "Data deleted Successfully";
        return view::load('product/delete',$data);      
      } 
      else {
        $data['error'] = "Data deleted not Successfully";
        return view::load('product/delete',$data); 
      }
    }

    public function edit($product_id)
    {
        $db = new ProductModel();  
        
        if ($db->get_product($product_id)) {
            $data['rows'] = $db->get_product($product_id);
            $data['success'] = "Data gotten Successfully";
            return view::load('product/edit',$data);      
          } 
          else {
            $data['error'] = "Data gotten not Successfully";
            return view::load('product/edit',$data); 
          }
    }
    
    public function update($product_id)
    {
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];
            $product_description = $_POST['product_description'];
            $db = new ProductModel();  
            $updatedata= Array(
                "product_id" => $product_id,
                "product_name"=>$product_name,
            "product_price"=>$product_price,
            "product_description"=>$product_description);
            
            if($db->update_product($product_id,$updatedata))
            {
                $data['success'] = "Updated Successfully";
                $data['rows'] = $db->update_product($product_id,$updatedata);
                var_dump($data['rows']);
                return view::load('product/update',$data); 
            }
            else 
            {
                $data['error'] = "Error";
                $data['rows'] = $db->update_product($product_id,$updatedata);
                return view::load('product/update',$data); 
            }
    }

}