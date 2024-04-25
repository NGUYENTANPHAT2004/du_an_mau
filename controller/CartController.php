<?php
include("/xampp/htdocs/du_an_mau/model/CartModel.php");
class CartController {
    public function delete_order(){
       $id=isset($_GET["id"])?$_GET["id"] : "";
       $cartmodel=new CartModel();
       $cartmodel->delete_order_admin($id);
       header("Location: index.php?act=order");
       exit();
    }
   public function Cart_SESSION($add=false) {
    if(!isset($_SESSION["cart"])){
        $_SESSION["cart"]=[];
    }
    if(isset($_POST["cart_submit"])){
         foreach($_POST["quantily"] as $id => $value){
          if($add){   
            if (isset($_SESSION["cart"][$id])) {
              $_SESSION["cart"][$id] += $value;
          } else {
              $_SESSION["cart"][$id] = $value;
          }
          }else{
            $_SESSION["cart"][$id] = $value;
          }
         }     
    }
    if(!empty($_SESSION["cart"])){
        $cartmodel=new CartModel();
        $cartlist =  $cartmodel->add_to_cart(implode(",",array_keys($_SESSION["cart"])));
     //    header("Location: index.php?act=cart");
      }
    include("/xampp/htdocs/du_an_mau/view/cart_view.php");
   }
   public function delete_cart(){
       if(isset($_GET["id"])){
        unset($_SESSION["cart"][$_GET["id"]]);
       }
       header("Location: index.php?act=add_to_cart");
       exit();
   }
   public function update_cart(){
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      if (isset($_POST["productId"]) && isset($_POST["quantity"])) {
          $productId = $_POST["productId"];
          $quantity = $_POST["quantity"];
         if(isset($_SESSION["cart"][$productId])){
          $_SESSION["cart"][$productId]=$quantity;

         }
      }
    //   if (isset($_POST["size"]) && isset($_POST["price"])) {
      
    //       $size = $_POST["size"];
    //       $price = $_POST["price"];
      
    //       $_SESSION['cart']["price"] = $price;
      
    //       echo 'success';
    //   }
    
  }
   }
public function oder_check() {
  if(isset($_POST["check_out_oder"])) {
      $phone = ($_POST["phone"]);
      $address = ($_POST["address"]);
      $area = ($_POST["area"]);
      $total_money = ($_POST["total_money"]);
      $payment_method = ($_POST["optionsRadios"]);

      if(!empty($_SESSION["cart"])) {
          $cartModel = new CartModel();

          if(isset($_SESSION["user"])) {
              $cartModel->setCart_user($phone, $address, $area, $_SESSION["user"], $_SESSION["cart"], $total_money,$payment_method);
          } else {
              $name = ($_POST["name"]);
              $email =($_POST["email"]);
              $cartModel->setCart($phone, $address, $area, $name, $email, $_SESSION["cart"], $total_money,$payment_method);
          }

          unset($_SESSION["cart"]);
      } else {
          echo "<script>alert('Không có sản phẩm trong giỏ hàng')
          window.location.href='index.php?act=add_to_cart';
          </script>";
      }
  }
}
public function get_order_details(){
     $id=isset($_GET["id"])? $_GET["id"] : "";
     $cartModel = new CartModel();
     $list= $cartModel->get_order_detail($id);
     return $list;
}
public function get_order_user(){
    if(isset($_SESSION["user"])) {
        $id_user= $_SESSION["user"]["user_id"];
    }
    $cartModel = new CartModel();
    $list= $cartModel->get_order_user($id_user);
    return $list;
}
public function get_orders_user_admin($offset,$per_page){
    $cartModel = new CartModel();
    $list= $cartModel->get_orders_user_admin($offset,$per_page);
    return $list;
}
public function update_detail(){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id= isset($_GET["id"]) ? $_GET["id"] : "";
        $selected = $_POST["status_order"];
        $cartModel = new CartModel();
        $cartModel->update_status_details($selected,$id);
        echo "<script>
        alert('cập nhật thành công');
        window.location.href='index.php?act=order';
        </script>";
        exit();
    }
}
public function update_status_order_detail(){
    $id= isset($_GET["id"]) ? $_GET["id"] : "";
    $cartModel = new CartModel();
    $cartModel->update_status_details_delete($id);
    header("Location: index.php?act=bill");
    exit();
}
public function get_order_chart(){
    $cartModel = new CartModel();
    $list= $cartModel->get_order_chart();
    return $list;

}
public function row_cat(){
    $cartModel = new CartModel();
    $list= $cartModel->get_row_cat();
    return $list;
}
}



?>