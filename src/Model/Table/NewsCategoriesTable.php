<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * NewsCategories Model
 *
 * @method \App\Model\Entity\SistemaBlogCategorium newEmptyEntity()
 * @method \App\Model\Entity\SistemaBlogCategorium newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\SistemaBlogCategorium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SistemaBlogCategorium get($primaryKey, $options = [])
 * @method \App\Model\Entity\SistemaBlogCategorium findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\SistemaBlogCategorium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SistemaBlogCategorium[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SistemaBlogCategorium|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SistemaBlogCategorium saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SistemaBlogCategorium[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SistemaBlogCategorium[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\SistemaBlogCategorium[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SistemaBlogCategorium[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class NewsCategoriesTable extends Table
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

        $this->setTable('sistema_blog_categoria');
        $this->setDisplayField('id_categoria');
        $this->setPrimaryKey('id_categoria');

        $this->hasMany('News')
            ->setForeignKey('id_categoria')
            ->setProperty('id_categoria');
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
            ->integer('id_categoria')
            ->allowEmptyString('id_categoria', null, 'create');

        $validator
            ->scalar('nombre_ES')
            ->allowEmptyString('nombre_ES');

        $validator
            ->scalar('nombre_EN')
            ->allowEmptyString('nombre_EN');

        return $validator;
    }
}
