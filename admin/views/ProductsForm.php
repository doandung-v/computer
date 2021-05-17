<?php 
    $this->layoutPath = "layout.php";
?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Thêm, chỉnh sửa sản phẩm</h6>
        </div>
        <div class="panel-body">
            <!-- chú ý: muốn upload được file thì phải có thuộc tính enctype="multipart/form-data" vào trọng thẻ form -->
            <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Sản phẩm</div>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo isset($record->name)?$record->name:""; ?>" name="name" class="form-control" required>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Giá cấu hình 1</div>
                    <div class="col-md-10">
                        <input type="number" value="<?php echo isset($record->price)?$record->price:""; ?>" name="price" class="form-control" required>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Giá cấu hình 2</div>
                    <div class="col-md-10">
                        <input type="number" value="<?php echo isset($record->priceS)?$record->priceS:""; ?>" name="priceS" class="form-control">
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Số lượng</div>
                    <div class="col-md-10">
                        <input type="number" value="" name="quantitiesAdd" class="form-control">
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">% Giảm giá</div>
                    <div class="col-md-10">
                        <input type="number" min="0" max="100" value="<?php echo isset($record->discount)?$record->discount:""; ?>" name="discount" class="form-control">
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Danh mục</div>
                    <div class="col-md-10">
                        <select class="form-control" style="width: 250px;" name="category_id"> 
                            <?php $categories = $this->modelListCategories(); ?>
                            <?php foreach($categories as $rows): ?>
                                <option <?php if(isset($record->category_id)&&$record->category_id==$rows->id): ?>selected <?php endif; ?>
                                value="<?php echo $rows->id ?>" ><?php echo $rows->name; ?> </option>
                                <?php $categoriesSub = $this->modelListCategoriesSub($rows->id); ?>
                                <?php foreach($categoriesSub as $rowsSub): ?>
                                <option <?php if(isset($record->category_id)&&$record->category_id==$rowsSub->id): ?>selected <?php endif; ?>
                                value="<?php echo $rowsSub->id ?>" ><?php echo $rowsSub->name; ?> </option>
                                <?php endforeach; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Cấu hình 1</div>
                    <div class="col-md-10">
                        <textarea name="description" id="description"><?php echo isset($record->description)?$record->description:"" ;?></textarea>
                        <script type="text/javascript">CKEDITOR.replace("description");</script>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Cấu hình 2</div>
                    <div class="col-md-10">
                        <textarea name="descriptionS" id="descriptionS"><?php echo isset($record->descriptionS)?$record->descriptionS:"" ;?></textarea>
                        <script type="text/javascript">CKEDITOR.replace("descriptionS");</script>
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
                        <input type="checkbox" <?php if(isset($record->hot)&&$record->hot==1): ?> checked <?php endif; ?> name="hot" id="hot"> <label for="hotproducts">Sản phẩm hót</label>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <input type="checkbox" <?php if(isset($record->sale)&&$record->sale==1): ?> checked <?php endif; ?> name="sale" id="sale"> <label for="saleproducts">Sản phẩm khuyến mại</label>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Upload ảnh</div>
                    <div class="col-md-10">
                        <tr>
                            <th><input type="file" name="photo" style="width: 25%;"></th>
                            <th><input type="file" name="photo_2" style="width: 25%;"></th>
                            <th><input type="file" name="photo_3" style="width: 24%;"></th>
                            <th><input type="file" name="photo_4" style="width: 24%;"></th>
                        </tr>
                    </div>
                </div>
                <!-- end rows -->
                <?php if(isset($record->photo)&&file_exists("../assets/upload/products/".$record->photo)): ?>
                <!-- rows -->
                    <div class="row" style="margin-top:5px;">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            <tr>
                                <td style="width: 25%;"><img src="..//assets/upload/products/<?php echo $record->photo ?>" style="width: 100px;"></td>
                                <td style="width: 25%;"><?php if(isset($record->photo_2)&&file_exists("../assets/upload/products/".$record->photo_2)): ?><img src="..//assets/upload/products/<?php echo $record->photo_2 ?>" style="width: 100px;"><?php endif; ?></td>
                                <td style="width: 24%;"><?php if(isset($record->photo_3)&&file_exists("../assets/upload/products/".$record->photo_3)): ?><img src="..//assets/upload/products/<?php echo $record->photo_3 ?>" style="width: 100px;"><?php endif; ?></td>
                                <td style="width: 24%;"><?php if(isset($record->photo_4)&&file_exists("../assets/upload/products/".$record->photo_4)): ?><img src="..//assets/upload/products/<?php echo $record->photo_4 ?>" style="width: 100px;"><?php endif; ?></td>
                            </tr>
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
