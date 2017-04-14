<?php
namespace Estoque\Model\Entity;

use Cake\ORM\Entity;

/**
 * Estoque Entity
 *
 * @property int $id
 * @property int $produto_id
 * @property int $decimal
 * @property float $unit_price
 * @property float $unit_cost
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Produto $produto
 */
class Estoque extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
