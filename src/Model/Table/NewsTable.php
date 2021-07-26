<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SistemaBlog Model
 *
 * @method \App\Model\Entity\SistemaBlog newEmptyEntity()
 * @method \App\Model\Entity\SistemaBlog newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\SistemaBlog[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SistemaBlog get($primaryKey, $options = [])
 * @method \App\Model\Entity\SistemaBlog findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\SistemaBlog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SistemaBlog[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\SistemaBlog|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SistemaBlog saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SistemaBlog[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SistemaBlog[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\SistemaBlog[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\SistemaBlog[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class NewsTable extends Table
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

        $this->setTable('sistema_blog');
        $this->setDisplayField('id_blog');
        $this->setPrimaryKey('id_blog');
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
            ->integer('id_blog')
            ->allowEmptyString('id_blog', null, 'create');

        $validator
            ->scalar('titulo_pagina')
            ->allowEmptyString('titulo_pagina');

        $validator
            ->scalar('titulo_notificacion_ES')
            ->allowEmptyString('titulo_notificacion_ES');

        $validator
            ->scalar('titulo_notificacion_EN')
            ->allowEmptyString('titulo_notificacion_EN');

        $validator
            ->scalar('titulo_ES')
            ->allowEmptyString('titulo_ES');

        $validator
            ->scalar('titulo_EN')
            ->allowEmptyString('titulo_EN');

        $validator
            ->scalar('descripcion_corta_ES')
            ->allowEmptyString('descripcion_corta_ES');

        $validator
            ->scalar('descripcion_corta_EN')
            ->allowEmptyString('descripcion_corta_EN');

        $validator
            ->scalar('descripcion_larga_ES')
            ->allowEmptyString('descripcion_larga_ES');

        $validator
            ->scalar('descripcion_larga_EN')
            ->allowEmptyString('descripcion_larga_EN');

        $validator
            ->dateTime('fecha_creacion')
            ->allowEmptyDateTime('fecha_creacion');

        $validator
            ->scalar('nombre_archivo_corto')
            ->maxLength('nombre_archivo_corto', 60)
            ->allowEmptyString('nombre_archivo_corto');

        $validator
            ->scalar('nombre_archivo_largo')
            ->maxLength('nombre_archivo_largo', 60)
            ->allowEmptyString('nombre_archivo_largo');

        $validator
            ->scalar('nombre_archivo_pdf')
            ->maxLength('nombre_archivo_pdf', 100)
            ->allowEmptyString('nombre_archivo_pdf');

        $validator
            ->scalar('fuente_imagen')
            ->maxLength('fuente_imagen', 200)
            ->allowEmptyFile('fuente_imagen');

        $validator
            ->integer('id_categoria')
            ->allowEmptyString('id_categoria');

        $validator
            ->integer('num_visitas')
            ->allowEmptyString('num_visitas');

        $validator
            ->integer('completo')
            ->allowEmptyString('completo');

        $validator
            ->integer('id_posicion')
            ->allowEmptyString('id_posicion');

        return $validator;
    }
}
