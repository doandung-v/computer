<?php 
	// load file layout.php
$this->layoutPath = "Layout.php";
?>
<div class="container-fluid">
  <!-- Page Heading -->
  <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
  <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
      For more information about DataTables, please visit the <a target="_blank"
          href="https://datatables.net">official DataTables documentation</a>.</p> -->

  <!-- Danh mục sản phẩm -->
  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Danh mục sản phẩm</h6>
      </div>
      <div style="margin-top:15px; margin-left: 20px;">
			<a href="index.php?controller=categories&action=create" class="btn btn-primary">Thêm danh mục</a>
		</div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>Tên sản phẩm</th>
                          <th style="width: 250px;">Icon</th>
                          <th style="width: 100px; text-align: center;">Hiển thị</th>
                          <th style="width: 100px; text-align: center;">Cập nhật</th>
                          <th style="width: 100px; text-align: center;">Xóa</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                          <th>Tên sản phẩm</th>
                          <th>Icon</th>
                          <th>Hiển thị</th>
                          <th>Cập nhật</th>
                          <th>Xóa</th>
                      </tr>
                  </tfoot>
                  <tbody>
                  	<?php foreach($data  as $rows): ?>
                      <tr>
                        <td><?php echo $rows->name ?></td>
                        <td><?php echo "<i>". $rows->icon . "</i>" ?></td>
                        <td style="text-align: center;"><?php if($rows->displayhomepage==1): ?><span class="fa fa-check"></span><?php endif; ?></td>
                        <td style="text-align: center;"><a href="index.php?controller=categories&action=update&id=<?php echo $rows->id; ?>">Update</a></td>
                        <td style="text-align: center;"><a href="index.php?controller=categories&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Xóa sản phẩm?');">Delete</a></td>
                      </tr>
                      <?php  $dataSub = $this->modelListCategoriesSub($rows->id);	 ?>
                      <?php foreach($dataSub  as $rowsSub): ?>
	                      <tr>
                          <td style="padding-left: 40px;"><?php echo $rowsSub->name ?></td>
                          <td><i><?php echo "<i>". $rowsSub->icon . "</i>" ?></i></td>
                          <td style="text-align: center;"><?php if($rowsSub->displayhomepage==1): ?><span class="fa fa-check"></span><?php endif; ?></td>
                          <td style="text-align: center;"><a href="index.php?controller=categories&action=update&id=<?php echo $rows->id; ?>">Update</a></td>
                          <td style="text-align: center;"><a href="index.php?controller=categories&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Xóa sản phẩm?');">Delete</a></td>
	                      </tr>
                    	<?php endforeach; ?> 
                    <?php endforeach; ?> 
                  </tbody>
              </table>
              <style type="text/css">
								.pagination{padding:0px; margin:0px;}
							</style>
							<ul class="pagination">
								<li class="page-item disabled"><a href="#" class="page-link">Trang</a></li>
								<?php for($i = 1; $i <=$numPage; $i++): ?>
									<li class="page-item"><a href="index.php?controller=categories&page=<?php echo $i; ?>" class = "page-link"><?php echo $i; ?></a></li>
								<?php endfor; ?>
							</ul>	
          </div>
      </div>
  </div>
</div>