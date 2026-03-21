<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Materials Model
 *
 * @method \App\Model\Entity\Material newEmptyEntity()
 * @method \App\Model\Entity\Material newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Material[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Material get($primaryKey, $options = [])
 * @method \App\Model\Entity\Material findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Material patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Material[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Material|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Material saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Material[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Material[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Material[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Material[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MaterialsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('Materials');
        $this->setDisplayField('Part_Number');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('Part_Number')
            ->maxLength('Part_Number', 15)
            ->requirePresence('Part_Number', 'create')
            ->notEmptyString('Part_Number')
            ->add('Part_Number', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('Description')
            ->maxLength('Description', 40)
            ->allowEmptyString('Description');

        $validator
            ->scalar('Unit')
            ->maxLength('Unit', 10)
            ->allowEmptyString('Unit');

        $validator
            ->scalar('Type')
            ->maxLength('Type', 10)
            ->allowEmptyString('Type');

        $validator
            ->allowEmptyString('Reorder_Quantity');

        $validator
            ->scalar('Brand')
            ->maxLength('Brand', 30)
            ->allowEmptyString('Brand');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['Part_Number']), ['errorField' => 'Part_Number']);

        return $rules;
    }
}
