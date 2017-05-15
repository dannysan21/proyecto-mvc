<?php
include_once("model/Model.php");

class ProductsController {
	public $model;
	public function __construct() {
    $this->model = new Model();
  }
	public function index()
	{
		$products = $this->model->get();
		include 'views/products/index.php';
	}
}

?>
