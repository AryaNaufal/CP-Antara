<?php

namespace Aryan\CpAntara\Controller;

use Aryan\CpAntara\App\View;

class ProductController
{
  public function index()
  {
    View::render('Products/index', [
      "title" => "Product",
    ]);
  }
}
