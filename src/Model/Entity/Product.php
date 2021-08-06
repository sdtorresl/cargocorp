<?php

declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $titulo_ES
 * @property string $titulo_EN
 * @property string $descripcion_corta_EN
 * @property string $descripcion_corta_ES
 * @property string $descripcion_larga_EN
 * @property string $descripcion_larga_ES
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Product extends Entity
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
        'imagen' => true,
        'imagen_larga' => true,
        'titulo_ES' => true,
        'titulo_EN' => true,
        'descripcion_corta_EN' => true,
        'descripcion_corta_ES' => true,
        'descripcion_larga_EN' => true,
        'descripcion_larga_ES' => true,
        'created' => true,
        'modified' => true,
    ];
}
