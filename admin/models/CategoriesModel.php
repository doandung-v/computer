<?php 
	trait CategoriesModel{
		// lấy danh sách các bản ghi, có phân trang
		public function modelRead($recordPerPage){
			// lấy biến page truyền từ url
			$page = isset($_GET["page"])&&is_numeric($_GET["page"])&&$_GET["page"]>0 ? $_GET["page"]-1 : 0;
			// lấy từ bản ghi nào
			$from = $page *$recordPerPage;
			//--
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = 0 order by id asc limit $from, $recordPerPage");
			// lấy tất cả kết quả trả về
			$result = $query->fetchAll();
			//---
			return $result;
		}
		// hàm tính tổng số bản ghi
		public function modelTotal(){
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("select id from categories where parent_id = 0");
			// hàm rowCount: đếm số kết quả trả về
			return $query->rowCount();
		}
		// lấy một bản ghi tương ứng với id truyền vào
		public function modelGetRecord($id){
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where id=$id");
			// trả về một bản ghi
			return $query->fetch();
		}
		public function modelUpdate($id){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]: 0;
			$name = $_POST["name"];
			$icon = $_POST["icon"];
			$parent_id = $_POST["parent_id"];
			$displayhomepage = isset($_POST["displayhomepage"])? 1: 0 ;
			//update cột name
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->prepare("update categories set name=:_name, icon=:_icon, parent_id=:_parent_id, displayhomepage=:_displayhomepage where id=:_id");
			$query->execute([":_name"=>$name, ":_icon"=>$icon, ":_parent_id"=>$parent_id, ":_displayhomepage"=>$displayhomepage, ":_id"=>$id]);
		}
		public function modelCreate($id){
			$name = $_POST["name"];
			$icon = $_POST["icon"];
			$parent_id = $_POST["parent_id"];
			$displayhomepage = isset($_POST["displayhomepage"])? 1: 0 ;
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert categories set name=:_name, icon=:_icon, parent_id=:_parent_id, displayhomepage=:_displayhomepage");
			$query->execute([":_name"=>$name, ":_icon"=>$icon, ":_parent_id"=>$parent_id, ":_displayhomepage"=>$displayhomepage]);
		}
		// xóa bản ghi
		public function modelDelete($id){
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$conn->query("delete from categories where id=$id");
		}
		// lấy các bản ghi categories
		public function modelListCategories($id){
			$conn = Connection::getInstance();
			$query = $conn->query("select *from categories where parent_id=0 and id <> $id order by id asc");
			return $query->fetchAll();
		}
		// lấy các bản ghi categories
		public function modelListCategoriesSub($category_id){
			$conn = Connection::getInstance();
			$query = $conn->query("select *from categories where parent_id=$category_id order by id asc");
			return $query->fetchAll();
		}
	}
 ?>