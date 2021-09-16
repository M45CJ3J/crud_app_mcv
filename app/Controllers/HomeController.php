<?php
class HomeController {
    public function index()
    {
    $db = new ProductModel();   
        $data['products'] =  $db->getAll();
        view::load('home',$data);
    }
}