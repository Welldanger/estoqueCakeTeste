<?php
namespace Estoque\Model\Behavior;

use App\Model\Entity\Produto;
use Cake\ORM\Behavior;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

/**
 * EstoqueMenager behavior
 */
class EstoqueMenagerBehavior extends Behavior
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];
    public function stoqueIn($produto,$qtd){
        $this->createOrUpdate($produto,$qtd,true);
    }
    public function stoqueOut($produto,$qtd){
        $this->createOrUpdate($produto,$qtd,false);
    }
    private function createOrUpdate(Produto $Produto,$qtd, $in){
            $stoqueTable = TableRegistry::get('estoque');
            $estoque = $stoqueTable->find()
                ->where(['produto_id'=>$Produto->id])
                ->first();
            if(!$estoque and $in){
                $estoque  = $stoqueTable->newEntity();
                $estoque->produto_id = $Produto->id;
                $estoque->quantidade = $qtd;
                $estoque->unit_price = $Produto->price;
                $estoque->unit_cost = $Produto->cost;
                return $stoqueTable->save($estoque);
            }
            if($in){
                $estoque->quantidade += $qtd;
            }else{
                $estoque->quantidade -= $qtd;
            }
        return $stoqueTable->save($estoque);
    }
}
