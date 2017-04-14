<?php
namespace Estoque\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Categorias Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Produtos
 *
 * @method \Estoque\Model\Entity\Categoria get($primaryKey, $options = [])
 * @method \Estoque\Model\Entity\Categoria newEntity($data = null, array $options = [])
 * @method \Estoque\Model\Entity\Categoria[] newEntities(array $data, array $options = [])
 * @method \Estoque\Model\Entity\Categoria|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Estoque\Model\Entity\Categoria patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Estoque\Model\Entity\Categoria[] patchEntities($entities, array $data, array $options = [])
 * @method \Estoque\Model\Entity\Categoria findOrCreate($search, callable $callback = null, $options = [])
 */
class CategoriasTable extends Table
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

        $this->setTable('categorias');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Estoque.Produtos', [
            'foreignKey' => 'categoria_id',
            'targetForeignKey' => 'produto_id',
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
            ->requirePresence('url', 'create')
            ->notEmpty('url');

        return $validator;
    }
}
