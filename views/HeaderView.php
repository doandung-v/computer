<header id="header" class="header has-sticky sticky-jump">
  <div class="header-wrapper">
    <div id="top-bar" class="header-top hide-for-sticky nav-dark">
      <div class="flex-row container">
        <div class="flex-col hide-for-medium flex-left">
          <ul class="nav nav-left medium-nav-center nav-small  nav-divided">
            <li class="html custom html_topbar_left"><div class="services-top">
      <a href="#"><i class="fa fa-usd" aria-hidden="true"></i> Cam kết giá tốt nhất</a>
      <a href="#"><i class="fa fa-truck" aria-hidden="true"></i> Miễn phí vận chuyển</a>
      <a href="#"><i class="fa fa-handshake-o" aria-hidden="true"></i> Thanh toán khi nhận hàng</a>

      <a href="#"><i class="fa fa-history"></i> Bảo hành tận nơi</a>
    </div></li>          </ul>
      </div>

      <div class="flex-col hide-for-medium flex-center">
          <ul class="nav nav-center nav-small  nav-divided"></ul>
      </div>

<div class="flex-col hide-for-medium flex-right">
 <ul class="nav top-bar-nav nav-right nav-small  nav-divided">
  <?php if(isset($_SESSION["customer_email"]) == false): ?>
    <li class="account-item has-icon">
      <a href="dang-nhap"
      class="nav-top-link nav-top-not-logged-in is-small" data-open="#login-form-popup">
      <span>Đăng nhập</span>
      </a>
    </li>
    <li class="account-item has-icon">
      <a href="dang-ky"
      class="nav-top-link nav-top-not-logged-in is-small" >
      <span>Đăng ký</span>
      </a>
    </li>
    <?php else: ?>
      <a href="#">Xin chào <?php echo $_SESSION["customer_email"]; ?></a>&nbsp; &nbsp; <a href="index.php?controller=account&action=logout">Đăng xuất</a>
    <?php endif; ?>

    <li class="cart-item has-icon has-dropdown">
      <a href="gio-hang" title="Giỏ hàng" class="header-cart-link is-small">
        <?php 
            $numberProduct = 0;
            if(isset($_SESSION["cart"])){
              foreach($_SESSION["cart"] as $product){$numberProduct++;}
            }
        ?>
        <span class="header-cart-title">Giỏ hàng</span>
        <i class="icon-shopping-basket" data-icon-label="<?php echo $numberProduct; ?>"></i>
      </a>
      <ul class="nav-dropdown nav-dropdown-default">
        <li class="html widget_shopping_cart">
          <div class="widget_shopping_cart_content">
            <?php if($numberProduct > 0): ?>
              <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                <?php foreach($_SESSION["cart"] as $product): ?>
                  <li class="woocommerce-mini-cart-item mini_cart_item">
                  <a href="index.php?controller=cart&action=delete&id=<?php echo $product['id']; ?>" class="remove remove_from_cart_button" aria-label="Xóa sản phẩm này" data-product_id="1258" data-cart_item_key="26588e932c7ccfa1df309280702fe1b5" data-product_sku="">&times;</a>                      
                  <a href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>">
                    <img width="168" height="168" src="" data-src="assets/upload/products/<?php echo $product['photo']; ?>" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="" data-srcset="assets/upload/products/<?php echo $product['photo']; ?> 168w, assets/upload/products/<?php echo $product['photo']; ?> 100w, assets/upload/products/<?php echo $product['photo']; ?> 510w, assets/upload/products/<?php echo $product['photo']; ?> 300w, assets/upload/products/<?php echo $product['photo']; ?>1024w, assets/upload/products/<?php echo $product['photo']; ?> 150w, assets/upload/products/<?php echo $product['photo']; ?> 768w, assets/upload/products/<?php echo $product['photo']; ?> 1536w, assets/upload/products/<?php echo $product['photo']; ?> 2000w" sizes="(max-width: 168px) 100vw, 168px" /><?php echo $product['name']; ?>
                  </a>
                  <span class="quantity"><?php echo $product['number']; ?> &times; <span class="woocommerce-Price-amount amount"><bdi><?php echo number_format($product['price']) ; ?><span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>        
                  </li>
                <?php endforeach; ?>
              </ul>
             
              <p class="woocommerce-mini-cart__buttons buttons"><a href="gio-hang" class="button wc-forward">Xem giỏ hàng</a><a href="index.php?controller=cart&action=checkout" class="button checkout wc-forward">Thanh toán</a>
              </p>  
            <?php else: ?>
              <p class="woocommerce-mini-cart__empty-message">Chưa có sản phẩm trong giỏ hàng.</p>
            <?php endif; ?>
          </div>
        </li>
      </ul>
    </li>
  </ul>
