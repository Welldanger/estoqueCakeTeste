<?php
namespace Estoque\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estoque Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Produtos
 *
 * @method \Estoque\Model\Entity\Estoque get($primaryKey, $options = [])
 * @method \Estoque\Model\Entity\Estoque newEntity($data = null, array $options = [])
 * @method \Estoque\Model\Entity\Estoque[] newEntities(array $data, array $options = [])
 * @method \Estoque\Model\Entity\Estoque|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Estoque\Model\Entity\Estoque patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Estoque\Model\Entity\Estoque[] patchEntities($entities, array $data, array $options = [])
 * @method \Estoque\Model\Entity\Estoque findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EstoqueTable extends Table
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

        $this->setTable('estoque');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Estoque.Produtos', [
            'foreignKey' => 'produto_id',
            'joinType' => 'INNER'
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
            ->integer('decimal')
            ->requirePresence('decimal', 'create')
            ->notEmpty('decimal');

        $validator
            ->decimal('unit_price')
            ->requirePresence('unit_price', 'create')
            ->notEmpty('unit_price');

        $validator
            ->decimal('unit_cost')
            ->requirePresence('unit_cost', 'create')
            ->notEmpty('unit_cost');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['produto_id'], 'Produtos'));

        return $rules;
    }
}
