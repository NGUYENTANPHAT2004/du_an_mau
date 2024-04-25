<?php
include ("/xampp/htdocs/du_an_mau/model/ProductsModel.php");

class ProductController {
    
    public function search_product_admin(){
        if($_SERVER["REQUEST_METHOD"] =="POST"){
         $_SESSION["filter_product"]= $_POST;
    if(!empty($_SESSION["filter_product"])){
        $where= "";
        foreach($_SESSION["filter_product"] as $key => $value){
        if(!empty($value)){
             switch($key){
                case "product_name":
                $where .= (!empty($where)) ? " AND `$key` LIKE '%$value%'" : " `$key` LIKE '%$value%'";
                break;
                default:
                $where .= (!empty($where)) ? " AND `$key` = $value" : " `$key` = $value";
                break;
             }
        }
        }
    }
    if(!empty($where)){
        $searchParams = http_build_query(['where' => $where]);
        header("Location: index.php?act=product&$searchParams");
        exit();
    }else{
        echo "<script>
        alert('Cần nhập giá trị tìm kiếm')
        window.location.href='index.php?act=product';
        </script>";
    }
    }
}
    public function delete_galery(){
        $id= isset($_GET["id"]) ? $_GET["id"] : "";
        $product_id= isset($_GET["product_id"]) ? $_GET["product_id"] : "" ;
        $productModel = new ProductsModel();
        ($productModel ->delete_galery_id($id));
        header("Location: index.php?act=upadate_product&id=$product_id");
        exit();
    }
    public function edit_product_admin(){
        $id= isset($_GET["id"]) ?$_GET["id"] : "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $product_name = isset($_POST["productName"]) ? $_POST["productName"] : "";
            $price = isset($_POST["price"]) ? $_POST["price"] : "";
            $productDescription = isset($_POST["productDescription"]) ? $_POST["productDescription"] : "";
            $sale = isset($_POST["sale_price"]) ? $_POST["sale_price"] : "";
            $category = isset($_POST["category_id"]) ? $_POST["category_id"] : "";
            $is_on_sale= isset($_POST["sale_select"]) ? $_POST["sale_select"] : "";
            if (isset($_FILES["image"])) {
                $target_dir = "upload/";
                if (!file_exists($target_dir)) {
                    mkdir($target_dir, 0777, true);
                }                
                $newFilePath = $target_dir . basename($_FILES["image"]["name"]);
                move_uploaded_file($_FILES["image"]['tmp_name'], $newFilePath);
                echo "<script>
                alert('Cập nhật thành công')
                window.location.href='index.php?act=product';</script>";
         }else {
            if(isset($_POST["curent_image"])){
                $base =basename($_POST["curent_image"]);
                $newFilePath = 'upload/ '.$base.'';
                echo "<script>
                alert('Cập nhật thành công')
                window.location.href='index.php?act=product';
                </script>";
                }
         }
         $newPaths = [];
         if (!empty($_FILES["files"]["name"][0])) {
            foreach ($_FILES["files"]["name"] as $key => $filename) {
                $tmpPaths = $_FILES["files"]["tmp_name"][$key];
                $Path = 'upload/' . $filename;
                move_uploaded_file($tmpPaths, $Path);
                array_push($newPaths,$Path);
            }
         }
         $productModel = new ProductsModel();
         $productModel ->update_product_admin($id,$product_name,$price,$productDescription,$sale,$newFilePath,$category,$newPaths,$is_on_sale);
        }

    } 

    public function list_galery($update_id){
        $productModel = new ProductsModel();
        $list=$productModel->list_galery_by_id($update_id);
        return $list;
    }
    public function products_list_of_admin($update_id) {
        $productModel = new ProductsModel();
        $list=$productModel->list_products_by_id($update_id);
        return $list;
    }
    public function showProducts($offset,$limit) {
        $productModel = new ProductsModel();
        $products = $productModel->listProducts_pagination($offset,$limit);
        return $products;
    }
    public function showProducts_price($offset,$per_page,$sort){
        $productModel = new ProductsModel();
        $products = $productModel->listProducts_pagination_sort($offset,$per_page,$sort);
        return $products;
    }
    public function showProducts_sale($offset,$limit,$is_on_sale){
        $productModel = new ProductsModel();
        $products = $productModel->listProducts_pagination_sale($offset,$limit,$is_on_sale);
        return $products;
    }
    public function row(){
        $productModel = new ProductsModel();
        $row_table=$productModel->row_products();
        return $row_table;

    }
    public function row_sale(){
        $productModel = new ProductsModel();
        $row_table=$productModel->row_products_sale();
        return $row_table;

    }
    public function insert_Product_admin(){
        $productModel = new ProductsModel();
         if($_SERVER['REQUEST_METHOD'] == 'POST'){
             $product_name  =  $_POST["productName"];
             $img=$_FILES["image"];
             $product_price=$_POST["price"];
             $productDescription=$_POST["productDescription"];
             $cantegory_product=$_POST["category_id"];
             $sale_select=$_POST["sale_select"];
             if(isset($_POST["sale_price"])){
                $sale_price=$_POST["sale_price"];
             }
             if (isset($img)) {
                $target_dir = "upload/";
                if (!file_exists($target_dir)) {
                    mkdir($target_dir, 0777, true);
                }                
                $newFilePath = $target_dir . basename($_FILES["image"]["name"]);
                move_uploaded_file($img['tmp_name'], $newFilePath);
         }
         $newPaths = [];
         if (!empty($_FILES["files"]["name"][0])) {
            foreach ($_FILES["files"]["name"] as $key => $filename) {
                $tmpPaths = $_FILES["files"]["tmp_name"][$key];
                $Path = 'upload/' . $filename;
                move_uploaded_file($tmpPaths, $Path);
                array_push($newPaths,$Path);
            }
         }
         $productModel->insert_product($product_name,$product_price,$productDescription,$cantegory_product,$sale_price,$sale_select,$newFilePath,$newPaths);
         header("Location: index.php?act=product");
         exit();
    }
    }

    public function cantegory(){
        $productModel = new ProductsModel();
        $list_category = $productModel->list_cantegory();
        return $list_category;
    }
    public function search_product(){
        $productModel = new ProductsModel();
        $search = isset($_POST["search"]) ? trim($_POST["search"]) : "";
        $search_input = $productModel->search_product($search);
        return $search_input;
        }
    
    public function delete_product()  {
    $productModel = new ProductsModel();
    $product_id = isset($_GET["id"]) ? $_GET["id"] : "";
    $productModel->delete_product($product_id);
    



    }
    public function show_product_sort($offset,$per_page,$sort_product){
        $productModel = new ProductsModel();
        $products = $productModel->listProducts_pagination_sort_by_id($offset,$per_page,$sort_product);
        return $products;
    }
}




?>
