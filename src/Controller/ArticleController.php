<?php

namespace Aryan\CpAntara\Controller;

use Aryan\CpAntara\App\View;

class ArticleController
{
  public function index()
  {
    View::render('Articles/index', [
      "title" => "Article",
    ]);
  }

  function content(string $articleId): void
  {
    if (!file_exists(__DIR__ . '/../View/Articles/Content/' . $articleId . '.php')) {
      View::render('404', [
        "title" => "Page Not Found",
      ]);
    } else {
      View::render("Articles/Content/$articleId", [
        "title" => $articleId,
      ]);
    }
  }
}
