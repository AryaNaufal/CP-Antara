<?php

namespace Aryan\CpAntara\Controller;

use Aryan\CpAntara\App\View;

class HomeController
{
  public function index()
  {
    View::render('index', [
      "title" => "Home",
    ]);
  }
}
