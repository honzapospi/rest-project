<?php

namespace App\Controllers;

use Nette;
use RestServer\IController;
use RestServer\IParameters;
use RestServer\Response;


class ArticleController extends Nette\Object implements IController
{

	public function run(IParameters $parameters, Response $response) {
		$response->data = array (
			array (
				'id' => 1,
				'title' => 'Super news',
				'description' => 'Text of description'
			)
		);
	}
}
