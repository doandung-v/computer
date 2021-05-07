<?php 
  //load LayoutTrangChu.php
  $this->layoutPath = "LayoutTrangTrong.php";
 ?>
<div id="content" class="content-area page-wrapper" role="main">
  <div class="row row-main">
    <div class="large-12 col">
      <div class="col-inner">
       <header class="entry-header">
        <h1 class="entry-title mb uppercase">Giỏ hàng</h1>
        </header>
<div class="woocommerce">
<?php if($this->cartNumber() > 0): ?>
<div class="woocommerce-notices-wrapper"></div><div class="woocommerce row row-large row-divided">
<div class="col large-7 pb-0 ">
<form class="woocommerce-cart-form" action="index.php?controller=cart&action=update" method="post">
<div class="cart-wrapper sm-touch-scroll">
  <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
    <thead>
      <tr>
        <th class="product-name" colspan="3">Sản phẩm</th>
        <th class="product-price">Giá</th>
        <th class="product-quantity">Số lượng</th>
        <th class="product-subtotal">Tạm tính</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($_SESSION["cart"] as $product): ?>
      <tr class="woocommerce-cart-form__cart-item cart_item">
        <td class="product-remove">
          <a href="index.php?controller=cart&action=delete&id=<?php echo $product['id']; ?>" class="remove" aria-label="Xóa sản phẩm này" data-product_id="1115" data-product_sku="">&times;</a>
        </td>
        <td class="product-thumbnail">
          <a href="index.php?controller=products&action=detail&id=<?php echo $product['id'] ?>"><img width="168" height="168" src="" data-src="assets/upload/products/<?php echo $product['photo']; ?>" class="lazy-load attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" loading="lazy" srcset="" data-srcset="assets/upload/products/<?php echo $product['photo']; ?> 168w, assets/upload/products/<?php echo $product['photo']; ?> 100w, assets/upload/products/<?php echo $product['photo']; ?> 300w, assets/upload/products/<?php echo $product['photo']; ?> 150w, assets/upload/products/<?php echo $product['photo']; ?> 510w" sizes="(max-width: 168px) 100vw, 168px" /></a>          
        </td>
        <td class="product-name" data-title="Sản phẩm">
          <a href="index.php?controller=products&action=detail&id=<?php echo $product['id'] ?>"><?php echo $product['name']; ?></a>  
          <div class="show-for-small mobile-product-price">
            <span class="mobile-product-price__qty"><?php echo $product['number']; ?> x </span>
            <span class="woocommerce-Price-amount amount"><bdi><?php echo number_format($product['price']) ; ?><span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>             
          </div>
        </td>
        <td class="product-price" data-title="Giá">
            <span class="woocommerce-Price-amount amount"><bdi><?php echo number_format($product['price']) ; ?><span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>           
        </td>
        <td class="product-quanti" data-title="Số lượng">
            <input 
              type="number"
              id="quantity"
              class="input-text qty text"
              step="1"
              min="1"
              max=""
              name="product_<?php echo $product['id'] ?>"
              value="<?php echo $product['number']; ?>"
              title="SL"
              size="4"
              inputmode="numeric" />
        </td>
        <td class="product-subtotal" data-title="Tạm tính">
          <span class="woocommerce-Price-amount amount"><bdi><?php echo number_format($product['number'] * $product['price']) ; ?><span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>           
        </td>
      </tr>
      <?php endforeach; ?>      
      
      <tr>
        <td colspan="6" class="actions clear">
          <div class="continue-shopping pull-left text-left">
            <a class="button-continue-shopping button primary is-outline"  href="index.php">&#8592;&nbsp;Tiếp tục xem sản phẩm  </a>
          </div>
          <button type="submit" class="button primary mt-0 pull-left small" name="update_cart" value="Cập nhật giỏ hàng">Cập nhật giỏ hàng</button>
          <input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce" value="9cb84993e3" />
          <input type="hidden" name="_wp_http_referer" value="/gio-hang/" />        
        </td>
      </tr>
    </tbody>
  </table>
  </div>
</form>
</div>


<div class="cart-collaterals large-5 col pb-0">
  
  <div class="cart-sidebar col-inner ">
    <div class="cart_totals ">

            <table cellspacing="0">
          <thead>
              <tr>
                  <th class="product-name" colspan="2" style="border-width:3px;">Cộng giỏ hàng</th>
              </tr>
          </thead>
          </table>
  
  <h2>Cộng giỏ hàng</h2>

  <table cellspacing="0" class="shop_table shop_table_responsive">

    <tr class="order-total">
      <th>Tổng</th>
      <td data-title="Tổng"><strong><span class="woocommerce-Price-amount amount"><bdi><?php echo number_format($this->cartTotal()); ?><span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></strong> </td>
    </tr>

    
  </table>

  <div class="wc-proceed-to-checkout">
    
<a href="index.php?controller=cart&action=checkout" class="checkout-button button alt wc-forward">
  Tiến hành thanh toán</a>
  </div>

  
</div>
        <form class="checkout_coupon mb-0" method="post">
      <div class="coupon">
        <h3 class="widget-title"><i class="icon-tag" ></i> Phiếu ưu đãi</h3><input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Mã ưu đãi" /> <input type="submit" class="is-form expand" name="apply_coupon" value="Áp dụng" />
              </div>
    </form>
        <div class="cart-sidebar-content relative"></div> </div>

  </div>
</div>

<div class="cart-footer-content after-cart-content relative"></div></div>

<?php else: ?>                 
  <div class="text-center pt pb">
    <p class="cart-empty woocommerce-info">Chưa có sản phẩm nào trong giỏ hàng.</p>    
    <p class="return-to-shop">
        <a class="button primary wc-backward" href="index.php">Quay trở lại cửa hàng</a>
    </p>
  </div>
<?php endif; ?>
</div>

      </div>
    </div>
  </div>
</div>
