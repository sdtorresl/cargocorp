<?php

declare(strict_types=1);

namespace App\View\Cell;

use Cake\View\Cell;
use Cake\I18n\Date;

/**
 * MostRead cell
 */
class MostReadCell extends Cell
{
    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Initialization logic run at the end of object construction.
     *
     * @return void
     */
    public function initialize(): void
    {
    }

    /**
     * Default display method.
     *
     * @return void
     */
    public function display($categoryId, $exceptions)
    {
        $date = new Date();
        $date->modify('-90 days');

        $this->loadModel('News');

        $mostRead = $this->News->find('all')
            ->contain(['NewsCategories'])
            ->where([
                'News.id_categoria =' => $categoryId,
                'id_blog NOT IN' => $exceptions,
                'fecha_creacion >' => $date
            ])
            ->order(['num_visitas' => 'desc'])
            ->first();
        $mostRead->image = 'https://www.cargorisk.com/site/crm/files/blog/articulo_' . $mostRead->id_blog . '/' . $mostRead->nombre_archivo_corto;

        $this->set(compact('mostRead'));
    }
}
