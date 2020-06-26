<?php
include_once 'config/myConnect.php';
class Product_m extends Connect {
	/**
	 * summary
	 */
	public function __construct() {
		parent::__construct(); //luôn tồn tại this->conn để kết nối tới cơ sở dữ liệu
		/**
		viết các hàm để truy vấn csdl
		 */
	}
	//Lấy ra tất cả sản phẩm
	function get_pro() {
		$sql = "SELECT *from product ";
		$query = mysqli_query($this->conn, $sql);
		$result = array();
		while ($row = mysqli_fetch_array($query)) {
			$result[] = $row;
		}
		return $result;
	}
	//Lấy ra thông tin sản phẩm có id
	function get_proID($id) {
		$sql = "SELECT *from product where ProductID = $id ";
		$query = mysqli_query($this->conn, $sql);
		$result = mysqli_fetch_array($query);
		return $result;
	}
	//Lấy ra các hình ảnh của sản phẩm
	function get_proImage($id) {
		$sql = "SELECT *from image where ProductID = $id ";
		$query = mysqli_query($this->conn, $sql);
		$result = array();
		while ($row = mysqli_fetch_array($query)) {
			$result[] = $row;
		}
		return $result;
	}
	//Lấy ra Thương hiệu sản phẩm
	function get_TradeMark() {
		$sql = "SELECT *from trademark";
		$query = mysqli_query($this->conn, $sql);
		$result = array();
		while ($row = mysqli_fetch_array($query)) {
			$result[] = $row;
		}
		return $result;
	}
	//Lấy ra thông tin liên lạc của shop
	function get_Contact() {
		$sql = "SELECT *from contact";
		$query = mysqli_query($this->conn, $sql);
		$result = array();
		while ($row = mysqli_fetch_array($query)) {
			$result[] = $row;
		}
		return $result;
	}

}

?>