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
		$clients = $this->queryAgent->getGroupFlat('clients_block','client',[],[]);
		$filter = $this->queryAgent->getBlock('clients_filter',[],[]);
		return view('front.index.index',[
			'catalog' => $catalog,
			'auto'	  => $auto,
			'video'	  => $video,
			'soft'	  => $soft,
			'buh'	  => $acc,
			'showcase'=> $showcase,
			'iiko'	  => $iiko,
			'acc_m'	  => $acc_menu,
			'client'  => $clients,
			'filter'  => $filter
		]);
	}


	public function getClients(){
		$client_all = $this->queryAgent->getGroup('clients_block','client',[],[]);
		$filter = $this->queryAgent->getBlock('clients_filter',[],[]);
		$all = $this->queryAgent->getGroup('clients_block','client',[],[]);
		$i = 0;
		$clients_type[$i] = $this->queryAgent->getGroup('clients_block','client',[],[]);
		foreach($filter->institution_group as $item){
			$i++;
			$clients_type[$i] = $this->queryAgent->getGroup('clients_block','client',[],['client'=>['institution_type' => $item->id_field]]);
			$clients_type[$i] = $clients_type[$i]->count();
		}
		$city = 'all';
		$inst = 'all';
		return view('front.clients.all-clients.clients',[
			'all_c'    => $client_all,
			'all_all' => $all,
			'filter' => $filter,
			'counts' => $clients_type,
			'city'	 => $city,
			'inst'	 => $inst
		]);
	}

	public function getClientsFilter($city, $inst){
		$i = 0;
		$all = $this->queryAgent->getGroup('clients_block','client',[],[]);
		$clients_type[$i] = $this->queryAgent->getGroup('clients_block','client',[],[]);
		if($city != 'all' && $inst != 'all'){
			$all_clients = $this->queryAgent->getGroupFlat('clients_block','client',[],['client' => ['city_name'=>$city, 'institution_type' => $inst]  ]);
		} else if($inst != 'all'){
			$all_clients = $this->queryAgent->getGroupFlat('clients_block','client',[],['client' => ['institution_type' => $inst]  ]);
		} else if( $city != 'all'){
			$all_clients = $this->queryAgent->getGroupFlat('clients_block','client',[],['client' => ['city_name'=>$city]  ]);
		}else{
			$all_clients =	$this->queryAgent->getGroup('clients_block','client',[],[]);
		}
		$filter = $this->queryAgent->getBlock('clients_filter',[],[]);
		foreach($filter->institution_group as $item){
			$i++;
			$clients_type[$i] = $this->queryAgent->getGroup('clients_block','client',[],['client'=>['institution_type' => $item->id_field]]);
			$clients_type[$i] = $clients_type[$i]->count();
		}
		return view('front.clients.all-clients.clients',[
			'all_c'    => $all_clients,
			'all_all'  => $all,
			'filter' => $filter,
			'counts' => $clients_type,
			'city'  => $city,
			'inst'	=> $inst
		]);
	}
	public function getClientItem($slug){
		$client = $this->queryAgent->getGroupItemBySlug('clients_block','client',$slug);
		$all_clients = $this->queryAgent->getGroupFlat('clients_block','client',[],['client' => ['institution_type' => $client->institution_type_field]  ]);
		$filter = $this->queryAgent->getBlock('clients_filter',[],[]);
		return view('front.clients.client-item.client-item',[
			'client' => $client,
			'filter' => $filter,
			'all'	 => $all_clients
		]);
	}

	public function getInfPage($slug){
		$inf_page = $this->queryAgent->getGroupItemBySlug('information_page','inf_page',$slug);
		$all_pages = $this->queryAgent->getGroupFlat('information_page','inf_page',[],[]);
		return view('front.information.information-page',[
			'inf' => $inf_page,
			'all' => $all_pages
		]);
	}


}
