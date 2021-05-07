<?php 
  //load LayoutTrangChu.php
$this->layoutPath = "LayoutTrangTrong.php";
$category_id = isset($_GET["category_id"])&&is_numeric($_GET["category_id"])?$_GET["category_id"]:0;
?>
<div class="row container div-breadcrumb">
      <p id="breadcrumbs"><span><span><a href="trang-chu" >Trang chủ</a> » <span class="breadcrumb_last" aria-current="page"><?php echo $this->getCategory($category_id); ?></span></span></span></p></div>
      
<div class="shop-page-title category-page-title page-title ">

  <div class="page-title-inner flex-row  medium-flex-wrap container">
    <div class=" flex-col flex-grow medium-text-center container section-category section-title-container"><h1 class="section-title section-title-normal"><b></b><span class="section-title-main"><?php echo $this->getCategory($category_id); ?></span><b></b></h1></div>
    <div class="flex-col medium-text-center" style="top:2px;
    position: absolute;
    right: 14px;">
  <p class="woocommerce-result-count hide-for-medium"><?php echo "Hiển thị " . $this->modelTotal() . " Kết quả"; ?></p>
<div class="woocommerce-ordering">
  <select name="orderby" class="orderby" aria-label="Đơn hàng của cửa hàng" onchange="location.href = 'index.php?controller=products&action=categories&category_id=<?php echo $category_id ?>&order='+this.value;">
          <option value="menu_order"  selected='selected'>Thứ tự mặc định</option>
          <option value="nameAsc" >Thứ tự A-Z</option>
          <option value="nameDesc" >Thứ tự Z-A</option>
          <option value="date" >Mới nhất</option>
          <option value="priceAsc" >Thứ tự theo giá: thấp đến cao</option>
          <option value="priceDesc" >Thứ tự theo giá: cao xuống thấp</option>
      </select>
      <input type="hidden" name="paged" value="1" />
</div>
     </div><!-- .flex-right -->

  </div><!-- flex-row -->
</div><!-- .page-title -->

