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
			$query = $conn->query("select * from news order by id desc limit $from, $recordPerPage");
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
		public function modelGetHotNews(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where hot=1 order by id desc");
			$result = $query->fetchAll();
			return $result;
		}
		// new news
		public function modelGetNewNews(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news order by id desc limit 3");
			$result = $query->fetchAll();
			return $result;
		}
		//new product
		public function modelNewProducts(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products order by id desc limit 5");
			$result = $query->fetchAll();
			return $result;
		}
	}
 ?>