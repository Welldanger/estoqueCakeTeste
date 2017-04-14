<?php
namespace Estoque\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EstoqueOut Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Produtos
 *
 * @method \Estoque\Model\Entity\EstoqueOut get($primaryKey, $options = [])
 * @method \Estoque\Model\Entity\EstoqueOut newEntity($data = null, array $options = [])
 * @method \Estoque\Model\Entity\EstoqueOut[] newEntities(array $data, array $options = [])
 * @method \Estoque\Model\Entity\EstoqueOut|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Estoque\Model\Entity\EstoqueOut patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Estoque\Model\Entity\EstoqueOut[] patchEntities($entities, array $data, array $options = [])
 * @method \Estoque\Model\Entity\EstoqueOut findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EstoqueOutTable extends Table
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

        $this->setTable('estoque_out');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Estoque.EstoqueMenager');


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
            ->integer('quantidade')
            ->requirePresence('quantidade', 'create')
            ->notEmpty('quantidade');

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
