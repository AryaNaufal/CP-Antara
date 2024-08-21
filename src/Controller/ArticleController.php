<?php

namespace Aryan\CpAntara\Controller;

use Aryan\CpAntara\App\View;

class ArticleController
{
  public function index()
  {
    View::render('Article/index', [
      "title" => "Article",
    ]);
  }
}
