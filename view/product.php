<h1 style="
    color: red;
    margin: 10px 30px;">Sản Phẩm</h1>
     <?php
    
     if(isset($_GET["page"]) && $_GET["per_page"]){
        $page = $_GET["page"];
        $per_page = $_GET["per_page"];
     }else{
        $page = 1;
        $per_page = 12;
     }
     $offset= ($page-1) * $per_page;
     $sort = isset($_GET['sort']) ? $_GET['sort'] : '';
     $sale = isset($_GET['is_on_sale']) ? $_GET['is_on_sale'] : "";
     $sort_product = isset($_GET['sort_product']) ? $_GET['sort_product'] : "";
     if (!empty($_GET['sort'])) {
        $numrow=$productscontrol->row();
        $list_product= $productscontrol->showProducts_price($offset,$per_page,$sort);
     } else if(!empty($_GET['is_on_sale'])){
        $numrow=$productscontrol->row_sale();
        $list_product= $productscontrol->showProducts_sale($offset,$per_page,$sale);
     }else if(!empty($_GET['sort_product'])){
      $numrow=$productscontrol->row();
      $list_product= $productscontrol->show_product_sort($offset,$per_page,$sort_product);
     }else{ 
        $numrow=$productscontrol->row();
        $list_product= $productscontrol->showProducts($offset,$per_page);
      }
     $total_page=ceil($numrow / $per_page);
     ?>
<div class="grid-colum-10">
     <div class="home-filter">
        <span class="hom-filter__label">Sắp xếp theo</span>
        <a class="btn" href="index.php?act=product_view&is_on_sale=1">Giảm giá</a> 
        <a class="btn" href="index.php?act=product_view&sort_product=desc">Mới nhất</a>
        <div class="selec-input">
           <span class="select-input_label">Giá</span>
           <i class="fas fa-angle-down"></i>
           <ul class="select-input__list">
               <li class="select-input__item">
                <a class="selec-input__link" href="index.php?act=product_view&sort=asc">
                    Giá : Thấp đến cao
                </a>
               </li>
               <li class="select-input__item"></li>
               <a class="selec-input__link" href="index.php?act=product_view&sort=desc">
                Giá : Cao đến thấp
            </a>
        </li>
           </ul>
        </div>
        <div class="home-filter_page">
           <span class="home-filter__page-num">
              <span class="home-filter__page-current">
                <a style="text-decoration: none; color: red;"  href=""><?= $page ?></a>
              /</span>
              <a style="text-decoration: none;" href=""><?= $total_page?></a>
           </span>
           <div class="home-filter__page-control">
           <a href="index.php?act=product_view&page=<?= $page > 1 ? $page - 1 : $total_page ?>&per_page=12&sort=<?= $sort ?>&is_on_sale=<?= $sale ?>&sort_product=<?= $sort_product ?>" class="home-filter__page-icon">
    <i class="fas fa-angle-left"></i>
    </a>

<a href="index.php?act=product_view&page=<?= $page < $total_page ? $page + 1 : 1 ?>&per_page=12&sort=<?= $sort ?>&is_on_sale=<?= $sale ?>&sort_product=<?= $sort_product ?>" class="home-filter__page-icon">
    <i class="fas fa-angle-right"></i>
</a>
           </div>
        </div>
     </div>
     <div id="products" class="product-content">
     <?php
     foreach ($list_product as $key) {     
            
            ?>
     <div class="product-item">
        <div class="product-image">
        <?php
    $avatarPath = "admin/" . $key["avatar"];
    if (file_exists($avatarPath)) {
        echo '<img style="
    width: 80%;
   height: 120px;
        " src="' . $avatarPath . '"  alt="">';
    } else {
        echo '<p>Sản phẩm không có ảnh</p>';
    }
    ?>
   
        </div>
        <div class="product-top-box">
              <h2 class="name"><a href="index.php?act=products_detail&&id=<?= $key["product_id"] ?>"><?=  $key["product_name"] ?></a></h2>
              <div class="price">
                <span class="price-new">
                <?= number_format($key["price"], 0, ',', '.') . ' đ'; ?>
                 </span>
                <span class="text-line_thought">
                <?= ($key["is_on_sale"] == 1) ? number_format($key["price_old"], 0, ',', '.') . ' đ' : ""; ?>           
                
                </span>
        </div>
        <form class="button" action="index.php?act=add_to_cart" method="post">
        <input type="hidden" value="1"  name="quantily[<?= $key["product_id"]?>]">
        <button class="btn btn-default btn-add-cart" type="submit" name="cart_submit">Mua ngay</button>
         </form>
        </div>
    </div>
    <?php }  ?>
   </div>
   
</div>

   
</div>
<style>
    .grid-colum-10{
        margin: 30px 0px;
    }
    h1{
        margin-top: 30px !important;
    }
</style>