<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\ORM\TableRegistry;

/**
 * News Controller
 *
 * @property \App\Model\Table\NewsTable $News
 * @method \App\Model\Entity\News[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NewsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index($categoryId = 1)
    {
        $this->paginate = [
            'order' => ['fecha_creacion' => 'desc'],
            'limit' => 8
        ];

        if ($categoryId == 1) {
            $query = $this->News->find();
        } else {
            $query = $this->News
                ->find()
                ->where(['id_categoria =' => $categoryId]);
        }

        $news = $this->paginate($query);

        foreach ($news as $item) {
            $item->image = 'https://www.cargorisk.com/site/crm/files/blog/articulo_' . $item->id_blog . '/' . $item->nombre_archivo_corto;
        }

        $newsCategoriesTable = TableRegistry::getTableLocator()->get('NewsCategories');
        $newsCategories = $newsCategoriesTable->find();
        $currentCategory = $newsCategoriesTable->findByIdCategoria($categoryId)->first();

        $this->set(compact('news', 'newsCategories', 'currentCategory'));
    }

    /**
     * View method
     *
     * @param string|null $title News title.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($title = null)
    {
        $article = $this->News->get($title, ['contain' => 'NewsCategories']);

        // Update visits
        $article->num_visitas = $article->num_visitas + 1 ?? 1;
        $this->News->save($article);

        $article->image = 'https://www.cargorisk.com/site/crm/files/blog/articulo_' . $article->id_blog . '/' . $article->nombre_archivo_corto;

        $this->set(compact('article', 'title'));
    }
}
