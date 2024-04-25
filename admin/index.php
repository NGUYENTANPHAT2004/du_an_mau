
<?php
include ("/xampp/htdocs/du_an_mau/model/pdo.php");
include ("/xampp/htdocs/du_an_mau/controller/UserController.php");
include ("/xampp/htdocs/du_an_mau/controller/ProductsController.php");
include ("/xampp/htdocs/du_an_mau/admin/view/header.php");
include ("/xampp/htdocs/du_an_mau/controller/CommentController.php");
include("/xampp/htdocs/du_an_mau/controller/CategoriesController.php");
include("/xampp/htdocs/du_an_mau/controller/CartController.php");
include("/xampp/htdocs/du_an_mau/controller/RaitingController.php");
$cat= new CategoriesController();
$productscontrol=new ProductController();
$userController=new UserController();
$commentcontroller =new CommentController ();
$cart_controller = new CartController();
$rating =new RaitingController();
session_start();
if(isset($_GET['act'])&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch($act){
        case 'product':
        include ("/xampp/htdocs/du_an_mau/admin/view/product.php");
        break; 
        case 'add_product':
        include ("/xampp/htdocs/du_an_mau/admin/Product/product_add.php");
        break;
        case 'product_form_add':
        $productscontrol->insert_Product_admin();
        break;
        case "upadate_product":
        include ("/xampp/htdocs/du_an_mau/admin/Product/edit_product.php");
        break;
        case "product_form_edit":
        $productscontrol->edit_product_admin();
        break;
        case "delete_product":
        $productscontrol->delete_product();
        break;
        case "delete_galery":
        $productscontrol->delete_galery();
        break;
        case "categories":
        include("/xampp/htdocs/du_an_mau/admin/view/category_view.php");
        break;
        case "add_categories":
        include("/xampp/htdocs/du_an_mau/admin/categories/add_category.php");
        break;
        case  "category_form_add":
        $cat->add_category();
        break;
        case "update_category" :
        $cat->update_category();
        break;
        case "set_category":
        include("/xampp/htdocs/du_an_mau/admin/categories/update_category.php");
        break;
        case "delete_category" :
            $id= isset($_GET["id"]) ? $_GET["id"] : '';
            $cat_tree = $productscontrol->cantegory();
            $cat->delete_category($id,$cat_tree);
            header("Location: index.php?act=categories");
            exit();
        break;
        case "user_admin":
        include ("/xampp/htdocs/du_an_mau/admin/view/user_view.php");
        break;
        case "user_detail":
        include ("/xampp/htdocs/du_an_mau/admin/user/user_detail.php");
        break;
        case "delete_user" :
        $userController->sort_delete_users(0);
        break;
        case "black_list_user" :
        include ("/xampp/htdocs/du_an_mau/admin/user/blacklist_user.php");
        break;
        case "restore":
        $userController->sort_delete_users(1);
        break;
        case "commment_view":
        include ("/xampp/htdocs/du_an_mau/admin/view/comment_view.php");
        break;
        case "delete_comment" :
        $commentcontroller->sort_delete_comment(0);
        break;
        case "restore_comment" :
        $commentcontroller->sort_delete_comment(1);
        break;
        case "black_list_comment" :
        include("/xampp/htdocs/du_an_mau/admin/comment/blacklist_comment.php");
        break; 
        case "order" :
        include("/xampp/htdocs/du_an_mau/admin/view/order_view.php");
        break; 
        case "update_order" :
        include("/xampp/htdocs/du_an_mau/admin/view/order_detail_admin.php");
        break;
        case "update_detail" :
        $cart_controller->update_detail();
        break;
        case "delete_order" :
        $cart_controller->delete_order();
        break;
        case "set_admin":
        $userController->set_admin();
        break;
        case "search_product":
        $productscontrol->search_product_admin();
        break;
        case "search_user" :
        $userController->search_user();
        break;
        case "search_comment" :
        $commentcontroller->search_comment();
        break;
    }
}else{
    include ("/xampp/htdocs/du_an_mau/admin/view/home.php");
}
include ("/xampp/htdocs/du_an_mau/admin/view/footer.php");
?>

        