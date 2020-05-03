<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Flowers Model
 *
 * @property \App\Model\Table\OccasionsTable&\Cake\ORM\Association\HasMany $Occasions
 *
 * @method \App\Model\Entity\Flower newEmptyEntity()
 * @method \App\Model\Entity\Flower newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Flower[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Flower get($primaryKey, $options = [])
 * @method \App\Model\Entity\Flower findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Flower patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Flower[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Flower|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Flower saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Flower[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Flower[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Flower[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Flower[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FlowersTable extends Table
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

        $this->setTable('flowers');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Occasions', [
            'foreignKey' => 'flower_id',
        ]);
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 32)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('occasion')
            ->maxLength('occasion', 32)
            ->requirePresence('occasion', 'create')
            ->notEmptyString('occasion');

        $validator
            ->numeric('cost')
            ->requirePresence('cost', 'create')
            ->notEmptyString('cost');

        $validator
            ->integer('quantity')
            ->requirePresence('quantity', 'create')
            ->notEmptyString('quantity');

        return $validator;
    }
}
