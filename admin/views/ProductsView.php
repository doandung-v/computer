<?php 
	// load file layout.php
	$this->layoutPath = "Layout.php";
?>
<div class="container-fluid">
<div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Danh sách sản phẩm</h6>
      </div>
      <div style="margin-top:15px; margin-left: 20px;">
			<a href="index.php?controller=products&action=create" class="btn btn-primary">Thêm sản phẩm</a>
		</div>
      <div class="card-body">
        <style type="text/css">
          .pagination{padding:0px; margin:0px; margin-bottom: 20px;}
        </style>
        <ul class="pagination">
          <li class="page-item disabled"><a href="#" class="page-link">Trang</a></li>
          <?php for($i = 1; $i <=$numPage; $i++): ?>
            <li class="page-item"><a href="index.php?controller=products&page=<?php echo $i; ?>" class = "page-link"><?php echo $i; ?></a></li>
          <?php endfor; ?>
        </ul> 
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th style="width: 100px; text-align: center;">Hình ảnh</th>
                          <th style="width: 100px; text-align: center;">Tên sản phẩm</th>
                          <th style="width: 100px; text-align: center;">Danh mục</th>
                          <th style="width: 100px; text-align: center;">Giá cấu hình 1</th>
                          <th style="width: 100px; text-align: center;">Giá cấu hình 2</th>
                          <th style="width: 80px; text-align: center;">Giảm giá</th>
                          <th style="width: 80px; text-align: center;">Hot</th>
                          <th style="width: 80px; text-align: center;">Khuyến mại</th>
                          <th style="width: 80px; text-align: center;">Cập nhật</th>
                          <th style="width: 80px; text-align: center;">Xóa</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                          <th>Hình ảnh</th>
                          <th>Tên sản phẩm</th>
                          <th>Danh mục</th>
                          <th>Giá tiền</th>
                          <th>Giảm giá</th>
                          <th>Hot</th>
                          <th>Khuyến mại</th>
                          <th>Cập nhật</th>
                          <th>Xóa</th>
                      </tr>
                  </tfoot>
                  <tbody>
                  	<?php foreach($data  as $rows): ?>
                      <tr>
                      	<td  style="text-align: center;"><?php if(file_exists("../assets/upload/products/".$rows->photo)): ?>
						<img src="../assets/upload/products/<?php echo $rows->photo; ?>" style="width: 100px;">
						<?php endif; ?></td>
                        <td><?php echo $rows->name ?></td>
                        <td style="text-align: center;"><?php echo $this->getCategory($rows->category_id);?></td>
                        <td style="text-align: center;"><?php echo number_format($rows->price);?></td>
                        <td style="text-align: center;"><?php echo number_format($rows->priceS);?></td>
                        <td style="text-align: center;"><?php echo $rows->discount;?></td>
                        <td style="text-align: center;"><?php if($rows->hot==1):?><span class="fa fa-check"></span><?php endif; ?></td>
                        <td style="text-align: center;"><?php if($rows->sale==1):?><span class="fa fa-check"></span><?php endif; ?></td>
                        <td style="text-align: center;"><a href="index.php?controller=products&action=update&id=<?php echo $rows->id; ?>">Update</a></td>
                        <td style="text-align: center;"><a href="index.php?controller=products&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Xóa sản phẩm?');">Delete</a></td>
                      </tr>
                    <?php endforeach; ?> 
                  </tbody>
              </table>
      				<ul class="pagination">
      					<li class="page-item disabled"><a href="#" class="page-link">Trang</a></li>
      					<?php for($i = 1; $i <=$numPage; $i++): ?>
      						<li class="page-item"><a href="index.php?controller=products&page=<?php echo $i; ?>" class = "page-link"><?php echo $i; ?></a></li>
      					<?php endfor; ?>
      				</ul>	
          </div>
      </div>
  </div>
</div>