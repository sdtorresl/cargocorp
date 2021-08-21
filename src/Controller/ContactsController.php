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
            $contactData = $this->request->getData();
            $isValid = $contact->validate($contactData);

            if (!$isValid) {
                $this->Flash->error(__('Por favor completa todos los campos.'));
            } else {

                if ($contact->execute($this->request->getData())) {
                    $this->Flash->success(__('Hemos recibido tu mensaje, pronto nos contactaremos.'));
                } else {
                    $this->Flash->error('Hubo un error al enviar tu mensaje. Por favor intenta de nuevo más tarde.');
                }
            }
        }

        $this->set(compact(['contactReasons', 'contact']));
    }
}
