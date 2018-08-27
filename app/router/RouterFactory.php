<?php

/**
 * Copyright (c) Jan Pospisil (http://www.jan-pospisil.cz)
 */

namespace Rest;
use Nette\SmartObject;
use RestServer\IRouteListFactory;
use RestServer\Route;
use RestServer\RouteList;

/**
 * RouteListFactory
 * @author Jan Pospisil
 */

class RouteListFactory implements IRouteListFactory {
	use SmartObject;

	public function create() {
		$routeList = new RouteList();
		$routeList->add(new Route('/articles', Route::GET, 'App\Controllers\ArticleController'));
		return $routeList;
	}
}