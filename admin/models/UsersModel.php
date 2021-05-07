<?php 
	trait UsersModel{
		// lấy danh sách các bản ghi, có phân trang
		public function modelRead($recordPerPage){
			// lấy biến page truyền từ url
			$page = isset($_GET["page"])&&is_numeric($_GET["page"])&&$_GET["page"]>0 ? $_GET["page"]-1 : 0;
			// lấy từ bản ghi nào
			$from = $page *$recordPerPage;
			//--
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("select * from users order by id asc limit $from, $recordPerPage");
			// lấy tất cả kết quả trả về
			$result = $query->fetchAll();
			//---
			return $result;
		}
		// hàm tính tổng số bản ghi
		public function modelTotal(){
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("select id from users");
			// hàm rowCount: đếm số kết quả trả về
			return $query->rowCount();
		}
		// lấy một bản ghi tương ứng với id truyền vào
		public function modelGetRecord($id){
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("select * from users where id=$id");
			// trả về một bản ghi
			return $query->fetch();
		}
		public function modelUpdate($id){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]: 0;
			$name = $_POST["name"];
			$password = $_POST["password"];
			// mã hóa password
			$password = md5($password);
			//update cột name
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->prepare("update users set name=:_name where id=:_id");
			$query->execute([":_name"=>$name,":_id"=>$id]);
			// nếu password không rỗng thì update password
			if($password != ""){
				$query = $conn->prepare("update users set password=:_password where id=:_id");
				$query->execute([":_password"=>$password,":_id"=>$id]);
			}
		}
		public function modelCreate($id){
			$name = $_POST["name"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			// mã hóa password
			$password = md5($password);
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert users set name=:_name, email=:_email, password=:_password");
			$query->execute([":_name"=>$name,":_email"=>$email, ":_password"=>$password]);
		}
		// xóa bản ghi
		public function modelDelete($id){
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$conn->query("delete from users where id=$id");
		}
	}
 ?>