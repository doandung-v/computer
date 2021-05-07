<?php 
	// load file model
	include "models/NewsModel.php";
	class NewsController extends Controller{
		// kết thừ class NewsModel
		use NewsModel;
		// liệt kê số bản ghi
		public function index(){
			// quy định số bản ghi một trang
			$recordPerPage = 20;
			// tính tổng số trang
			// hàm ceil là hàm lấy trần : VD: ceil(2.1) = 3
			$numPage= ceil($this->modelTotal()/$recordPerPage);
			// lấy danh sách các bản ghi có phân trang
			$data = $this->modelRead($recordPerPage);
			// gọi view, truyền dữ liệu ra view
			$this->loadView("NewsView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		// update
		public function update(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]: 0;
			// tạo biến action để xuất vào thuộc tính action của thẻ form
			$action = "index.php?controller=news&action=updatePost&id=$id";
			$record = $this->modelGetRecord($id);
			// gọi view
			$this->loadView("NewsForm.php",["record"=>$record, "action"=>$action]);
		}
		// update - POST
		public function updatePost(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]: 0;
			$this->modelUpdate($id);
			// quay lại MVC news
			header("location:index.php?controller=news");
		}
		// create
		public function create(){
			// tạo biến action để xuất vào thuộc tính action của thẻ form
			$action = "index.php?controller=news&action=createPost";
			// gọi view
			$this->loadView("NewsForm.php",["action"=>$action]);
		}
		// create - POST
		public function createPost(){
			$this->modelCreate($id);
			// quay lại MVC news
			header("location:index.php?controller=news");
		}
		// delete
		public function delete(){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"]) ? $_GET["id"]: 0;
			$this->modelDelete($id);
			// quay lại MVC news
			header("location:index.php?controller=news");
		}
	}
 ?>