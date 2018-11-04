<?php

namespace App\Controllers;

use Nette;
use RestServer\IController;
use RestServer\IParameters;
use RestServer\Response;


class ArticleController implements IController {
	use Nette\SmartObject;

	public function run(IParameters $parameters, Response $response):void {
		$response->data = array (
			array (
				'id' => 1,
				'title' => 'Super news',
				'description' => 'Text of description'
			)
		);
	}
}
