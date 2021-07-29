<?php

declare(strict_types=1);

namespace App\View\Cell;

use Cake\View\Cell;
use Cake\ORM\TableRegistry;

/**
 * Related cell
 */
class RelatedCell extends Cell
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
        $this->loadModel('News');

        $categoriesTable = TableRegistry::getTableLocator()->get('NewsCategories');
        $category = $categoriesTable->find()->where(['id_categoria =' => $categoryId])->first();

        $news = $this->News->find('all')
            ->contain(['NewsCategories'])
            ->where(['News.id_categoria =' => $categoryId, 'id_blog NOT IN' => $exceptions])
            ->order(['fecha_creacion' => 'desc'])
            ->limit(3);
        foreach ($news as $item) {
            $item->image = 'https://www.cargorisk.com/site/crm/files/blog/articulo_' . $item->id_blog . '/' . $item->nombre_archivo_corto;
        }

        $this->set(compact('category', 'news'));
    }
}
