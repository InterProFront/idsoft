<?php namespace App\Http\Controllers;

use Interpro\QuickStorage\Concept\QueryAgent;

class CatalogController extends Controller {


	private $queryAgent;
	function __construct(QueryAgent $queryAgent){
		$this->queryAgent = $queryAgent;
		$static = $this->queryAgent->getBlock('static_site',[],[]);
		$menu 	= $this->queryAgent->getBlock('main_menu',[],[]);
		$menu_link = ['/catalog','/automation','/soft','/showcase','/accounting','/video'];

		$catalog = $this->queryAgent->getGroupFlat('catalog_block','category_2',[],['category_2'=>['owner_id'=>51]]);

		$showcase = $this->queryAgent->getGroupFlat('catalog_block','category_2',[],['category_2'=>['owner_id'=>52]]);

		$video = $this->queryAgent->getGroupFlat('catalog_block','category_2',[],['category_2'=>['owner_id'=>53]]);

		$auto = $this->queryAgent->getGroupFlat('auto_block','auto',[],[]);

		$soft = $this->queryAgent->getGroupFLat('catalog_block','product',[],['category_2'=>['owner_id'=>55]]);
		$acc = $this->queryAgent->getGroupFlat('accounting_block','tarif_category',[],[]);


		$menu_popup = [$catalog, $auto, $soft, $showcase, $acc, $video];
		view()->share('static', $static);
		view()->share('menu', 	$menu);
		view()->share('link', 	$menu_link);
		view()->share('m_popup', 	$menu_popup);
	}

	public function getCatalog(){
		$catalog = $this->queryAgent->getGroupFlat('catalog_block','category_2',[],['category_2'=>['owner_id'=>51]]);
		return view('front.catalog.all_category.catalog',[
			'category_1' => $catalog
		]);
	}
	public function getCategory(){
		return view('front.catalog.category.category',[
		]);
	}
	public function getVideo(){}
	public function getVideoCategory(){}
	public function getShowcase(){}
	public function getShowcaseCategory(){}


	public function getProduct(){


		return view('front.catalog.product.product',[

		]);
	}


}
