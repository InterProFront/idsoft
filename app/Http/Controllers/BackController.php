<?php namespace App\Http\Controllers;

use Interpro\QuickStorage\Laravel\QueryAgent;

class BackController extends Controller {

	private $queryAgent;
	function __construct(QueryAgent $queryAgent){
		$this->queryAgent = $queryAgent;
		$all_image = $this->queryAgent->getBlock('dom_all_images',[],[]);

		view()->share('dom_all_images', $all_image);
	}


	public function editAll(){
		$static = $this->queryAgent->getBlock('static_site',[],[]);

		return view('back.blocks.static_site', [
			'static_site' => $static
		]);
	}

	public function editMenu(){
		$static = $this->queryAgent->getBlock('main_menu',[],[]);

		return view('back.blocks.main_menu', [
			'main_menu' => $static
		]);
	}

	//================================================================
	//	Редактирование
	//	Страница "Наши клиенты"
	//	Карточка Клиента
	//================================================================
	public function editClients(){
		$clients = $this->queryAgent->getBlock('clients_block',[],[]);
		return view('back.blocks.clients_block',[
			'clients_block' => $clients

		]);
	}
	public function editClientItem($id){
		$clients = $this->queryAgent->getGroupItem('clients_block','client',$id);
		$city    = $this->queryAgent->getGroupFlat('clients_filter','city',[],[]);
		$inst    = $this->queryAgent->getGroupFlat('clients_filter','institution',[],[]);


		return view('back.blocks.groupitems.clients_block.client_edit',[
			'item_client' => $clients,
			'city_name'   => $city,
			'inst'		  => $inst

		]);
	}


	//================================================================
	//	Редактирование:
	//	Каталога оборудования
	//	Стеллажи и витрны
	//	Видеонаблюдение
	//	Программное обеспечение
	//================================================================
	public  function editParentGroup(){
		$catalog = $this->queryAgent->getBlock('catalog_block',[],[]);
		return view('back.blocks.catalog_block', [
			'catalog_block' => $catalog
		]);
	}
	public function editCatalog(){
		$catalog = $this->queryAgent->getGroupItem('catalog_block','category_1',51);
		return view('back.blocks.groupitems.catalog_block.category_1_edit', [
			'item_category_1' => $catalog
		]);
	}
	public function editShowcase(){
		$catalog = $this->queryAgent->getGroupItem('catalog_block','category_1',52);
		return view('back.blocks.groupitems.catalog_block.category_1_edit', [
			'item_category_1' => $catalog
		]);
	}
	public function editVideo(){
		$catalog = $this->queryAgent->getGroupItem('catalog_block','category_1',53);
		return view('back.blocks.groupitems.catalog_block.category_1_edit', [
			'item_category_1' => $catalog
		]);
	}
	public function editSoft(){
		$catalog = $this->queryAgent->getGroupItem('catalog_block','category_1',54);
		return view('back.blocks.groupitems.catalog_block.category_1_edit', [
			'item_category_1' => $catalog
		]);
	}
	public function editSubCategory($id){
		$catalog = $this->queryAgent->getGroupItem('catalog_block','category_2',$id);
		return view('back.blocks.groupitems.catalog_block.category_2_edit', [
			'item_category_2' => $catalog
		]);
	}


	//================================================================
	//	Редактирование карточки Товара
	//
	//
	//================================================================
	public function editProduct($id, $product_id){
		$product = 		$this->queryAgent->getGroupItem('catalog_block','product',$product_id);
		$all_products = $this->queryAgent->getGroupFlat('catalog_block','product',[],[]);
		$auto = 		$this->queryAgent->getGroupFlat('auto_block','auto',[],[]);
		return view('back.blocks.groupitems.catalog_block.product_edit', [
			'item_product' => $product,
			'related'      => $all_products,
			'auto'		   => $auto
		]);
	}
	public function editProductSoft($product_id){
		$product = $this->queryAgent->getGroupItem('catalog_block','product',$product_id);
		$all_products = $this->queryAgent->getGroupFlat('catalog_block','product',[],[]);
		$auto = 		$this->queryAgent->getGroupFlat('auto_block','auto',[],[]);
		return view('back.blocks.groupitems.catalog_block.product_edit', [
			'item_product' => $product,
			'related'      => $all_products,
			'auto'		   => $auto
		]);
	}
	//================================================================
	//	Редактирование страницы "Готовые решения"
	//	Редактирование карточки "Готовые решения"
	//
	//================================================================

	public function editAuto(){
		$auto = $this->queryAgent->getBlock('auto_block',[],[]);
		return view('back.blocks.auto_block', [
			'auto_block' => $auto
		]);
	}
	public function editAutoItem($id){
		$auto = $this->queryAgent->getGroupItem('auto_block','auto',$id);
		return view('back.blocks.groupitems.auto_block.auto_edit', [
			'item_auto' => $auto
		]);
	}


	//================================================================
	//	Редактирование страницы "Бухгалтерия"
	//	Редактирование Категории
	//	Редактирования Тарифа
	//================================================================
	public function editAcc(){
		$acc = $this->queryAgent->getBlock('accounting_block',[],[]);
		return view('back.blocks.accounting_block', [
			'accounting_block' => $acc
		]);
	}
	public function editAccCategory($id){
		$acc = $this->queryAgent->getGroupItem('accounting_block','tarif_category',$id);
		return view('back.blocks.groupitems.accounting_block.tarif_category_edit', [
			'item_tarif_category' => $acc
		]);
	}
	public function editAccItem($id, $tarif_id){
		$acc = $this->queryAgent->getGroupItem('accounting_block','tarif',$tarif_id);
		return view('back.blocks.groupitems.accounting_block.tarif_edit', [
			'item_tarif' => $acc
		]);
	}





	//=====================================================================
	//	Редактирование допольнительных полей
	//	Город
	//	Категория заведений
	//	Метрики
	//  Курсы валют
 	//=====================================================================
	public function editMetrik(){
		$static = $this->queryAgent->getBlock('static_site',[],[]);
		return view('back.metrik', [
			'static_site' => $static
		]);
	}

	public function editCity(){
		$static = $this->queryAgent->getBlock('clients_filter',[],[]);
		return view('back.city', [
			'clients_filter' => $static
		]);
	}
	public function editInstitution(){
		$static = $this->queryAgent->getBlock('clients_filter',[],[]);
		return view('back.inst', [
			'clients_filter' => $static
		]);
	}
	public function editCourse(){
		$static = $this->queryAgent->getBlock('clients_filter',[],[]);
		return view('back.blocks.clients_filter', [
			'clients_filter' => $static
		]);
	}

}
