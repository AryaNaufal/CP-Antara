<?php

namespace Aryan\CpAntara\Controller;


class TesController
{
  function articles(string $articleId): void
  {
    if (!file_exists(__DIR__ . '/../../public/articleStorage/' . $articleId . '.php')) {
      include __DIR__ . '/../App/404.php';
    } else {
      include __DIR__ . '/../../public/articleStorage/' . $articleId . '.php';
    }
  }
}
