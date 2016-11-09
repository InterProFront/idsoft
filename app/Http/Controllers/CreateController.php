<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Interpro\QuickStorage\Concept\Exception\WrongBlockFieldNameException;
use Interpro\QuickStorage\Laravel\QueryAgent;
use Interpro\QuickStorage\Concept\Command\CreateGroupItemCommand;
use Interpro\QuickStorage\Concept\Command\Crop\InitGroupCropCommand;
use Interpro\QuickStorage\Laravel\Item\GroupItem;

use Illuminate\Http\Request;

class CreateController extends Controller {

    private $queryAgent;
    function __construct(QueryAgent $queryAgent){
        $this->queryAgent = $queryAgent;
    }
    public function createGroupItem($block, $group, $owner_id)
    {
        try {

            $dataArr = $this->dispatch(new CreateGroupItemCommand($block, $group, $owner_id));

            $this->dispatch(new InitOneGroupCropCommand($block, $group, $dataArr['id']));

            $group_item = new GroupItem($dataArr);

            $soft =         $this->queryAgent->getGroupFlat('catalog_block','product',[],['product'=>['owner_id' => 55]]);
            $all_products = $this->queryAgent->getGroupFlat('catalog_block','product',[],[]);
            $auto = 		$this->queryAgent->getGroupFlat('auto_block','auto',[],[]);

//            dd($all_products);
            $complhtml = view('back/blocks/groupitems/'.$block.'/'.$group, [
                'item_'.$group => $group_item,
                'related'   => $all_products,
                'auto'      => $auto,
                'soft'      => $soft])->render();


            $status = 'OK';

            return compact('status', 'complhtml');

        } catch(\Exception $exception) {

            return ['status'=>('Что-то пошло не так. '.$exception->getMessage())];
        }
    }

}
