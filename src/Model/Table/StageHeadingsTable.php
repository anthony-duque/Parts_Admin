<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StageHeadings Model
 *
 * @method \App\Model\Entity\StageHeading newEmptyEntity()
 * @method \App\Model\Entity\StageHeading newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\StageHeading[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\StageHeading get($primaryKey, $options = [])
 * @method \App\Model\Entity\StageHeading findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\StageHeading patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\StageHeading[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\StageHeading|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StageHeading saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StageHeading[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\StageHeading[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\StageHeading[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\StageHeading[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class StageHeadingsTable extends Table
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

        $this->setTable('stage_headings');
        $this->setDisplayField('Description');
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
            ->scalar('Description')
            ->maxLength('Description', 50)
            ->requirePresence('Description', 'create')
            ->notEmptyString('Description');

        $validator
            ->requirePresence('Order_no', 'create')
            ->notEmptyString('Order_no');

        $validator
            ->requirePresence('Loc_ID', 'create')
            ->notEmptyString('Loc_ID');

        return $validator;
    }
}