</div>

<div class="flex-col show-for-medium flex-grow">
  <ul class="nav nav-center nav-small mobile-nav  nav-divided">
    <li class="html custom html_topbar_left"><div class="services-top">
      <a href="#"><i class="fa fa-usd" aria-hidden="true"></i> Cam kết giá tốt nhất</a>
      <a href="#"><i class="fa fa-truck" aria-hidden="true"></i> Miễn phí vận chuyển</a>
      <a href="#"><i class="fa fa-handshake-o" aria-hidden="true"></i> Thanh toán khi nhận hàng</a>

      <a href="#"><i class="fa fa-history"></i> Bảo hành tận nơi</a>
    </div></li>          </ul>
      </div>
      
    </div>
</div>
<div id="masthead" class="header-main hide-for-sticky">
      <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">

          <!-- Logo -->
          <div id="logo" class="flex-col logo">
            <!-- Header logo -->
<a href="trang-chu" title="Chuyên mua bán pc &#8211; laptop cấu hình cao - Dịch vụ thiết kế web chuẩn SEO uy tín, cung cấp theme Wordpress dựng sẵn nhiều lĩnh vực và tối ưu cho mọi thiết bị" rel="home">
    <img width="374" height="91" src="assets/frontend/wp-content/uploads/2020/09/logo.png" class="header_logo header-logo" alt="Chuyên mua bán pc &#8211; laptop cấu hình cao"/><img  width="374" height="91" src="assets/frontend/wp-content/uploads/2020/09/logo.png" class="header-logo-dark" alt="Chuyên mua bán pc &#8211; laptop cấu hình cao"/></a>
          </div>

<!-- Mobile Left Elements -->
<div class="flex-col show-for-medium flex-left">
  <ul class="mobile-nav nav nav-left ">
    <li class="nav-icon has-icon">
      <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">
        <i class="icon-menu" ></i>
      </a>
    </li>            
  </ul>
</div>

