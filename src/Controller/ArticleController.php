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
      include __DIR__ . '/../App/404.php';
    } else {
      // require __DIR__ . '/../View/header.php';
      // include __DIR__ . '/../View/Articles/Content/' . $articleId . '.php';
      // require __DIR__ . '/../View/footer.php';
      View::render("Articles/Content/$articleId", [
        "title" => $articleId,
      ]);
    }
  }
}
