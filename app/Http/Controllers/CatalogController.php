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
		$menu_link = ['/catalog','/automatic','/soft','/showcase','/accounting','/video'];

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


	//==================================================================
	//=== ******************************************** =================
	//=== Список категорий каталога\ стеллажей \ видео =================
	//=== ******************************************** =================
	//==================================================================
	public function getCatalog(){
		$catalog = $this->queryAgent->getGroupFlat('catalog_block','category_2',[],['category_2'=>['owner_id'=>51]]);
		$seo     = $this->queryAgent->getGroupItem('catalog_block','category_1',51);

		return view('front.catalog.all_category.catalog',[
			'category_1' => $catalog,
			'seo'		=> $seo
		]);
	}



	//==================================================================
	//=== ******************************************** =================
	//=== Автоматизация оборудования \ Готовые решения =================
	//=== ******************************************** =================
	//==================================================================
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
	public function getShowcaseCategory(){
		$catalog = $this->queryAgent->getGroupFlat('catalog_block','category_2',[],['category_2'=>['owner_id'=>52]]);
		$seo     = $this->queryAgent->getGroupItem('catalog_block','category_1',52);

		return view('front.catalog.category.video',[
			'category_1' => $catalog,
			'seo'        => $seo
		]);
	}
	public function getVideoCategory(){
		$catalog = $this->queryAgent->getGroupFlat('catalog_block','category_2',[],['category_2'=>['owner_id'=>53]]);
		$seo     = $this->queryAgent->getGroupItem('catalog_block','category_1',53);

		return view('front.catalog.category.video',[
			'category_1' => $catalog,
			'seo'        => $seo
		]);
	}
	//=====================================================


	public function getAccounting(){
		$test = $this->queryAgent->getBlock('accounting_block',[],[]);

		return view('front.accounting.accounting',[
			'account' => $test
		]);
	}
	public function getTarif($slug){

		$tarif = $this->queryAgent->getGroupItemBySlug('accounting_block','tarif',$slug);
		$all_tarif = $this->queryAgent->getGroupFlat('accounting_block','tarif_category',[],[]);

		return view('front.accounting.tarifs.tarif', [
			'tarif' => $tarif,
			'all_tarif' => $all_tarif
		]);
	}

	public function getVideo(){
		$catalog = $this->queryAgent->getGroupFlat('catalog_block','category_2',[],['category_2'=>['owner_id'=>51]]);
		$seo     = $this->queryAgent->getGroupItem('catalog_block','category_1',51);

		return view('front.catalog.all_category.catalog',[
			'category_1' => $catalog,
			'seo'		=> $seo
		]);
	}
	public function getShowcase(){
		$catalog = $this->queryAgent->getGroupFlat('catalog_block','category_2',[],['category_2'=>['owner_id'=>51]]);
		$seo     = $this->queryAgent->getGroupItem('catalog_block','category_1',51);

		return view('front.catalog.all_category.catalog',[
			'category_1' => $catalog,
			'seo'		=> $seo
		]);
	}





	public function getProduct($category, $product){
		$product = $this->queryAgent->getGroupItemBySlug('catalog_block','product',$product);
		$cost = $product->product_cost_field * $this->course->course_field;
		$sale = $product->product_sale_field * $this->course->course_field;

		$product->setField('product_cost',$cost);
		$product->setField('product_sale',$sale);

		$parent 	  = $this->queryAgent->getGroupItem('catalog_block','category_2',$product->owner_id_field);
		$grand_parent = $this->queryAgent->getGroupItem('catalog_block','category_1',$parent->owner_id_field);
		switch($grand_parent->id_field){
			case 51:
				$grand_parent->setField('slug','catalog');
				break;
			case 52:
				$grand_parent->setField('slug','showcase');
				break;
			case 53:
				$grand_parent->setField('slug','video');
				break;
			case 54:
				$grand_parent->setField('slug','soft');
				break;
		}

		$auto = $this->queryAgent->getGroupFlat('auto_block','auto',[],[]);
		$test = $this->queryAgent->getGroupFlat('catalog_block','product',[],[]);
		$category = $this->queryAgent->getGroupFlat('catalog_block','category_2',[],[]);
		foreach($test as $item){
			$new_price = $item->product_cost_field * $this->course->course_field;
			$new_sale = $item->product_sale_field * $this->course->course_field;
			$item->setField('product_cost',$new_price);
			$item->setField('product_sale',$new_sale);
		}
		// Генерация ссылки на товар исходя из принадлежности к группе
		foreach($test as $item){
			foreach($category as $c_item){
				if($item->owner_id_field == $c_item->id_field){
					switch($c_item->owner_id_field){
						case 51:
							$item->setField('title','/catalog/'.$c_item->slug_field.'/'.$item->slug_field);
							break;
						case 52:
							$item->setField('title','/showcase/'.$c_item->slug_field.'/'.$item->slug_field);
							break;

						case 53:
							$item->setField('title','/video/'.$c_item->slug_field.'/'.$item->slug_field);
							break;
						case 54:
							$item->setField('title','/soft/'.$c_item->slug_field.'/'.$item->slug_field);
							break;
					}
				}
			}
		}
		$soft = $this->queryAgent->getGroupFlat('catalog_block','product',[],['product'=>['owner_id' => 55]]);
		return view('front.catalog.product.product',[
			'product' => $product,
			'auto' 	  => $auto,
			'soft'	  => $soft,
			'prod' 	  => $test,
			'parent'  => $parent,
			'grand'	  => $grand_parent
		]);
	}
	//==================================================================
	//=== ******************************************** =================
	//=== Автоматизация оборудования \ Готовые решения =================
	//=== ******************************************** =================
	//==================================================================
	public function getAuto($slug){

        $auto = $this->queryAgent->getGroupItemBySlug('auto_block','auto',$slug);
        $cost = $auto->auto_cost_field * $this->course->course_field;
        $sale = $auto->auto_sale_field * $this->course->course_field;
        $auto->setField('auto_cost', $cost);
        $auto->setField('auto_sale', $sale);
        $all   = $this->queryAgent->getGroupFlat('auto_block','auto',[],[]);
        $test = $this->queryAgent->getGroupFlat('catalog_block','product',[],[]);
        $category = $this->queryAgent->getGroupFlat('catalog_block','category_2',[],[]);
        foreach($test as $item){
            $new_price = $item->product_cost_field * $this->course->course_field;
            $new_sale = $item->product_sale_field * $this->course->course_field;
            $item->setField('product_cost',$new_price);
            $item->setField('product_sale',$new_sale);
        }


		// Генерация ссылки на товар исходя из принадлежности к группе
		foreach($test as $item){
			foreach($category as $c_item){
				if($item->owner_id_field == $c_item->id_field){
					switch($c_item->owner_id_field){
						case 51:
							$item->setField('title','/catalog/'.$c_item->slug_field.'/'.$item->slug_field);
							break;
						case 52:
                            $item->setField('title','/showcase/'.$c_item->slug_field.'/'.$item->slug_field);
							break;

						case 53:
                            $item->setField('title','/video/'.$c_item->slug_field.'/'.$item->slug_field);
							break;
						case 54:
                            $item->setField('title','/soft/'.$c_item->slug_field.'/'.$item->slug_field);
							break;
					}
				}
			}
		}

		return view('front.catalog.automatic.automatic',[
			'auto' => $auto,
			'all'  => $all,
			'prod' => $test
		]);
	}
}






