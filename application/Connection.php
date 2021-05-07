<?php 
	//class kết nối cơ sở dữ liệu
	class Connection{
		// hàm ckeets nối csdl, trả kết quả về biến kết nối
		// nếu sử dụng từ khóa static ở tên hàm thì có thể: tenclass::tenham()
		public static function  getInstance(){
			// $conn = new PDO("chuỗi kết nối csdl", username, password)
			$conn = new PDO("mysql:hostname=localhost;dbname=dung_project","root","");
			// lấy dữ liệu theo kiểu unicode
			$conn->exec("set names utf8");
			//chỉ định kiểu duyệt các bản ghi
			$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
			return $conn;
		}
	}
 ?>