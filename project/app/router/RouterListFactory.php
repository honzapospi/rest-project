<?php

/**
 * Copyright (c) Jan Pospisil (http://www.jan-pospisil.cz)
 */

namespace Rest;
use App\Controllers\ArticleController;
use Nette\SmartObject;
use RestServer\IRouteListFactory;
use RestServer\RouteList;

/**
 * RouteListFactory
 * @author Jan Pospisil
 */

class RouteListFactory implements IRouteListFactory {
	use SmartObject;

	public function create():RouteList {
		$routeList = new RouteList();
		$routeList->get('/articles', ArticleController::class);
		return $routeList;
	}
}