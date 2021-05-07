<?php 
$this->layoutPath = "layout.php";
?>

<div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading">Thêm, sửa danh mục</div>
        <div class="panel-body">
            <form method="post" action="<?php echo $action; ?>">
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Tên sản phẩm</div>
                    <div class="col-md-10">
                        <input type="name" value="<?php echo isset($record->name) ? $record->name: ""; ?>" name="name" class="form-control" required>
                    </div>
                </div>
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Icon</div>
                    <div class="col-md-10">
                        <input type="name" value="<?php echo isset($record->icon) ? $record->icon: ""; ?>" name="icon" class="form-control">
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Parent</div>
                    <div class="col-md-10">
                      <?php 
                      $categories = $this->modelListCategories(isset($record->id)?$record->id:0);
                      ?>
                      <select name="parent_id" class="form-control" style="width: 500px;">
                        <option value="0"></option>
                        <?php 
                        foreach($categories as $rows):
                          ?>
                          <option <?php if(isset($record->parent_id)&&$record->parent_id==$rows->id): ?> selected <?php endif; ?> value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
              <!-- end rows -->
              <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <input type="checkbox" <?php if(isset($record->displayhomepage)&&$record->displayhomepage==1): ?> checked <?php endif; ?> name="displayhomepage" id="displayhomepage"><label>&nbsp;&nbsp;Hiển thị danh mục này ở trang chủ</label>
                    </div>
                </div>
                <!-- end rows -->
              <!-- rows -->
              <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="OK" class="btn btn-primary">
                </div>
            </div>
            <!-- end rows -->
        </form>
    </div>
</div>
</div>