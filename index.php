<?php

// View
class View {

    public function render($path, $data) 
    {

        $dirRoot = __DIR__;
        $pathView = $dirRoot . '/views/' . $path;

        // tao ra bien tuong ung voi value khi loop qua moi phan tu mang
        extract($data);

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
        $view->render(
            'product/index.php',
            [
                'products' => $products
            ]
        );
    }


}


// Instance Controller
$productController = new ProductController();
$productController->index();

// routing -> math (path) --> action (controller)
