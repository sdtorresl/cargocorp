<?php

declare(strict_types=1);

namespace App\Controller;

use App\Form\ContactForm;

/**
 * Contacts Controller
 *
 */
class ContactsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $contactReasons = [
            'broker' => __('Soy un broker en busca de cotización'),
            'cedant' => __('Soy una empresa cedente que busca información adicional'),
            'provider' => __('Soy un proveedor de capacidad que busca información adicional'),
            'other' => __('Otras')
        ];

        $contact = new ContactForm();
        if ($this->request->is('post')) {
            $isValid = $contact->validate($this->request->getData());

            if (!$isValid)
                $this->Flash->error(__('Por favor completa todos los campos'));

            if ($contact->execute($this->request->getData())) {
                $this->Flash->success('We will get back to you soon.');
            } else {
                $this->Flash->error('There was a problem submitting your form.');
            }
        }

        $this->set(compact(['contactReasons', 'contact']));
    }
}
