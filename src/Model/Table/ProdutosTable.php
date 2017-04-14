<?php
namespace Estoque\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Produtos Model
 *
 * @property \Cake\ORM\Association\HasMany $Estoque
 * @property \Cake\ORM\Association\HasMany $EstoqueIn
 * @property \Cake\ORM\Association\HasMany $EstoqueOut
 * @property \Cake\ORM\Association\BelongsToMany $Categorias
 *
 * @method \Estoque\Model\Entity\Produto get($primaryKey, $options = [])
 * @method \Estoque\Model\Entity\Produto newEntity($data = null, array $options = [])
 * @method \Estoque\Model\Entity\Produto[] newEntities(array $data, array $options = [])
 * @method \Estoque\Model\Entity\Produto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Estoque\Model\Entity\Produto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Estoque\Model\Entity\Produto[] patchEntities($entities, array $data, array $options = [])
 * @method \Estoque\Model\Entity\Produto findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProdutosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('produtos');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Estoque.Estoque', [
            'foreignKey' => 'produto_id'
        ]);
        $this->hasMany('Estoque.EstoqueIn', [
            'foreignKey' => 'produto_id'
        ]);
        $this->hasMany('Estoque.EstoqueOut', [
            'foreignKey' => 'produto_id'
        ]);
        $this->belongsToMany('Estoque.Categorias', [
            'foreignKey' => 'produto_id',
            'targetForeignKey' => 'categoria_id',
            'joinTable' => 'categorias_produtos'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->decimal('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->decimal('cost')
            ->requirePresence('cost', 'create')
            ->notEmpty('cost');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->allowEmpty('description');

        $validator
            ->integer('alert_quantity')
            ->requirePresence('alert_quantity', 'create')
            ->notEmpty('alert_quantity');

        return $validator;
    }
}
