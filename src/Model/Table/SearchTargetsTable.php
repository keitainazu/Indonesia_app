<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SearchTargets Model
 *
 * @method \App\Model\Entity\SearchTarget get($primaryKey, $options = [])
 * @method \App\Model\Entity\SearchTarget newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SearchTarget[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SearchTarget|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SearchTarget patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SearchTarget[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SearchTarget findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SearchTargetsTable extends Table
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

        $this->table('search_targets');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->allowEmpty('keyword');

        $validator
            ->allowEmpty('status');

        $validator
            ->allowEmpty('result');

        return $validator;
    }
}
