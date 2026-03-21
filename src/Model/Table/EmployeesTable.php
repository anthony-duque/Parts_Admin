<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employees Model
 *
 * @method \App\Model\Entity\Employee newEmptyEntity()
 * @method \App\Model\Entity\Employee newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Employee[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Employee get($primaryKey, $options = [])
 * @method \App\Model\Entity\Employee findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Employee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Employee[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Employee|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Employee[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmployeesTable extends Table
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

        $this->setTable('employees');
        $this->setDisplayField('userName');
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
            ->scalar('userName')
            ->maxLength('userName', 15)
            ->requirePresence('userName', 'create')
            ->notEmptyString('userName');

        $validator
            ->scalar('firstName')
            ->maxLength('firstName', 15)
            ->allowEmptyString('firstName');

        $validator
            ->scalar('lastName')
            ->maxLength('lastName', 20)
            ->allowEmptyString('lastName');

        $validator
            ->allowEmptyString('cellNumber');

        $validator
            ->scalar('cellService')
            ->maxLength('cellService', 20)
            ->allowEmptyString('cellService');

        $validator
            ->scalar('deptCode')
            ->maxLength('deptCode', 12)
            ->allowEmptyString('deptCode');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->boolean('notify')
            ->allowEmptyString('notify');

        $validator
            ->scalar('notif_preference')
            ->maxLength('notif_preference', 10)
            ->allowEmptyString('notif_preference');

        $validator
            ->requirePresence('locID', 'create')
            ->notEmptyString('locID');

        return $validator;
    }
}
