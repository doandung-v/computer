<?php 
	$this->layoutPath = "LayoutTrangTrong.php";
?>
<div id="content" class="blog-wrapper blog-single page-wrapper">
	<div class="row row-large ">
		<div class="large-9 col">
			<article id="post-938" class="post-938 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc">
				<div class="article-inner ">
					<header class="entry-header">
						<div class="entry-header-text entry-header-text-top text-left">
							<p id="breadcrumbs"><span><span>
								<a href="trang-chu" >Trang chủ</a> » <span><a href="tin-tuc" >Tin tức</a> » <span class="breadcrumb_last" aria-current="page"><?php echo $record->name; ?></span></span></span></span>
							</p>
							<h1 class="entry-title"><?php echo $record->name; ?></h1>
							<div class="entry-divider is-divider small"></div>
							<div class="entry-meta uppercase is-xsmall">
								<span class="posted-on">Posted on <a href="index.html" rel="bookmark"><time class="entry-date published updated" datetime="2020-08-05T07:53:15+07:00">05/08/2020</time></a></span><span class="byline"> by <span class="meta-author vcard"><a class="url fn n" href="../author/admin/index.html">Thuan Nguyen</a></span></span>	
							</div><!-- .entry-meta -->
						</div>
						<div class="entry-image relative">
							<a href="index.html">
								<img width="640" height="400" src="" data-src="assets/upload/news/<?php echo $record->photo; ?>" class="lazy-load attachment-large size-large wp-post-image" alt="" loading="lazy" srcset="" data-srcset="assets/upload/news/<?php echo $record->photo; ?> 640w, assets/upload/news/<?php echo $record->photo; ?> 168w, assets/upload/news/<?php echo $record->photo; ?> 510w, assets/upload/news/<?php echo $record->photo; ?> 300w, assets/upload/news/<?php echo $record->photo; ?> 247w" sizes="(max-width: 640px) 100vw, 640px" />
							</a>
							<div class="badge absolute top post-date badge-square">
								<div class="badge-inner">
									<span class="post-date-day">05</span><br>
									<span class="post-date-month is-small">Th8</span>
								</div>
							</div>			
						</div>
					</header>
					<div class="entry-content single-page">
						<h4 class="sapo" data-field="sapo"><?php echo $record->description; ?></h4>
						<div id="ContentFirstFull" class="clearfix news-content contentdetail" data-field="body">
							<div class="maincontent">
								<p><img loading="lazy" class="lazy-load aligncenter size-full wp-image-940" src="" data-src="assets/upload/news/<?php echo $record->photo; ?>" sizes="(max-width: 640px) 100vw, 640px" srcset="" data-srcset="assets/upload/news/<?php echo $record->photo; ?> 640w, assets/upload/news/<?php echo $record->photo; ?> 300w" alt="" width="640" height="400" /></p>
								<p class=""><?php echo $record->content; ?></p>
							</div>
						</div>
						<div id="comments" class="comments-area">
							<div id="respond" class="comment-respond">
								<h3 id="reply-title" class="comment-reply-title">Trả lời <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Hủy</a></small>
								</h3>
								<form action="http://maytinh3.giaodienwebmau.com/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate>
									<p class="comment-notes"><span id="email-notes">Email của bạn sẽ không được hiển thị công khai.</span></p><p class="comment-form-comment"><label for="comment">Bình luận</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p>
									<p class="comment-form-author"><label for="author">Tên</label> <input id="author" name="author" type="text" value="" size="30" maxlength="245" /></p>
									<p class="comment-form-email"><label for="email">Email</label> <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" /></p>
									<p class="comment-form-url"><label for="url">Trang web</label> <input id="url" name="url" type="url" value="" size="30" maxlength="200" /></p>
									<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" /> <label for="wp-comment-cookies-consent">Lưu tên của tôi, email, và trang web trong trình duyệt này cho lần bình luận kế tiếp của tôi.</label></p>
									<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Phản hồi" /> <input type='hidden' name='comment_post_ID' value='938' id='comment_post_ID' /><input type='hidden' name='comment_parent' id='comment_parent' value='0' /></p>
								</form>	
							</div><!-- #respond -->
						</div>
						<footer class="entry-meta text-left">This entry was posted in <a href="tin-tuc" rel="category tag">Tin tức</a>. Bookmark the <a href="trang-chu" title="Permalink to <?php echo $record->name; ?>" rel="bookmark">permalink</a>.
						</footer><!-- .entry-meta -->
						<div class="related-post">
							<div  class="" style="margin-top: 30px;margin-bottom: 20px"> <h3>Bài viết liên quan</h3>
								<div class="duong-line"></div>
							</div>
							<div class="clearfix"></div>
							<div class="row large-columns-3 medium-columns-2 small-columns-1 has-shadow row-box-shadow-1 row-box-shadow-1-hover">
								<?php foreach ($data as $rows): ?>
									<div class="col post-item" >
										<div class="col-inner">
											<a href="tin-tuc&action=detail&id=<?php echo $rows->id; ?>" class="plain">
												<div class="box box-bounce box-text-bottom box-blog-post has-hover">
													<div class="box-image">
														<div class="image-cover" style="padding-top:56%;">
															<img width="768" height="507" src="assets/upload/news/<?php echo $rows->photo; ?>" data-src="assets/upload/news/<?php echo $rows->photo; ?>" class="lazy-load attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" loading="lazy" srcset="" data-srcset="assets/upload/news/<?php echo $rows->photo; ?> 768w, assets/upload/news/<?php echo $rows->photo; ?> 168w, assets/upload/news/<?php echo $rows->photo; ?> 510w, assets/upload/news/<?php echo $rows->photo; ?> 300w, assets/upload/news/<?php echo $rows->photo; ?> 247w" sizes="(max-width: 768px) 100vw, 768px" />						  							  						
														</div>
													</div><!-- .box-image -->
													<div class="box-text text-center">
														<div class="box-text-inner blog-post-inner">
															<h5 class="post-title is-large "><?php echo $record->name; ?></h5>
															<div class="post-meta is-small op-8">Th8 5, 2020</div>					
															<div class="is-divider"></div>
														</div><!-- .box-text-inner -->
													</div><!-- .box-text -->
												</div><!-- .box -->
											</a><!-- .link -->
										</div><!-- .col-inner -->
									</div><!-- .col -->
								<?php endforeach; ?>
							</div>
						</div>
					</div>
			</article>
		  <div id="comments" class="comments-area">
				<div id="respond" class="comment-respond">
					<h3 id="reply-title" class="comment-reply-title">Trả lời <small><a rel="nofollow" id="cancel-comment-reply-link" href="index.html#respond" style="display:none;">Hủy</a></small>
					</h3>
					<form action="http://maytinh3.giaodienwebmau.com/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate>
						<p class="comment-notes"><span id="email-notes">Email của bạn sẽ không được hiển thị công khai.</span></p><p class="comment-form-comment"><label for="comment">Bình luận</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p>
						<p class="comment-form-author"><label for="author">Tên</label> <input id="author" name="author" type="text" value="" size="30" maxlength="245" /></p>
						<p class="comment-form-email"><label for="email">Email</label> <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" /></p>
						<p class="comment-form-url"><label for="url">Trang web</label> <input id="url" name="url" type="url" value="" size="30" maxlength="200" /></p>
						<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" /> <label for="wp-comment-cookies-consent">Lưu tên của tôi, email, và trang web trong trình duyệt này cho lần bình luận kế tiếp của tôi.</label></p>
						<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Phản hồi" /> <input type='hidden' name='comment_post_ID' value='938' id='comment_post_ID' /><input type='hidden' name='comment_parent' id='comment_parent' value='0' /></p>
					</form>	
				</div><!-- #respond -->
				</div>
			</div>
			<div class="post-sidebar large-3 col">
				<div id="secondary" class="widget-area " role="complementary">
					<aside id="woocommerce_products-3" class="widget woocommerce widget_products"><span class="widget-title "><span>Sản phẩm mới</span></span>
						<div class="is-divider small"></div>
						<ul class="product_list_widget">
							<?php $products = $this->modelNewProducts();?>
							<?php foreach($products as $rows): ?>
							<li>
								<a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>">
									<img width="100" height="100" src="data:image/svg+xml,%3Csvg%20viewBox%3D%220%200%20100%20100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3C%2Fsvg%3E" data-src="assets/upload/products/<?php echo $rows->photo; ?>" class="lazy-load attachment-woocommerce_gallery_thumbnail size-woocommerce_gallery_thumbnail" alt="" loading="lazy" srcset="" data-srcset="assets/upload/products/<?php echo $rows->photo; ?> 100w, assets/upload/products/<?php echo $rows->photo; ?> 168w,assets/upload/products/<?php echo $rows->photo; ?> 510w, assets/upload/products/<?php echo $rows->photo; ?> 300w, assets/upload/products/<?php echo $rows->photo; ?> 150w, assets/upload/products/<?php echo $rows->photo; ?> 768w, assets/upload/products/<?php echo $rows->photo; ?> 1000w" sizes="(max-width: 100px) 100vw, 100px" />		
									<span class="product-title"><?php echo $rows->name; ?></span>
								</a>
								<div class="star-rating" role="img" aria-label="Được xếp hạng 5.00 5 sao"><span style="width:100%">Được xếp hạng <strong class="rating">5.00</strong> 5 sao</span></div>	
								<del><span class="woocommerce-Price-amount amount"><bdi><?php echo number_format($rows->price); ?><span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></del> 
								<ins><span class="woocommerce-Price-amount amount"><bdi><?php echo number_format($rows->price -($rows->price*$rows->discount)/100); ?><span class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></ins>
							</li>
						<?php endforeach; ?>
						</ul>
					</aside>		
					<aside id="flatsome_recent_posts-3" class="widget flatsome_recent_posts">		
						<span class="widget-title "><span>Bài viết mới</span></span>
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
											<a href="tin-tuc&action=detail&id=<?php echo $rows->id; ?>" title="<?php echo $rows->name; ?>"><?php echo $rows->name; ?></a>
											<span class="post_comments op-7 block is-xsmall"><a href="tin-tuc&action=detail&id=<?php echo $rows->id; ?>"></a></span>
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