<?php 
  //load LayoutTrangtrong.php
  $this->layoutPath = "LayoutTrangTrong.php";
 ?>
<div id="content" class="blog-wrapper blog-archive page-wrapper">
  <header class="archive-page-header">
    <div class="row">
      <div class="large-12 text-center col">
        <p id="breadcrumbs"><span><span><a href="trang-chu" >Trang chủ</a> » <span class="breadcrumb_last" aria-current="page">Tin tức</span></span></span></p> 
        <h1 class="page-title is-large uppercase"><span>Tin tức</span></h1>
      </div>
    </div>
  </header><!-- .page-header -->
  <div class="row row-large ">
    <div class="large-9 col">
      <div class="row large-columns-1 medium-columns- small-columns-1">
        <?php foreach ($data as $rows): ?>
          <div class="col post-item" >
            <div class="col-inner">
              <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" class="plain">
                <div class="box box-vertical box-text-bottom box-blog-post has-hover">
                  <div class="box-image" style="width:30%;">
                    <div class="image-cover" style="padding-top:60%;">
                      <img width="300" height="188" src="assets/upload/news/<?php echo $rows->photo; ?>" data-src="assets/upload/news/<?php echo $rows->photo; ?>" class="lazy-load attachment-medium size-medium wp-post-image" alt="" loading="lazy" srcset="" data-srcset="assets/upload/news/<?php echo $rows->photo; ?> 300w, assets/upload/news/<?php echo $rows->photo; ?> 168w, assets/upload/news/<?php echo $rows->photo; ?> 510w, assets/upload/news/<?php echo $rows->photo; ?> 247w,assets/upload/news/<?php echo $rows->photo; ?> 640w" sizes="(max-width: 300px) 100vw, 300px" />
                    </div>
                  </div>
                  <div class="box-text text-left" >
                    <div class="box-text-inner blog-post-inner">
                      <h5 class="post-title is-large "><?php echo $rows->name; ?></h5>
                      <div class="is-divider"></div>
                      <p class="from_the_blog_excerpt "><?php echo $rows->description; ?></p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="post-sidebar large-3 col">
      <div id="secondary" class="widget-area " role="complementary">
        <aside id="woocommerce_products-3" class="widget woocommerce widget_products"><span class="widget-title "><span>Sản phẩm mới</span></span>
          <div class="is-divider small"></div>
          <?php $products = $this->modelNewProducts();?>
          <ul class="product_list_widget">
            <?php foreach($products as $rows): ?>
            <li>
              <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>">
                <img width="100" height="100" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="assets/upload/products/<?php echo $rows->photo; ?>" class="lazy-load attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail" alt="" loading="lazy" srcset="" data-srcset="assets/upload/products/<?php echo $rows->photo; ?> 100w, assets/upload/products/<?php echo $rows->photo; ?> 168w, assets/upload/products/<?php echo $rows->photo; ?> 510w, assets/upload/products/<?php echo $rows->photo; ?> 300w, assets/upload/products/<?php echo $rows->photo; ?> 150w, assets/upload/products/<?php echo $rows->photo; ?> 768w, assets/upload/products/<?php echo $rows->photo; ?> 1000w" sizes="(max-width: 100px) 100vw, 100px" />   
                <span class="product-title"><?php echo $rows->name; ?></span>
              </a>
              <div class="star-rating" role="img" aria-label="Được xếp hạng 5.00 5 sao"><span style="width:100%">Được xếp hạng <strong class="rating">5.00</strong> 5 sao</span></div>  
              <del><span class="woocommerce-Price-amount amount"><bdi><?php echo number_format($rows->price); ?><span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> 
              <ins><span class="woocommerce-Price-amount amount"><bdi><?php echo number_format($rows->price -($rows->price*$rows->discount)/100); ?><span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins>
            </li>
          <?php endforeach; ?>
          </ul>
        </aside>
        <aside id="flatsome_recent_posts-3" class="widget flatsome_recent_posts"><span class="widget-title "><span>Bài viết mới</span></span>
          <div class="is-divider small"></div>
          <ul>    
            <?php $newNews = $this->modelGetNewNews();?>
            <?php foreach ($newNews as $rows): ?>
              <li class="recent-blog-posts-li">
                <div class="flex-row recent-blog-posts align-top pt-half pb-half">
                  <div class="flex-col mr-half">
                    <div class="badge post-date  badge-square">
                      <div class="badge-inner bg-fill" style="background: url(assets/upload/news/<?php echo $rows->photo; ?>); border:0;">
                      </div>
                    </div>
                  </div>
                  <div class="flex-col flex-grow">
                    <a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" title="<?php echo $rows->name; ?>"><?php echo $rows->name; ?></a>
                    <span class="post_comments op-7 block is-xsmall"><a href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>"></a></span>
                  </div>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>   
        </aside>
      </div>
    </div>
  </div>
</div>