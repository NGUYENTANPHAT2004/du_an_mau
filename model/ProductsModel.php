<?php
 class ProductsModel 
{
    public function listProducts_pagination_sort_by_id($offset,$per_page,$sort_product){
        $query = "SELECT * FROM products ORDER BY product_id $sort_product LIMIT $per_page offset $offset";
        $list_product=pdo_query($query);
        return $list_product;

    }
    public function delete_galery_id($id){
        $sql = "DELETE FROM `galery` WHERE `galery_id`=$id";
        pdo_query($sql);
    }
    public function update_product_admin($id,$product_name,$price,$productDescription,$sale,$newFilePath,$category,$newPaths,$is_on_sale){
       $sql= "UPDATE `products` SET `product_name`='$product_name',`descritipion`='$productDescription',`price`='$price',`category_id`='$category',`price_old`='$sale',`is_on_sale`='$is_on_sale',`avatar`='$newFilePath' WHERE product_id = $id";   
       pdo_query($sql);
       $this->update_galery($newPaths,$id);
    }
    public function update_galery($newPaths,$id){
        foreach ($newPaths as $key) {
            $insert_path="INSERT INTO `galery`(`product_id`, `image_url`) VALUES ('$id','$key')";
            pdo_query($insert_path);
            }
    }
    public function list_galery_by_id($update_id){
        $query="SELECT * FROM galery where product_id =$update_id";
        $list=pdo_query($query);
        return $list;
    }
    public function list_products_by_id($update_id){
        $query="SELECT * FROM products where product_id =$update_id";
        $list=pdo_query_one($query);
        return $list;
    }
    public function listProducts_pagination($offset,$limit){
        $list="SELECT products.product_id,products.avatar,products.is_on_sale,products.product_name, products.descritipion, products.price, products.category_id, products.price_old
        FROM products LIMIT $limit OFFSET $offset"; 
        $list_product=pdo_query($list);
        return $list_product;
    }
    public function listProducts_pagination_sort($offset,$limit,$sort){
        $query = "SELECT * FROM products ORDER BY price $sort LIMIT $limit offset $offset";
        $list_product=pdo_query($query);
        return $list_product;
    }
    public function listProducts_pagination_sale($offset,$limit,$is_on_sale){
        $is_sale = "SELECT * FROM products where is_on_sale = $is_on_sale LIMIT $limit offset $offset";
        $list_product=pdo_query($is_sale);
        return $list_product;
    }
    public function row_products(){
        $list_products="SELECT COUNT(*) as total FROM products";
        $row=pdo_query_one($list_products);
        return $row["total"];
    }
    public function row_products_sale(){
        $list_products="SELECT COUNT(*) as total FROM products where is_on_sale = 1";
        $row=pdo_query_one($list_products);
        return $row["total"];
    }
    public function list_cantegory(){
        $list="SELECT * FROM `categories`";
        $list_cantegory=pdo_query($list);
        return $list_cantegory;
    }

    public function insert_product($product_name,$product_price,$productDescription,$cantegory_product,$sale_price,$sale_select,$newFilePath,$newPaths){
        $conn=pdo_get_connection();
        $insert="INSERT INTO `products`(`product_name`, `descritipion`, `price`, `category_id`, `price_old`, `is_on_sale`, `avatar`) VALUES ('$product_name','$productDescription','$product_price','$cantegory_product','$sale_price','$sale_select','$newFilePath')";
        $conn->query($insert);
        $last_id = $conn->lastInsertId();
        $this->insert_galery($newPaths,$last_id);
    }
    private function insert_galery($newPaths,$last_id){
        foreach ($newPaths as $key) {
        $insert_path="INSERT INTO `galery`(`product_id`, `image_url`) VALUES ('$last_id','$key')";
        pdo_query($insert_path);
        }
    }
    public function search_product($key){
        $sql = "SELECT * FROM `products` WHERE product_name LIKE '%$key%'";
        $search_product=pdo_query($sql);
        return $search_product;
    }
    public function delete_product($key){
     $sql= "DELETE  from `products` WHERE product_id = $key";
     pdo_query($sql);
     header('location:index.php?act=product');
     exit();
    }
}
?>
