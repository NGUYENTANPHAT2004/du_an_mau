<?php
include "model/pdo.php";
include ("/xampp/htdocs/du_an_mau/controller/CartController.php");
include 'controller/UserController.php';
include '/xampp/htdocs/du_an_mau/controller/ProductsController.php';
include ("/xampp/htdocs/du_an_mau/controller/CommentController.php");
include ("/xampp/htdocs/du_an_mau/controller/CategoriesController.php");
include("/xampp/htdocs/du_an_mau/controller/RaitingController.php");
$userController = new UserController();
$productscontrol=new ProductController();
$commentcontroller = new CommentController();
$categoryController = new CategoriesController();
$cart_controller = new CartController();
$rating = new RaitingController();
session_start();
include "view/header.php";
if(isset($_GET['act'])&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch($act){
        // case "dn":
        // include "/xampp/htdocs/du_an_1/client/users/login.php";
        // break;
        // case "dk":
        //     include "/xampp/htdocs/du_an_1/client/users/register.php";
        //     break;
        // case "quenmk":
        //     include "/xampp/htdocs/du_an_1/client/users/updatepassword.php";
        //     break;
        //     case "capnhat":
        //         include "/xampp/htdocs/du_an_1/client/users/updateuser.php";
        //         break;
        case 'register':
        $userController->register();
        break;
        case 'login':
        $userController->login();   
        break;
        case "logout":
        $userController->logout();
        break;
        case "forgotpassword":
        $userController->forgotPassword();
        break;
        case "updatepassword":
        $userController->update_user();
        break;
        //  TÀI KHOẢN Client
        case "intro":
        include("/xampp/htdocs/du_an_mau/view/intro.php");
        break;
        case "contact":
        include("/xampp/htdocs/du_an_mau/view/contact.php");
        break;
        case "rules" :
        include("/xampp/htdocs/du_an_mau/view/rules.php");
        break;
        //giao diện
        case "search":
        include("/xampp/htdocs/du_an_mau/view/search.php");
        break;
        case "product_view" :
        include("/xampp/htdocs/du_an_mau/view/product.php");
        break;
        case "products_detail":
        include("/xampp/htdocs/du_an_mau/client/Products/Products_detail.php");
        break;
        case "comment" :
        $commentcontroller->insertComment();
        break;
        case "add_to_cart" :
        $cart_controller->Cart_SESSION(true);
        break;
        case "cart" :
        include("/xampp/htdocs/du_an_mau/view/cart_view.php");
        break;
        case "delete_cart" :
        $cart_controller->delete_cart();
        break;
        case "checkout" :
        include("/xampp/htdocs/du_an_mau/view/check_out.php");
        break;
        case "update_cart":
        $cart_controller->update_cart();
        break;
        case "ordercheck" :
        $cart_controller->oder_check();
        break;
        case "order_details" :
        include("/xampp/htdocs/du_an_mau/view/order_detail.php");
        break;
        case "bill" :   
        include("/xampp/htdocs/du_an_mau/view/detail_order_user.php");
        break;
        case  "show_cate_product" : 
        include("/xampp/htdocs/du_an_mau/view/product_with_category_view.php");
        break;
        case "rating_order" :
        $rating->set_rating();
        break;
        case "delete_order_detail" :
        $cart_controller->update_status_order_detail();
        break;
        case "login_admin" :
        $userController->login_admin();
        break;
    }
}else{
    include "view/home.php";
}

include "view/footer.php";

?>