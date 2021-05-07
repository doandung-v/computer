<?php 
	trait NewsModel{
		// lấy danh sách các bản ghi, có phân trang
		public function modelRead($recordPerPage){
			// lấy biến page truyền từ url
			$page = isset($_GET["page"])&&is_numeric($_GET["page"])&&$_GET["page"]>0 ? $_GET["page"]-1 : 0;
			// lấy từ bản ghi nào
			$from = $page *$recordPerPage;
			//--
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news order by id asc limit $from, $recordPerPage");
			// lấy tất cả kết quả trả về
			$result = $query->fetchAll();
			//---
			return $result;
		}
		// hàm tính tổng số bản ghi
		public function modelTotal(){
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("select id from news");
			// hàm rowCount: đếm số kết quả trả về
			return $query->rowCount();
		}
		// lấy một bản ghi tương ứng với id truyền vào
		public function modelGetRecord($id){
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where id=$id");
			// trả về một bản ghi
			return $query->fetch();
		}
		public function modelUpdate($id){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]: 0;
			$name = $_POST["name"];
			$description = $_POST["description"];
			$content = $_POST["content"];
			$hot = isset($_POST["hot"])?1:0;
			//update cột name
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->prepare("update news set name=:_name, description=:_description, content=:_content, hot=:_hot where id=:_id");
			$query->execute([":_name"=>$name,":_description"=>$description,":_content"=>$content, ":_hot"=>$hot, ":_id"=>$id]);
			//---
			// nếu user upload ảnh thì lấy ảnh cứ để xóa, sau đó upload ảnh mới và update database
			if($_FILES["photo"]["name"] != ""){
				//--- 
				// lấy ảnh cũ để xóa
				$oldQuery = $conn->query("select photo from news where id=$id");
				if($oldQuery->rowCount() > 0)
					$oldPhoto = $oldQuery->fetch();
					if(file_exists("../assets/upload/news/".$oldPhoto->photo))
						unlink("../assets/upload/news/".$oldPhoto->photo);
				//---
				$photo = time()."_".$_FILES["photo"]["name"];
				// upload ảnh mới
				move_uploaded_file($_FILES["photo"]["tmp_name"] ,"../assets/upload/news/$photo");
				// update csdl
				$query = $conn->prepare("update news set photo = :_photo where id=:_id");
				$query->execute(["_photo"=>$photo, ":_id"=>$id]);
				//----
			}
		}
		public function modelCreate($id){
			$name = $_POST["name"];
			$description = $_POST["description"];
			$content = $_POST["content"];
			$hot = isset($_POST["hot"])?1:0;
			$photo = "";
			// nếu user upload ảnh thì lấy ảnh cứ để xóa, sau đó upload ảnh mới và update database
			if($_FILES["photo"]["name"] != ""){
				$photo = time()."_".$_FILES["photo"]["name"];
				// upload ảnh mới
				move_uploaded_file($_FILES["photo"]["tmp_name"] ,"../assets/upload/news/$photo");
			}
			//---
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into news set name=:_name, description=:_description, content=:_content, hot=:_hot, photo=:_photo");
			$query->execute([":_name"=>$name,":_description"=>$description,":_content"=>$content, ":_hot"=>$hot, ":_photo"=>$photo]);
			//---
		}
		// xóa bản ghi
		public function modelDelete($id){
			// lấy biến kết nối
			$conn = Connection::getInstance();
			// lấy ảnh cũ để xóa
				$oldQuery = $conn->query("select photo from news where id=$id");
				if($oldQuery->rowCount() > 0)
					$oldPhoto = $oldQuery->fetch();
					if(file_exists("../assets/upload/news/".$oldPhoto->photo))
						unlink("../assets/upload/news/".$oldPhoto->photo);
				//---
			$conn->query("delete from news where id=$id");
		}
	}
 ?>