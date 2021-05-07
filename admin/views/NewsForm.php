<?php 
    $this->layoutPath = "layout.php";
?>

<div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading">Thêm, chỉnh sửa tin tức</div>
        <div class="panel-body">
            <!-- chú ý: muốn upload được file thì phải có thuộc tính enctype="multipart/form-data" vào trọng thẻ form -->
            <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Tiêu đề</div>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo isset($record->name)?$record->name:""; ?>" name="name" class="form-control" required>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Miêu tả</div>
                    <div class="col-md-10">
                        <textarea name="description" id="description"><?php echo isset($record->description)?$record->description:"" ;?></textarea>
                        <script type="text/javascript">CKEDITOR.replace("description");</script>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Nội dung</div>
                    <div class="col-md-10">
                        <textarea name="content" id="content"><?php echo isset($record->content)?$record->content:"" ;?></textarea>
                        <script type="text/javascript">CKEDITOR.replace("content");</script>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <input type="checkbox" <?php if(isset($record->hot)&&$record->hot==1): ?> checked <?php endif; ?> name="hot" id="hot"> <label for="hotnews">Tin nóng</label>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Upload ảnh</div>
                    <div class="col-md-10">
                        <input type="file" name="photo">
                    </div>
                </div>
                <!-- end rows -->
                <?php if(isset($record->photo)&&file_exists("../assets/upload/news/".$record->photo)): ?>
                <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            <img src="..//assets/upload/news/<?php echo $record->photo ?>" style="width: 100px;">
                        </div>
                    </div>
                <!-- end rows -->
                <?php endif; ?>
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <input type="submit" value="Thực hiện" class="btn btn-primary">
                    </div>
                </div>
                <!-- end rows -->
            </form>
        </div>
    </div>
</div>