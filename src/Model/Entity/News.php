<?php

declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SistemaBlog Entity
 *
 * @property int $id_blog
 * @property string|null $titulo_pagina
 * @property string|null $titulo_notificacion_ES
 * @property string|null $titulo_notificacion_EN
 * @property string|null $titulo_ES
 * @property string|null $titulo_EN
 * @property string|null $descripcion_corta_ES
 * @property string|null $descripcion_corta_EN
 * @property string|null $descripcion_larga_ES
 * @property string|null $descripcion_larga_EN
 * @property \Cake\I18n\FrozenTime|null $fecha_creacion
 * @property string|null $nombre_archivo_corto
 * @property string|null $nombre_archivo_largo
 * @property string|null $nombre_archivo_pdf
 * @property string|null $fuente_imagen
 * @property int|null $id_categoria
 * @property int|null $num_visitas
 * @property int|null $completo
 * @property int|null $id_posicion
 */
class News extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'titulo_pagina' => true,
        'titulo_notificacion_ES' => true,
        'titulo_notificacion_EN' => true,
        'titulo_ES' => true,
        'titulo_EN' => true,
        'descripcion_corta_ES' => true,
        'descripcion_corta_EN' => true,
        'descripcion_larga_ES' => true,
        'descripcion_larga_EN' => true,
        'fecha_creacion' => true,
        'nombre_archivo_corto' => true,
        'nombre_archivo_largo' => true,
        'nombre_archivo_pdf' => true,
        'fuente_imagen' => true,
        'id_categoria' => true,
        'num_visitas' => true,
        'completo' => true,
        'id_posicion' => true,
    ];
}
