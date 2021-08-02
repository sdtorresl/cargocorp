<?php
declare(strict_types=1);

namespace App\View\Cell;

use Cake\View\Cell;
use Cake\ORM\TableRegistry;

/**
 * LatestNews cell
 */
class LatestNewsCell extends Cell
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
    public function display()
    {
        $newsTable = TableRegistry::getTableLocator()->get('News');
        $news = $newsTable->find('all') -> order(['fecha_creacion' => 'desc']) -> limit(3);
        
        foreach ($news as $item) {
            $item->image = 'https://www.cargorisk.com/site/crm/files/blog/articulo_' . $item->id_blog . '/' . $item->nombre_archivo_corto;
        }
        
        //$news = $this-> News ->find(all);
        $this->set(compact('news'));
    }
}
