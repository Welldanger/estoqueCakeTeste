<?php
namespace Estoque\Model\Entity;

use Cake\ORM\Entity;

/**
 * Produto Entity
 *
 * @property int $id
 * @property string $title
 * @property float $price
 * @property float $cost
 * @property int $status
 * @property string $description
 * @property int $alert_quantity
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \Estoque\Model\Entity\Estoque[] $estoque
 * @property \Estoque\Model\Entity\EstoqueIn[] $estoque_in
 * @property \Estoque\Model\Entity\EstoqueOut[] $estoque_out
 * @property \Estoque\Model\Entity\Categoria[] $categorias
 */
class Produto extends Entity
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
