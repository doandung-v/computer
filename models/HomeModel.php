<?php 
	trait HomeModel{
		//hot product
		public function modelHotProducts(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where hot=1 order by id asc");
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
		//sale product
		public function modelSaleProducts(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where sale=1 order by id asc");
			$result = $query->fetchAll();
			return $result;
		}
		public function modelGetCategories(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id=0 and displayhomepage=1 order by id asc");
			$result = $query->fetchAll();
			return $result;
		}
		public function modelGetProducts($category_id){
			$conn = Connection::getInstance();
			//lay cac san pham thuoc danh muc do va danh muc cap con cua no
			$query = $conn->query("select * from products where category_id in (select id from categories where id=$category_id or parent_id=$category_id) order by id desc limit 12");
			$result = $query->fetchAll();
			return $result;
		}
		public function modelGetHotNews(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from news where hot=1 order by id desc limit 3");
			$result = $query->fetchAll();
			return $result;
		}
	}
 ?>