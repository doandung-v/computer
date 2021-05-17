<?php 
	trait ProductsModel{
		// lấy danh sách các bản ghi, có phân trang
		public function modelRead($recordPerPage){
			// lấy biến page truyền từ url
			$page = isset($_GET["page"])&&is_numeric($_GET["page"])&&$_GET["page"]>0 ? $_GET["page"]-1 : 0;
			// lấy từ bản ghi nào
			$from = $page *$recordPerPage;
			//--
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products order by id desc limit $from, $recordPerPage");
			// lấy tất cả kết quả trả về
			$result = $query->fetchAll();
			//---
			return $result;
		}
		// hàm tính tổng số bản ghi
		public function modelTotal(){
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("select id from products");
			// hàm rowCount: đếm số kết quả trả về
			return $query->rowCount();
		}
		// lấy một bản ghi tương ứng với id truyền vào
		public function modelGetRecord($id){
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where id=$id");
			// trả về một bản ghi
			return $query->fetch();
		}
		// lấy một bản ghi tương ứng với id truyền vào
		public function getCategory($category_id){
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("select name from categories where id=$category_id");
			// trả về một bản ghi
			$record = $query->fetch();
			return $query->rowCount() > 0 ? $record->name: "";
		}
		public function modelUpdate($id){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]: 0;
			$name = $_POST["name"];
			$description = $_POST["description"];
			$descriptionS = $_POST["descriptionS"];
			$content = $_POST["content"];
			$hot = isset($_POST["hot"])?1:0;
			$sale = isset($_POST["sale"])?1:0;
			$price = $_POST["price"];
			$priceS = $_POST["priceS"];
			$quantitiesAdd = $_POST["quantitiesAdd"];
			$discount = $_POST["discount"];
			$category_id= $_POST["category_id"];
			//update cột name
			// lấy biến kết nối
			$conn = Connection::getInstance();
			// lấy giá trị của quantities
			$record = $conn->query("select quantities from products where id=$id");
			$row= $record->fetch();
			$quantities = $row->quantities;
			$quantitiesNew = $quantities + $quantitiesAdd;
			//
			$query = $conn->prepare("update products set name=:_name, description=:_description, descriptionS=:_descriptionS, content=:_content, hot=:_hot, sale=:_sale, price=:_price, priceS=:_priceS, quantities=:_quantities, discount=:_discount, category_id=:_category_id where id=:_id");
			$query->execute([":_name"=>$name,":_description"=>$description,":_descriptionS"=>$descriptionS,":_content"=>$content, ":_hot"=>$hot, ":_sale"=>$sale, ":_price"=>$price, ":_priceS"=>$priceS, ":_quantities"=>$quantitiesNew, ":_discount"=>$discount, ":_category_id"=>$category_id, ":_id"=>$id]);
			//---
			// nếu user upload ảnh thì lấy ảnh cũ để xóa, sau đó upload ảnh mới và update database
			if($_FILES["photo"]["name"] != ""){
				// lấy ảnh cũ để xóa
				$oldQuery = $conn->query("select photo from products where id=$id");
				if($oldQuery->rowCount() > 0)
					$oldPhoto = $oldQuery->fetch();
					if(file_exists("../assets/upload/products/".$oldPhoto->photo))
						unlink("../assets/upload/products/".$oldPhoto->photo);
				//---
				$photo = time()."_".$_FILES["photo"]["name"];
				// upload ảnh mới
				move_uploaded_file($_FILES["photo"]["tmp_name"] ,"../assets/upload/products/$photo");
				// update csdl
				$query = $conn->prepare("update products set photo = :_photo where id=:_id");
				$query->execute(["_photo"=>$photo, ":_id"=>$id]);
				//----
			}
			if($_FILES["photo_2"]["name"] != ""){
				// lấy ảnh cũ để xóa
				$oldQuery_2 = $conn->query("select photo_2 from products where id=$id");
				if($oldQuery_2->rowCount() > 0)
					$oldPhoto_2 = $oldQuery_2->fetch();
					if(file_exists("../assets/upload/products/".$oldPhoto_2->photo_2))
						unlink("../assets/upload/products/".$oldPhoto_2->photo_2);
				//---
				$photo_2 = time()."_".$_FILES["photo_2"]["name"];
				// upload ảnh mới
				move_uploaded_file($_FILES["photo_2"]["tmp_name"] ,"../assets/upload/products/$photo_2");
				// update csdl
				$query = $conn->prepare("update products set photo_2 = :_photo_2 where id=:_id");
				$query->execute(["_photo_2"=>$photo_2, ":_id"=>$id]);
				//----
			}
			if($_FILES["photo_3"]["name"] != ""){
				// lấy ảnh cũ để xóa
				$oldQuery_3 = $conn->query("select photo_3 from products where id=$id");
				if($oldQuery_3->rowCount() > 0)
					$oldPhoto_3 = $oldQuery_3->fetch();
					if(file_exists("../assets/upload/products/".$oldPhoto_3->photo_3))
						unlink("../assets/upload/products/".$oldPhoto_3->photo_3);
				//---
				$photo_3 = time()."_".$_FILES["photo_3"]["name"];
				// upload ảnh mới
				move_uploaded_file($_FILES["photo_3"]["tmp_name"] ,"../assets/upload/products/$photo_3");
				// update csdl
				$query = $conn->prepare("update products set photo_3 = :_photo_3 where id=:_id");
				$query->execute(["_photo_3"=>$photo_3, ":_id"=>$id]);
				//----
			}
			if($_FILES["photo_4"]["name"] != ""){
				// lấy ảnh cũ để xóa
				$oldQuery_4 = $conn->query("select photo_4 from products where id=$id");
				if($oldQuery_4->rowCount() > 0)
					$oldPhoto_4 = $oldQuery_4->fetch();
					if(file_exists("../assets/upload/products/".$oldPhoto_4->photo_4))
						unlink("../assets/upload/products/".$oldPhoto_4->photo_4);
				//---
				$photo_4 = time()."_".$_FILES["photo_4"]["name"];
				// upload ảnh mới
				move_uploaded_file($_FILES["photo_4"]["tmp_name"] ,"../assets/upload/products/$photo_4");
				// update csdl
				$query = $conn->prepare("update products set photo_4 = :_photo_4 where id=:_id");
				$query->execute(["_photo_4"=>$photo_4, ":_id"=>$id]);
				//----
			}
		}
		public function modelCreate($id){
			$name = $_POST["name"];
			$description = $_POST["description"];
			$descriptionS = $_POST["descriptionS"];
			$content = $_POST["content"];
			$hot = isset($_POST["hot"])?1:0;
			$sale = isset($_POST["sale"])?1:0;
			$photo = "";
			$photo_2 = "";
			$photo_3 = "";
			$photo_4 = "";
			$price = $_POST["price"];
			$priceS = $_POST["priceS"];
			$discount = $_POST["discount"];
			$category_id= $_POST["category_id"];
			// nếu user upload ảnh thì lấy ảnh cứ để xóa, sau đó upload ảnh mới và update database
			if($_FILES["photo"]["name"] != ""){
				$photo = time()."_".$_FILES["photo"]["name"];
				// upload ảnh mới
				move_uploaded_file($_FILES["photo"]["tmp_name"] ,"../assets/upload/products/$photo");
			}
			if($_FILES["photo_2"]["name"] != ""){
				$photo_2 = time()."_".$_FILES["photo_2"]["name"];
				// upload ảnh mới
				move_uploaded_file($_FILES["photo_2"]["tmp_name"] ,"../assets/upload/products/$photo_2");
			}
			if($_FILES["photo_3"]["name"] != ""){
				$photo_3 = time()."_".$_FILES["photo_3"]["name"];
				// upload ảnh mới
				move_uploaded_file($_FILES["photo_3"]["tmp_name"] ,"../assets/upload/products/$photo_3");
			}
			if($_FILES["photo_4"]["name"] != ""){
				$photo_4 = time()."_".$_FILES["photo_4"]["name"];
				// upload ảnh mới
				move_uploaded_file($_FILES["photo_4"]["tmp_name"] ,"../assets/upload/products/$photo_4");
			}
			//---
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into products set name=:_name, description=:_description, descriptionS=:_descriptionS, content=:_content, hot=:_hot, sale=:_sale, photo=:_photo, photo_2=:_photo_2, photo_3=:_photo_3, photo_4=:_photo_4, price=:_price, priceS=:_priceS, discount=:_discount, category_id=:_category_id" );
			$query->execute([":_name"=>$name,":_description"=>$description,":_descriptionS"=>$descriptionS,":_content"=>$content, ":_hot"=>$hot, ":_sale"=>$sale, ":_photo"=>$photo, ":_photo_2"=>$photo_2, ":_photo_3"=>$photo_3, ":_photo_4"=>$photo_4, ":_price"=>$price, ":_priceS"=>$priceS, ":_discount"=>$discount, ":_category_id"=>$category_id]);
			//---
		}
		// xóa bản ghi
		public function modelDelete($id){
			// lấy biến kết nối
			$conn = Connection::getInstance();
			// lấy ảnh cũ để xóa
				$oldQuery = $conn->query("select photo from products where id=$id");
				if($oldQuery->rowCount() > 0)
					$oldPhoto = $oldQuery->fetch();
					if(file_exists("../assets/upload/products/".$oldPhoto->photo))
						unlink("../assets/upload/products/".$oldPhoto->photo);
				//---
			$conn->query("delete from products where id=$id");
		}
		// lấy một bản ghi tương ứng với id truyền vào
		public function modelListCategories(){
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("select id, name from categories where parent_id = 0 order by id asc");
			// trả về một bản ghi
			return $query->fetchAll();
		}
		public function modelListCategoriesSub($id){
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("select id, name from categories where parent_id = $id order by id asc");
			// trả về một bản ghi
			return $query->fetchAll();
		}
	}
 ?>