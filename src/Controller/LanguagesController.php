<?php

namespace App\Controller;

/**
 * Languages Controller
 *
 */
class LanguagesController extends AppController
{
    /**
     * English method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function en()
    {
        $session = $this->getRequest()->getSession();
        $session->write('Config.language', 'en');
        $this->redirect($this->referer());
    }

    /**
     * Spanish method
     */
    public function es()
    {
        $session = $this->getRequest()->getSession();
        $session->write('Config.language', 'es');
        $this->redirect($this->referer());
    }
}
