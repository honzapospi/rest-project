<?php

/**
 * Copyright (c) Jan Pospisil (http://www.jan-pospisil.cz)
 */

namespace Rest;
use RestServer\IRouteListFactory;
use RestServer\Route;
use RestServer\RouteList;

/**
 * RouteListFactory
 * @author Jan Pospisil
 */

class RouteListFactory extends \Nette\Object implements IRouteListFactory {

	public function create() {
		$routeList = new RouteList();
		$routeList->add(new Route('/articles', Route::GET, 'App\Controllers\ArticleController'));
		return $routeList;
	}
}