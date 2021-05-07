<?php 
	trait ProductsModel{

		//liet ke so ban ghi
		public function categories(){
			//quy dinh so ban ghi mot trang
			$recordPerPage = 10;
			//tinh so trang
			//ham ceil la ham lay tran. VD: ceil(2.1) = 3
			$numPage = ceil($this->modelTotal()/$recordPerPage);
			//lay danh sach cac ban ghi co phan trang
			$data = $this->modelRead($recordPerPage);
			//goi view, truyen du lieu ra view
			$this->loadView("ProductsCategoriesView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		//chi tiet san pham
		public function detail(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			$record = $this->modelGetRecord($id);
			$this->loadView("ProductsDetailView.php",["record"=>$record]);
		}
		//lay danh sach cac ban ghi, co phan trang
		public function modelRead($recordPerPage){	
			$category_id = isset($_GET["category_id"])&&is_numeric($_GET["category_id"])?$_GET["category_id"]:0;	
			//lay bien page truyen tu url
			$page = isset($_GET["page"])&&is_numeric($_GET["page"])&&$_GET["page"]>0 ? $_GET["page"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			$sqlOrder = " order by id asc";
			$order = isset($_GET["order"]) ? $_GET["order"]: "";
			switch($order){
				case "priceAsc";
				$sqlOrder = "order by price asc";
				break;
				case "priceDesc";
				$sqlOrder = "order by price desc";
				break;
				case "nameAsc";
				$sqlOrder = "order by name asc";
				break;
				case "nameDesc";
				$sqlOrder = "order by name desc";
				break;
			}
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where category_id in (select id from categories where id=$category_id or parent_id=$category_id) $sqlOrder limit $from,$recordPerPage");
			//lay tat ca ket qua tra ve
			$result = $query->fetchAll();
			//---
			return $result;
		}
		//ham tinh tong so ban ghi
		public function modelTotal(){
			$category_id = isset($_GET["category_id"])&&is_numeric($_GET["category_id"])?$_GET["category_id"]:0;
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from products where category_id in (select id from categories where id=$category_id or parent_id=$category_id)");
			//ham rowCount: dem so ket qua tra ve
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function getCategory($category_id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select name from categories where id=$category_id");
			$record = $query->fetch();
			return $query->rowCount() > 0 ? $record->name : "";
		}
		public function modelGetCategories(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = 0 order by id asc");
			//lay tat ca ket qua tra ve
			$result = $query->fetchAll();
			return $result;
		}
		//load menu cap 2
		public function modelGetCategoriesSub($category_id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = $category_id order by id asc");
			//lay tat ca ket qua tra ve
			$result = $query->fetchAll();
			return $result;
		}
		public function modelHotProducts(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where hot=1 order by id asc limit 5");
			$result = $query->fetchAll();
			return $result;
		}
		public function modelGetProducts($id){
			$conn = Connection::getInstance();
			//lay cac san pham thuoc danh muc do va danh muc cap con cua no
			$query = $conn->query("select * from products where categories where id=$id order by id asc");
			$result = $query->fetchAll();
			return $result;
		}	
		public function modelSiminarProducts($id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where category_id in (select category_id from products where id=$id ) order by id desc limit 5");
			return $query->fetchAll();
		}	
		// đánh giá số sao
		public function rating(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$star = isset($_POST["star"]) ? $_POST["star"] : 0;
			$author = isset($_POST["author"]) ? $_POST["author"] : "";
			$comment = isset($_POST["comment"]) ? $_POST["comment"] : "";
			$phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
			$email = isset($_POST["email"]) ? $_POST["email"] : "";
			$rating = isset($_POST["rating"]) ? $_POST["rating"]: "";
			switch($rating){
				case "1";
				$star = "1";
				break;
				case "2";
				$star = "2";
				break;
				case "3";
				$star = "3";
				break;
				case "4";
				$star = "4";
				break;
				case "5";
				$star = "5";
				break;
			}
			// insert thông tin vòa bảng rating
			$conn = Connection::getInstance();
			$query = $conn->prepare("insert into rating set product_id=:var_product_id, star=:var_star, author=:var_author, comment=:var_comment, phone=:var_phone, email=:var_email");
			$query->execute(array("var_product_id"=>$id, "var_star"=>$star, "var_author"=>$author, "var_comment"=>$comment, "var_phone"=>$phone, "var_email"=>$email));
			// di chuyển đến trang chi tiết sản phẩm
			header("location:index.php?controller=products&action=detail&id=$id");
		}
		// lấy sô sao tương ứng với id truyền vào
		public function getStar($id, $star){
			$conn = Connection::getInstance();
			$query = $conn->query("select id from rating where product_id=$id and star=$star");
			// đếm số bản ghi trả về
			return $query->rowCount();
		}
		// lấy tổng số đánh giá
		public function getTotalStar($id){
			$conn = Connection::getInstance();
			$query = $conn->query("select id from rating where product_id=$id");
			// đếm số bản ghi trả về
			return $query->rowCount();
		}
		// lấy tên bình luận
		public function modelComment($id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from rating where product_id=$id order by id desc limit 5");
			//lay tat ca ket qua tra ve
			$result = $query->fetchAll();
			return $result;
		}
	}
 ?>