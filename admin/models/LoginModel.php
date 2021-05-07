<?php 
	trait LoginModel{
		public function modelLogin(){
			$email = $_POST["email"];
			// hàm mysql_escape_string sử dụng để loai bỏ một số ký tự đặc biết  (liên quan đến lỗi sql injection)
			// VD: ký tự ' sẽ trở thành \'
			// $email = mysql_escape_string($email);
			$password = $_POST["password"];
			// $password - mysql_escape_string($password);
			// mã hóa password
			$password = md5($password);
			// lấy biến kết nối csdl
			$conn = Connection::getInstance();
			// chuẩn bị câu truy vấn
			$query = $conn->query("select email, password from users where email='$email'");
			// thực thi câu truy vấn và truyền tham số
			if($query->rowCount() > 0){
				$record = $query->fetch();
				if($record->password == $password){
					$_SESSION["email"]=$email;
				header("location:index.php");		
			}
			}
			else
				header("location:index.php?controller=login");
		}
	}
 ?>