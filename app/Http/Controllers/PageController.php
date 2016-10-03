<?php namespace App\Http\Controllers;

use Interpro\QuickStorage\Concept\QueryAgent;

class PageController extends Controller{


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

	public function getIndex(){
		$catalog = $this->queryAgent->getGroupItem('catalog_block','category_1',51);
		$showcase = $this->queryAgent->getGroupItem('catalog_block','category_1',52);
		$video = $this->queryAgent->getGroupItem('catalog_block','category_1',53);
		$auto = $this->queryAgent->getBlock('auto_block',[],[]);
		$soft = $this->queryAgent->getGroupItem('catalog_block','category_1',54);
		$acc = $this->queryAgent->getBlock('accounting_block',[],[]);
		$iiko = $this->queryAgent->getGroupFlat('auto_block','auto',[],['auto'=>['is_iiko'=>true]]);
		$acc_menu = $this->queryAgent->getGroupFlat('auto_block','auto',[],['auto'=>['is_iiko'=>false]]);
		return view('front.index.index',[
			'catalog' => $catalog,
			'auto'	  => $auto,
			'video'	  => $video,
			'soft'	  => $soft,
			'buh'	  => $acc,
			'showcase'=> $showcase,
			'iiko'	  => $iiko,
			'acc_m'	  => $acc_menu
		]);
	}


	public function getClients(){
		$filter = $this->queryAgent->getBlock('clients_filter',[],[]);
		$i = 0;
		$clients[$i] = $this->queryAgent->getGroup('clients_block','client',[],[]);
		$client_all = $this->queryAgent->getBlock('clients_block',[],[]);
		foreach($filter->institution_group as $item){
			$i++;
			$clients[$i] = $this->queryAgent->getGroup('clients_block','client',[],['client'=>['institution_type' => $item->id_field]]);

		}






		return view('front.clients.all-clients.clients',[
			'filter' => $filter,
			'counts' => $clients,
			'all'    => $client_all
		]);
	}
	public function getClientItem(){
		return view('front.clients.client-item.client-item',[]);
	}


}
