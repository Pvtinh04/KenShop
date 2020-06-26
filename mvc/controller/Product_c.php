<?php
include_once 'mvc/model/Product_m.php';

/**
 * summary
 */
class Product_c extends Product_m {
	/**
	 * summary
	 */
	private $product;

	public function __construct() {

		$this->product = new Product_m();

	}
	function product() {
		$contact = $this->product->get_Contact();

		if (isset($_GET['method'])) {
			$method = $_GET['method'];

		} else {
			$method = 'home';

		}
		switch ($method) {
		case 'home':
			$rs = $this->product->get_pro();
			include_once 'mvc/views/user/home.php';
			break;
		case 'details':
			$trademark = $this->product->get_TradeMark();

			$rs = $this->product->get_pro();
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$details = $this->product->get_proID($id);
			}

			include_once 'mvc/views/user/details.php';
			break;
		case 'contact':

			include_once 'mvc/views/user/contact.php';
			break;
		case 'login':

			include_once 'mvc/views/user/login.php';
			break;
		case 'register':

			include_once 'mvc/views/user/register.php';
			break;
		default:
			// code...
			break;
		}

	}

}

?>