<?php

namespace Aryan\CpAntara\Controller;

use Aryan\CpAntara\App\View;
use Aryan\CpAntara\Model\NewsModel;

class HomeController
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
			$articles = ['data' => []];
		}

		View::render('index', [
			"title" => "Home",
			"articles" => $articles['data'],
		]);
	}
}
