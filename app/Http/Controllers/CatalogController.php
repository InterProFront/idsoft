<?php namespace App\Http\Controllers;

use Interpro\QuickStorage\Concept\QueryAgent;

class PagesController extends Controller {


	private $queryAgent;
	function __construct(QueryAgent $queryAgent){
		$this->queryAgent = $queryAgent;
		$static = $this->queryAgent->getBlock('static_site',[],[]);
		view()->share('static', $static);
	}

	public function getCatalog(){}
	public function getCategory(){}
	public function getVideo(){}
	public function getVideoCategory(){}
	public function getShowcase(){}
	public function getShowcaseCategory(){}


	public function getProduct(){}


}
