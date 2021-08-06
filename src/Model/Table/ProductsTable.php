<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @method \App\Model\Entity\Product newEmptyEntity()
 * @method \App\Model\Entity\Product newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Product get($primaryKey, $options = [])
 * @method \App\Model\Entity\Product findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Product[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Product|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProductsTable extends Table
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

        $this->setTable('productos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('imagen')
            ->maxLength('imagen', 255);

        $validator
            ->scalar('imagen_larga')
            ->maxLength('imagen', 255);

        $validator
            ->scalar('titulo_ES')
            ->maxLength('titulo_ES', 100)
            ->requirePresence('titulo_ES', 'create')
            ->notEmptyString('titulo_ES');

        $validator
            ->scalar('titulo_EN')
            ->maxLength('titulo_EN', 100)
            ->requirePresence('titulo_EN', 'create')
            ->notEmptyString('titulo_EN');

        $validator
            ->scalar('descripcion_corta_EN')
            ->maxLength('descripcion_corta_EN', 500)
            ->requirePresence('descripcion_corta_EN', 'create')
            ->notEmptyString('descripcion_corta_EN');

        $validator
            ->scalar('descripcion_corta_ES')
            ->maxLength('descripcion_corta_ES', 500)
            ->requirePresence('descripcion_corta_ES', 'create')
            ->notEmptyString('descripcion_corta_ES');

        $validator
            ->scalar('descripcion_larga_EN')
            ->requirePresence('descripcion_larga_EN', 'create')
            ->notEmptyString('descripcion_larga_EN');

        $validator
            ->scalar('descripcion_larga_ES')
            ->requirePresence('descripcion_larga_ES', 'create')
            ->notEmptyString('descripcion_larga_ES');

        return $validator;
    }
}
