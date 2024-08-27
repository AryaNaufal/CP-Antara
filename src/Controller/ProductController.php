<?php

namespace Aryan\CpAntara\Controller;

use Aryan\CpAntara\App\View;
use Aryan\CpAntara\Model\ProductModel;

class ProductController
{
	private $productsModel;
	public function __construct()
	{
		$this->productsModel = new ProductModel();
	}

	public function index()
	{
		$products = $this->productsModel->getProducts();
		if ($products === null || !isset($products['products'])) {
			$products = ['products' => []];
		}
		View::render('Products/index', [
			"title" => "Product",
			"products" => $products['products'],
		]);
	}

	function content(string $productId): void
	{
		$products = $this->productsModel->getProducts();
		if ($products === null || !isset($products['products'])) {
			$products = ['products' => []];
		}
		View::render("Products/Content/index", [
			"title" => $productId,
			"products" => $products['products'],
		]);
	}
}