<!-- Left Elements -->
<div class="flex-col hide-for-medium flex-left flex-grow">
  <ul class="header-nav header-nav-main nav nav-left " >
    <li class="header-search-form search-form html relative has-icon">
      <div class="header-search-form-wrapper">
        <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
          <div class="flex-row relative">
            <div class="flex-col flex-grow" style="position: relative;">
              <label class="screen-reader-text" for="woocommerce-product-search-field-0">Tìm kiếm:</label>
              <input type="search" id="key" class="search-field mb-0" placeholder="Nhập sản phẩm cần tìm..." value="" name="s" />
              <div class="smart-search">
                <ul></ul>
              </div>
              <style type="text/css">
              .smart-search img{width: 70px;}
              .smart-search{position: absolute; width: 100%; z-index: 1; display: none; max-height: 350px; overflow: scroll;}
              .smart-search ul{padding: 0px; margin: 0px; list-style: none;}
              .smart-search ul li{background: white; border-bottom: 1px solid #dddddd; margin: 0px; height: 70px; line-height: 70px;}
              </style>
            </div>
            <div class="flex-col">
              <button type="submit" value="Tìm kiếm" class="ux-search-submit submit-button secondary button icon mb-0">
                <i class="icon-search" ></i>
              </button>
            </div>
            <script type="text/javascript">
              $(document).ready(function(){
                // khi gõ phím vào ô textbox
                $("#key").keyup(function(){
                  // llấy giá trị vừa nhập vào
                  var strKey = $("#key").val();
                  // hàm trim() loại bỏ khoảng trắng
                  strKey = strKey.trim();
                  if(strKey != ""){
                    // hiển thị thẻ html có class= smart-search
                    $(".smart-search").attr("style", "display:block");
                    //----
                    // ajax để lấy dữ liệu
                    $.ajax({
                      url: "index.php?controller=products&action=ajax&key="+strKey,
                      success: function( result ) {
                       // clear tất cả các thẻ li
                       $(".smart-search ul").empty();
                       $(".smart-search ul").append(result);
                      }
                    });
                    //----
                  } else 
                    $(".smart-search").attr("style", "display:none");
                });
              });
            </script>
          </div>
          <div class="live-search-results text-left z-top"></div>
        </div>  
      </div>
    </li>            
  </ul>
</div>

<!-- Right Elements -->
<div class="flex-col hide-for-medium flex-right">
  <ul class="header-nav header-nav-main nav nav-right ">
    <li class="html custom html_top_right_text">
      <a class="item hotline" href="tel:0961560888">
        <i class="icon fa fa-volume-control-phone"></i>
        <span>Mua hàng online</span><b>0374288371</b>
      </a>
    </li>            
  </ul>
</div>

<!-- Mobile Right Elements -->
<div class="flex-col show-for-medium flex-right">
  <ul class="mobile-nav nav nav-right ">
    <li class="cart-item has-icon">
      <a href="gio-hang" class="header-cart-link off-canvas-toggle nav-top-link is-small" data-open="#cart-popup" data-class="off-canvas-cart" title="Giỏ hàng" data-pos="right">
        <i class="icon-shopping-basket" data-icon-label="0"></i>
      </a>
      <!-- Cart Sidebar Popup -->
      <div id="cart-popup" class="mfp-hide widget_shopping_cart">
        <div class="cart-popup-inner inner-padding">
          <div class="cart-popup-title text-center">
            <h4 class="uppercase">Giỏ hàng</h4>
            <div class="is-divider"></div>
          </div>
          <div class="widget_shopping_cart_content">
            <p class="woocommerce-mini-cart__empty-message">Chưa có sản phẩm trong giỏ hàng.</p>
          </div>
          <div class="cart-sidebar-content relative"></div>  
        </div>
      </div>
    </li>
  </ul>
</div>
</div>
</div>
<div id="wide-nav" class="header-bottom wide-nav nav-dark flex-has-center hide-for-medium">
    <div class="flex-row container">

                        <div class="flex-col hide-for-medium flex-left">
                <ul class="nav header-nav header-bottom-nav nav-left ">
                                <div id="mega-menu-wrap"
                 class="ot-vm-click">
                <div id="mega-menu-title">
                  <i class="icon-menu"></i> Danh mục sản phẩm
                </div>
        
<!-- UberMenu [Configuration:main] [Theme Loc:mega_menu] [Integration:auto] -->
<a class="ubermenu-responsive-toggle ubermenu-responsive-toggle-main ubermenu-skin-none ubermenu-loc-mega_menu ubermenu-responsive-toggle-content-align-left ubermenu-responsive-toggle-align-full " tabindex="0" data-ubermenu-target="ubermenu-main-70-mega_menu-2"><i class="fas fa-bars" ></i>Menu</a>
<nav id="ubermenu-main-70-mega_menu-2" class="ubermenu ubermenu-nojs ubermenu-main ubermenu-menu-70 ubermenu-loc-mega_menu ubermenu-responsive ubermenu-responsive-default ubermenu-responsive-collapse ubermenu-vertical ubermenu-transition-shift ubermenu-trigger-hover_intent ubermenu-skin-none  ubermenu-bar-align-full ubermenu-items-align-auto ubermenu-bound ubermenu-disable-submenu-scroll ubermenu-sub-indicators ubermenu-retractors-responsive ubermenu-submenu-indicator-closes">
  <ul id="ubermenu-nav-main-70-mega_menu" class="ubermenu-nav" data-title="Menu danh mục">
    <?php 
      //load cap 1
      $categories = $this->modelGetCategories();
    ?>
      <?php foreach($categories as $rows): ?>
        <li id="menu-item-1359" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-item-has-children ubermenu-item-1359 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto ubermenu-has-submenu-drop ubermenu-has-submenu-mega" 
        ><a class="ubermenu-target ubermenu-target-with-icon ubermenu-item-layout-default ubermenu-item-layout-icon_left" href="san-pham/<?php echo Unicode::removeUnicode($rows->name); ?>/<?php echo $rows->id; ?>" tabindex="0">
          <i class="ubermenu-icon <?php echo "$rows->icon"; ?>" ></i>
          <span class="ubermenu-target-title ubermenu-target-text"><?php echo $rows->name; ?></span>
          <i class='ubermenu-sub-indicator fas fa-angle-down'></i></a>
          <ul  class="ubermenu-submenu ubermenu-submenu-id-1359 ubermenu-submenu-type-auto ubermenu-submenu-type-mega ubermenu-submenu-drop ubermenu-submenu-align-full_width"  >
            <?php 
              //load cap 2
              $categoriesSub = $this->modelGetCategoriesSub($rows->id);
            ?>
            <?php foreach($categoriesSub as $rowsSub): ?> 
              <li id="menu-item-1360" class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-item-1360 ubermenu-item-auto ubermenu-item-header ubermenu-item-level-1 ubermenu-column ubermenu-column-auto" >
                <a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="san-pham/<?php echo Unicode::removeUnicode($rowsSub->name); ?>/<?php echo $rowsSub->id; ?>">
                  <span class="ubermenu-target-title ubermenu-target-text"><?php echo $rowsSub->name; ?></span>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
    </li>
    <?php endforeach; ?>
  </ul>
  </nav>
<!-- End UberMenu -->
            </div>
                      </ul>
            </div>
            
                        <div class="flex-col hide-for-medium flex-center">
                <ul class="nav header-nav header-bottom-nav nav-center ">
                    <li id="menu-item-1309" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1309"><a href="ban-hang" class="nav-top-link"><i class="icon icon-nav-right-1"></i> Bán hàng trực tuyến</a></li>
<li id="menu-item-1308" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1308"><a href="mua-tra-gop" class="nav-top-link"><i class="icon icon-nav-right-2"></i> Mua trả góp</a></li>
<li id="menu-item-1311" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1311"><a href="tin-khuyen-mai" class="nav-top-link"><i class="icon icon-nav-right-3"></i> Khuyến mãi</a></li>
<li id="menu-item-1310" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1310"><a href="tin-tuc" class="nav-top-link"><i class="icon icon-nav-right-4"></i>Tin tức</a></li>
                </ul>
            </div>
            
                        <div class="flex-col hide-for-medium flex-right flex-grow">
              <ul class="nav header-nav header-bottom-nav nav-right ">
                   <li class="html custom html_topbar_right"><div class="div-km"><a class="deal" href="deal.html">
      <i class="icon icon-title-deal-nav"></i>
    </a></div></li>              </ul>
            </div>
            
            
    </div>
</div>

  <div id="flatsome-uber-menu" class="header-ubermenu-nav relative hide-for-medium" style="z-index: 9">
    <div class="full-width">
      
<!-- UberMenu [Configuration:main] [Theme Loc:primary] [Integration:api] -->
<a class="ubermenu-responsive-toggle ubermenu-responsive-toggle-main ubermenu-skin-none ubermenu-loc-primary ubermenu-responsive-toggle-content-align-left ubermenu-responsive-toggle-align-full " tabindex="0" data-ubermenu-target="ubermenu-main-70-primary-2"><i class="fas fa-bars" ></i>Menu</a>
<nav id="ubermenu-main-70-primary-2" class="ubermenu ubermenu-nojs ubermenu-main ubermenu-menu-70 ubermenu-loc-primary ubermenu-responsive ubermenu-responsive-default ubermenu-responsive-collapse ubermenu-vertical ubermenu-transition-shift ubermenu-trigger-hover_intent ubermenu-skin-none  ubermenu-bar-align-full ubermenu-items-align-auto ubermenu-bound ubermenu-disable-submenu-scroll ubermenu-sub-indicators ubermenu-retractors-responsive ubermenu-submenu-indicator-closes">
  <ul id="ubermenu-nav-main-70-primary" class="ubermenu-nav" data-title="Menu danh mục">
    <?php 
      $categories = $this->modelGetCategories();
     ?>
     <?php foreach($categories as $rows): ?>
    <li class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-item-has-children ubermenu-item-1359 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto ubermenu-has-submenu-drop ubermenu-has-submenu-mega" >
      <a class="ubermenu-target ubermenu-target-with-icon ubermenu-item-layout-default ubermenu-item-layout-icon_left" href="san-pham/<?php echo Unicode::removeUnicode($rows->name); ?>/<?php echo $rows->id; ?>" tabindex="0">
        <i class="ubermenu-icon fas fa-laptop" ></i>
        <span class="ubermenu-target-title ubermenu-target-text"><?php echo $rows->name; ?></span>
        <i class='ubermenu-sub-indicator fas fa-angle-down'></i>
      </a>
      <ul  class="ubermenu-submenu ubermenu-submenu-id-1359 ubermenu-submenu-type-auto ubermenu-submenu-type-mega ubermenu-submenu-drop ubermenu-submenu-align-full_width"  >
        <?php 
          $categoriesSub = $this->modelGetCategoriesSub($rows->id);
         ?>
         <?php foreach ($categoriesSub as $rowsSub): ?>
        <li class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-item-1360 ubermenu-item-auto ubermenu-item-header ubermenu-item-level-1 ubermenu-column ubermenu-column-auto" >
          <a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="san-pham/<?php echo Unicode::removeUnicode($rowsSub->name); ?>/<?php echo $rowsSub->id; ?>">
            <span class="ubermenu-target-title ubermenu-target-text"><?php echo $rowsSub->name; ?></span>
          </a>
        </li>
      <?php endforeach; ?>
      </ul>
    <?php endforeach; ?>
    </li>
  </ul>
</nav>
<!-- End UberMenu -->
    </div>
  </div>
      <div id="flatsome-uber-menu" class="header-ubermenu-nav relative show-for-medium" style="z-index: 9">
      <div class="full-width">
        
<!-- UberMenu [Configuration:main] [Theme Loc:primary_mobile] [Integration:api] -->
<a class="ubermenu-responsive-toggle ubermenu-responsive-toggle-main ubermenu-skin-none ubermenu-loc-primary_mobile ubermenu-responsive-toggle-content-align-left ubermenu-responsive-toggle-align-full " tabindex="0" data-ubermenu-target="ubermenu-main-70-primary_mobile-2"><i class="fas fa-bars" ></i>Menu</a>
<nav id="ubermenu-main-70-primary_mobile-2" class="ubermenu ubermenu-nojs ubermenu-main ubermenu-menu-70 ubermenu-loc-primary_mobile ubermenu-responsive ubermenu-responsive-default ubermenu-responsive-collapse ubermenu-vertical ubermenu-transition-shift ubermenu-trigger-hover_intent ubermenu-skin-none  ubermenu-bar-align-full ubermenu-items-align-auto ubermenu-bound ubermenu-disable-submenu-scroll ubermenu-sub-indicators ubermenu-retractors-responsive ubermenu-submenu-indicator-closes">
  <ul id="ubermenu-nav-main-70-primary_mobile" class="ubermenu-nav" data-title="Menu danh mục">
    <?php 
      $categories = $this->modelGetCategories();
     ?>
     <?php foreach ($categories as $rows): ?>
    <li class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-item-has-children ubermenu-item-1359 ubermenu-item-level-0 ubermenu-column ubermenu-column-auto ubermenu-has-submenu-drop ubermenu-has-submenu-mega" >
      <a class="ubermenu-target ubermenu-target-with-icon ubermenu-item-layout-default ubermenu-item-layout-icon_left" href="san-pham/<?php echo Unicode::removeUnicode($rows->name); ?>/<?php echo $rows->id; ?>" tabindex="0"><i class="ubermenu-icon fas fa-laptop" ></i>
        <span class="ubermenu-target-title ubermenu-target-text"><?php echo $rows->name; ?></span>
        <i class='ubermenu-sub-indicator fas fa-angle-down'></i>
      </a>
      <ul  class="ubermenu-submenu ubermenu-submenu-id-1359 ubermenu-submenu-type-auto ubermenu-submenu-type-mega ubermenu-submenu-drop ubermenu-submenu-align-full_width"  >
        <?php 
        $categoriesSub = $this->modelGetCategoriesSub($rows->id);
         ?>
         <?php foreach ($categoriesSub as $rowsSub): ?>
        <li class="ubermenu-item ubermenu-item-type-taxonomy ubermenu-item-object-product_cat ubermenu-item-1360 ubermenu-item-auto ubermenu-item-header ubermenu-item-level-1 ubermenu-column ubermenu-column-auto" >
          <a class="ubermenu-target ubermenu-item-layout-default ubermenu-item-layout-text_only" href="san-pham/<?php echo Unicode::removeUnicode($rowsSub->name); ?>/<?php echo $rowsSub->id; ?>">
            <span class="ubermenu-target-title ubermenu-target-text"><?php echo $rowsSub->name; ?></span>
          </a>
        </li>
      <?php endforeach; ?>
      </ul>
    </li>
  <?php endforeach; ?>
  </ul>
</nav>
<!-- End UberMenu -->
      </div>
    </div>
    <div class="header-bg-container fill"><div class="header-bg-image fill"></div><div class="header-bg-color fill"></div></div>   </div><!-- header-wrapper-->
</header>


<style>.float-contact {
position: fixed;
bottom: 20px;
left: 20px;
z-index: 99999;
}
.chat-zalo {
background: #8eb22b;
border-radius: 20px;
padding: 0 18px;
color: white;
display: block;
margin-bottom: 6px;
}
.chat-face {
background: #125c9e;
border-radius: 20px;
padding: 0 18px;
color: white;
display: block;
margin-bottom: 6px;
}
.float-contact .hotline  a{
color: red;
}
.float-contact .hotline  a span{
font-weight:bold;font-size:18px;
}
.float-contact .hotline {
background: #FFB400!important;
border-radius: 20px;
padding: 0 18px;
color: white;
display: block;
margin-bottom: 6px;
}
.chat-zalo a, .chat-face a, .hotline a {
font-size: 15px;
color: white;
font-weight: 400;
text-transform: none;
line-height: 0;
}
@media (max-width: 549px){
.float-contact{
display:none
}
}</style>
<div class="float-contact">
<button class="hotline">
<a href="tel:0374288371">Hotline: <span>037.428.8371</span></a>
</button>
</div>  

<!-- login   -->
<div id="login-form-popup" class="lightbox-content mfp-hide">
<div class="woocommerce-notices-wrapper"></div>
<div class="account-container lightbox-inner">

      <div class="account-login-inner">

        <h3 class="uppercase">Đăng nhập</h3>

        <form class="woocommerce-form woocommerce-form-login login" method="post" action="index.php?controller=account&action=loginPost">
           <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
            <label for="username">Tên tài khoản&nbsp;<span class="required">*</span></label>
            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="name" id="name" autocomplete="name" value="" required="" />         </p>
          <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
            <label for="username">Email&nbsp;<span class="required">*</span></label>
            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="email" value="" required=""/></p>
          <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
            <label for="password">Mật khẩu&nbsp;<span class="required">*</span></label>
            <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" required="" />
          </p>

          <p class="form-row">
            <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
              <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>Ghi nhớ mật khẩu</span>
            </label>
            <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="022e5587df" /><input type="hidden" name="_wp_http_referer" value="/tai-khoan/" />           <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Đăng nhập">Đăng nhập</button>
          </p>
          <p class="woocommerce-LostPassword lost_password">
            <a href="#">Quên mật khẩu?</a>
          </p>
          <p class="woocommerce-LostPassword lost_password">
            <a href="dang-ky">Đăng ký tài khoản mới</a>
          </p>
        </form>
      </div> 
</div>
</div>
<!-- end login -->