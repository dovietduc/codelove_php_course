<?php

// View
class View {

    public function render($path) 
    {
        $dirRoot = __DIR__;
        $pathView = $dirRoot . '/' . $path;
        $a = 1;
        require_once $pathView;
    }
}

// Model
class ProductModel {

    public function showListProducts() 
    {
        return 'list products';
    }

}

// Controller
class ProductController {

    public function index() 
    {
        // 1. Lấy dữ liệu từ model
        $productModel = new ProductModel();
        $products = $productModel->showListProducts();
        
        // 2. Hiển thị dữ liệu lấy được ra view
        $view = new View();
        $view->render('views/product/index.php');
    }


}


// Instance Controller
$productController = new ProductController();
$productController->index();
