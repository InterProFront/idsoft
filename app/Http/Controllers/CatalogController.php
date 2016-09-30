<?php namespace App\Http\Controllers;

use Interpro\QuickStorage\Concept\QueryAgent;

class CatalogController extends Controller {


	private $queryAgent;
	private $course;
	function __construct(QueryAgent $queryAgent){

		$this->queryAgent = $queryAgent;
		$this->course = $this->queryAgent->getBlock('clients_filter',[],[]);
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
		$seo     = $this->queryAgent->getGroupItem('catalog_block','category_1',51);

		return view('front.catalog.all_category.catalog',[
			'category_1' => $catalog,
			'seo'		=> $seo
		]);
	}
	public function getCategory($slug){
		$catalog = $this->queryAgent->getGroupItemBySlug('catalog_block','category_2',$slug);


		foreach($catalog->product_group as $item){
			$new_price = $item->product_cost_field * $this->course->course_field;
			$new_sale = $item->product_sale_field * $this->course->course_field;
			$item->setField('product_cost',$new_price);
			$item->setField('product_sale',$new_sale);

		}

		return view('front.catalog.category.category',[
			'products' => $catalog
		]);
	}

	public function getSoft(){
		$catalog = $this->queryAgent->getGroupItem('catalog_block','category_2',55);
		foreach($catalog->product_group as $item){
			$new_price = $item->product_cost_field * $this->course->course_field;
			$new_sale = $item->product_sale_field * $this->course->course_field;
			$item->setField('product_cost',$new_price);
			$item->setField('product_sale',$new_sale);
		}
		return view('front.catalog.category.category',[
			'products' => $catalog
		]);
	}


	public function getAuto($slug){

		$auto = $this->queryAgent->getGroupItemBySlug('auto_block','auto',$slug);
		$cost = $auto->auto_cost_field * $this->course->course_field;
		$sale = $auto->auto_sale_field * $this->course->course_field;
		$auto->setField('auto_cost', $cost);
		$auto->setField('auto_sale', $sale);

		$all   = $this->queryAgent->getGroupFlat('auto_block','auto',[],[]);
		$test = $this->queryAgent->getGroupFlat('catalog_block','product',[],[]);
		foreach($test as $item){
			$new_price = $item->product_cost_field * $this->course->course_field;
			$new_sale = $item->product_sale_field * $this->course->course_field;
			$item->setField('product_cost',$new_price);
			$item->setField('product_sale',$new_sale);
		}


		return view('front.catalog.automatic.automatic',[
			'auto' => $auto,
			'all'  => $all,
			'prod' => $test
		]);
	}
	public function getAccounting(){
		return view('front.accounting.accounting',[

		]);
	}

	public function getVideo(){}
	public function getVideoCategory(){}
	public function getShowcase(){}
	public function getShowcaseCategory(){}


	public function getProduct($category, $product){
		$product = $this->queryAgent->getGroupItemBySlug('catalog_block','product',$product);
		$cost = $product->product_cost_field * $this->course->course_field;
		$sale = $product->product_sale_field * $this->course->course_field;

		$product->setField('product_cost',$cost);
		$product->setField('product_sale',$cost);

		$auto = $this->queryAgent->getGroupFlat('auto_block','auto',[],[]);
		$test = $this->queryAgent->getGroupFlat('catalog_block','product',[],[]);
		$soft = $this->queryAgent->getGroupFlat('catalog_block','product',[],['product'=>['owner_id' => 55]]);
		return view('front.catalog.product.product',[
			'product' => $product,
			'auto' 	  => $auto,
			'soft'	  => $soft,
			'prod' => $test
		]);
	}


}






