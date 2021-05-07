<?php 
  //load LayoutTrangTrong.php
  $this->layoutPath = "LayoutTrangTrong.php";
 ?>
<div id="content" class="content-area page-wrapper" role="main">
  <div class="row row-main">
    <div class="large-12 col">
      <div class="col-inner">
        
      <header class="entry-header">
      <h1 class="entry-title mb uppercase">Đăng nhập tài khoản</h1>
        </header>
        
                            
<div class="woocommerce"><div class="woocommerce-notices-wrapper"></div>
<div class="account-container lightbox-inner">
      <div class="account-login-inner">
        <?php if(isset($_GET["notify"])&& $_GET["notify"] == "success"): ?>
        <p style="color: red;">Đăng ký thành công</p>
         <?php else: ?>
        <p>Bạn hãy nhập đầy đủ thông tin có dấu *</p>
        <?php endif; ?>

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
</div>
</div>
</div>
</div>