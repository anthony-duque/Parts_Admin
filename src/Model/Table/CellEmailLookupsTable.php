<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CellEmailLookups Model
 *
 * @method \App\Model\Entity\CellEmailLookup newEmptyEntity()
 * @method \App\Model\Entity\CellEmailLookup newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CellEmailLookup[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CellEmailLookup get($primaryKey, $options = [])
 * @method \App\Model\Entity\CellEmailLookup findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CellEmailLookup patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CellEmailLookup[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CellEmailLookup|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CellEmailLookup saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CellEmailLookup[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CellEmailLookup[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CellEmailLookup[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CellEmailLookup[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CellEmailLookupsTable extends Table
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

        $this->setTable('cell_email_lookups');
        $this->setDisplayField('cell_name');
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
            ->scalar('cell_name')
            ->maxLength('cell_name', 12)
            ->requirePresence('cell_name', 'create')
            ->notEmptyString('cell_name');

        $validator
            ->scalar('email_format')
            ->maxLength('email_format', 60)
            ->requirePresence('email_format', 'create')
            ->notEmptyString('email_format');

        return $validator;
    }
}
