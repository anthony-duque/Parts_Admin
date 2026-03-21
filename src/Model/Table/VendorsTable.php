<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vendors Model
 *
 * @method \App\Model\Entity\Vendor newEmptyEntity()
 * @method \App\Model\Entity\Vendor newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Vendor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vendor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vendor findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Vendor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vendor[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vendor|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vendor saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vendor[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vendor[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vendor[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vendor[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VendorsTable extends Table
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

        $this->setTable('vendors');
        $this->setDisplayField('name');
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
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->boolean('oem')
            ->allowEmptyString('oem');

        $validator
            ->scalar('phone_number')
            ->maxLength('phone_number', 30)
            ->allowEmptyString('phone_number');

        $validator
            ->scalar('address')
            ->maxLength('address', 50)
            ->allowEmptyString('address');

        $validator
            ->scalar('city')
            ->maxLength('city', 20)
            ->allowEmptyString('city');

        $validator
            ->scalar('state')
            ->maxLength('state', 2)
            ->allowEmptyString('state');

        $validator
            ->scalar('zipcode')
            ->maxLength('zipcode', 10)
            ->allowEmptyString('zipcode');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->notEmptyString('location_ID');

        $validator
            ->scalar('shop_location')
            ->maxLength('shop_location', 50)
            ->allowEmptyString('shop_location');

        $validator
            ->boolean('opt_oem')
            ->allowEmptyString('opt_oem');

        $validator
            ->boolean('aftermarket')
            ->allowEmptyString('aftermarket');

        $validator
            ->boolean('preferred')
            ->allowEmptyString('preferred');

        $validator
            ->boolean('electronic')
            ->allowEmptyString('electronic');

        $validator
            ->nonNegativeInteger('vendor_ID')
            ->allowEmptyString('vendor_ID');

        return $validator;
    }
}
