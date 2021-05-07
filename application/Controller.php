<?php 
	class Controller{
		// biến lưu nội dung của file đọc vào
		public $view = NULL;
		// biến lưu đường dẫn file layout
		public $layoutPath = NULL;
		// hàm load file để hiển thị lên trang
		public function loadView($fileName,$data = NULL){
			if(file_exists("views/$fileName")){
				if($data != NULL)
					extract($data);
				//đọc nội dung của $fileName để ném dữ liệu vào biến $this->view
				ob_start();
					include "views/$fileName";
					$this->view = ob_get_contents();
				ob_get_clean();
			}
			// nếu giá trị của biến $this->layoutPath không rỗng thì load file này ra
			if($this->layoutPath != NULL)
				include "views/$this->layoutPath";
			else
				echo $this->view;
		}
		// xác thực việc đăng nhập
		public function authentication(){
			if(isset($_SESSION["email"]) == false)
				header("location:index.php?controller=login");
		}
	}
 ?>
