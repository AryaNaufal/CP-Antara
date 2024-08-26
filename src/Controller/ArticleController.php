<?php

namespace Aryan\CpAntara\Controller;

use Aryan\CpAntara\App\View;
use Aryan\CpAntara\Model\NewsModel;

class ArticleController
{
  private $newsModel;

  public function __construct()
  {
    $this->newsModel = new NewsModel();
  }
  public function index()
  {
    $articles = $this->newsModel->getTopHeadlines();

    if ($articles === null || !isset($articles['data'])) {
      $articles = ['data' => []]; // Menghindari kesalahan jika data tidak valid
    }

    View::render('Articles/index', [
      "title" => "Article",
      "articles" => $articles['data'],
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