<div class="row category-page-row">

  <div class="col large-9">
    <div class="shop-container">

      <div class="woocommerce-notices-wrapper"></div>
      <div class="products row row-small large-columns-5 medium-columns-3 small-columns-2 has-equal-box-heights equalize-box">

        <?php foreach($data as $rows): ?>

          <div class="product-small col has-hover product type-product post-1071 status-publish first instock product_cat-laptop product_cat-laptop-acer has-post-thumbnail sale shipping-taxable purchasable product-type-variable has-default-attributes">
            <div class="col-inner">
              <?php if($rows->discount != 0): ?>
              <div class="badge-container absolute left top z-1">
                <div class="callout badge badge-square"><div class="badge-inner secondary on-sale"><span class="onsale"><?php echo "-". $rows->discount . "%"; ?></span></div></div>
              </div>
              <?php endif; ?>
              <div class="product-small box ">
                <div class="box-image">
                  <div class="image-none">
                    <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>">
                      <img width="168" height="168" src="assets/upload/products/<?php echo $rows->photo; ?>" data-src="assets/upload/products/<?php echo $rows->photo; ?>" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="" data-srcset="assets/upload/products/<?php echo $rows->photo; ?> 168w, assets/upload/products/<?php echo $rows->photo; ?> 100w, assets/upload/products/<?php echo $rows->photo; ?> 510w, assets/upload/products/<?php echo $rows->photo; ?> 300w, assets/upload/products/<?php echo $rows->photo; ?> 150w, assets/upload/products/<?php echo $rows->photo; ?> 768w, assets/upload/products/<?php echo $rows->photo; ?> 783w" sizes="(max-width: 168px) 100vw, 168px" />        
                    </a>
                  </div>
                  <div class="image-tools is-small top right show-on-hover"></div>
                  <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                  <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
                </div>
                <div class="box-text box-text-products">
                  <div class="title-wrapper"><p class="name product-title woocommerce-loop-product__title"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></p>
                  </div>
                  <div class="price-wrapper">
                    <?php if($rows->discount != 0): ?>
                    <span class="price"><del><span class="woocommerce-Price-amount amount"><bdi><?php echo number_format($rows->price); ?><span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> <ins><span class="woocommerce-Price-amount amount"><bdi><?php echo number_format($rows->price -($rows->price*$rows->discount)/100); ?><span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                    <?php else: ?>
                      <span class="price"><ins><span class="woocommerce-Price-amount amount"><bdi><?php echo number_format($rows->price); ?><span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins></span>
                    <?php endif; ?>
                  </div>    
                </div>
              </div>
              <a class="cdc_shop_loop_box" href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>">
                <div class="cdc_thetip" >
                  <strong class="cdc_thetitle"><?php echo $rows->name; ?></strong>
                  <div class="cdc_thecontent">
                    <div class="price">
                      <ins><span class="woocommerce-Price-amount amount"><bdi><?php echo number_format($rows->price-($rows->price*$rows->discount)/100); ?><span class="woocommerce-Price-currencySymbol">₫</span></bdi></span></ins>
                    </div>
                    <!-- short description -->
                      <?php echo $rows->description; ?>
                    <!-- end short description -->
                  </div>
                </div>
              </a>  
            </div>
          </div>
        <?php endforeach; ?>
      </div><!-- row -->
      <!-- paging -->
        <style type="text/css">
        .pagination { margin:20px;margin-left: -10px; display: flex; padding-left: 0; list-style: none; border-radius: 0.35rem;}
        .page-link { position: relative; display: block; padding: 0.5rem 0.75rem; margin-left: -1px; line-height: 1.25; color: #4e73df; background-color: #fff; border: 1px solid #dddfeb;}
        .page-link:hover { z-index: 2; color: #224abe;text-decoration: none; background-color: #eaecf4; border-color: #dddfeb;}
        .page-link:focus { z-index: 3; outline: 0; box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);}
        .page-item:first-child .page-link { margin-left: 0; border-top-left-radius: 0.35rem; border-bottom-left-radius: 0.35rem;}
        .page-item:last-child .page-link { border-top-right-radius: 0.35rem; border-bottom-right-radius: 0.35rem;}
        .page-item.active .page-link {z-index: 3; color: #fff; background-color: #4e73df; border-color: #4e73df;}
        .page-item.disabled .page-link { color: #858796; pointer-events: none; cursor: auto; background-color: #fff; border-color: #dddfeb; }
      </style>
      <ul class="pagination">
        <li class="page-item disabled"><a href="#" class="page-link">Trang</a></li>
        <?php for($i = 1; $i <=$numPage; $i++): ?>
        <li class="page-item"><a href="index.php?controller=products&action=categories&category_id=<?php echo $category_id; ?>&page=<?php echo $i; ?>" class = "page-link"><?php echo $i; ?></a></li>
      <?php endfor; ?>
      </ul>
        <!-- end paging --> 
    </div><!-- shop container -->
  </div><!-- col-fit  -->


<div class="large-3 col hide-for-medium ">
    <div id="shop-sidebar" class="sidebar-inner">
      <aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><span class="widget-title shop-sidebar">Danh mục sản phẩm</span><div class="is-divider small"></div>
        <ul class="product-categories">
          <?php $categories = $this-> modelGetCategories();?>
           <?php foreach ($categories as $rows): ?>
            <li class="cat-item cat-item-15"><a href="san-pham/<?php echo Unicode::removeUnicode($rows->name); ?>/<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a>
              <ul class='children'>
                <?php $categoriesSub = $this-> modelGetCategoriesSub($rows->id);?>
                  <?php foreach ($categoriesSub as $rowsSub): ?>
                    <li class="cat-item cat-item-57"><a href="san-pham/<?php echo Unicode::removeUnicode($rowsSub->name); ?>/<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?></a></li>
                  <?php endforeach; ?>
              </ul>
            </li>
          <?php endforeach; ?>
    </ul></aside>     </div><!-- .sidebar-inner -->
  </div><!-- large-3 -->
</div>