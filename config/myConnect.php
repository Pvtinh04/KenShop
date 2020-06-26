<?php
class Connect {
	/**
	 * summary
	 */
	private $localhost;
	private $user = "root";
	private $pass = "";
	private $db = "shop_cosmetic";
	protected $conn = null;

	public function __construct() {
		$this->conn = mysqli_connect($this->localhost, $this->user, $this->pass, $this->db) or die("Can't connect database");
		if ($this->conn) {
			mysqli_set_charset($this->conn, 'utf-8');

		} else {
			exit();
		}

	}
}

?>