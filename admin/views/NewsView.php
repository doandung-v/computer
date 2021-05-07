<?php 
	// load file layout.php
	$this->layoutPath = "Layout.php";
?>
<div class="container-fluid">
	<div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Danh sách tin tức</h6>
      </div>
      <div style="margin-top:15px; margin-left: 20px;">
			<a href="index.php?controller=news&action=create" class="btn btn-primary">Thêm tin mới</a>
		</div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<tr>
					<th style="width: 100px; text-align: center;">Hình ảnh</th>
					<th>Tiêu đề</th>
					<th style="width: 70px; text-align: center;">Tin hót</th>
					<th style="width:120px;"></th>
				</tr>
				<?php foreach($data  as $rows): ?>
				<tr>
					<td style="text-align: center;"><?php if(file_exists("../assets/upload/news/".$rows->photo)): ?>
						<img src="../assets/upload/news/<?php echo $rows->photo; ?>" style="width: 100px;">
						<?php endif; ?>
					</td>
					<td><?php echo $rows->name ?></td>
					<td style="text-align: center;"><?php if($rows->hot==1): ?>
						<span class="fa fa-check"></span>
						<?php endif; ?>
					</td>
					<td style="text-align:center;">
						<a href="index.php?controller=news&action=update&id=<?php echo $rows->id; ?>">Update</a>&nbsp;
						<a href="index.php?controller=news&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Chắc không?');">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>
			</table>
			<style type="text/css">
				.pagination{padding:0px; margin:0px;}
			</style>
			<ul class="pagination">
				<li class="page-item disabled"><a href="#" class="page-link">Trang</a></li>
				<?php for($i = 1; $i <=$numPage; $i++): ?>
				<li class="page-item"><a href="index.php?controller=news&page=<?php echo $i; ?>" class = "page-link"><?php echo $i; ?></a></li>
			<?php endfor; ?>
			</ul>
		</div>
	</div>
</div>
</div>