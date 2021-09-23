<?php

declare(strict_types=1);

namespace App\Controller;

use App\Form\ContactForm;
use Cake\Http\Client;
use Cake\Core\Configure;

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

            if (!$this->getCaptchaValidation()) {
                if (!$isValid) {
                    $this->Flash->error(__('Por favor completa todos los campos.'));
                } else {
                    if ($contact->execute($this->request->getData())) {
                        $this->Flash->success(__('Hemos recibido tu mensaje, pronto nos contactaremos.'));
                    } else {
                        $this->Flash->error('Hubo un error al enviar tu mensaje. Por favor intenta de nuevo más tarde.');
                    }
                }
            } else {
                $this->Flash->error(__('No pasaste la validación del captcha'));
            }
        }

        $this->set(compact(['contactReasons', 'contact']));
    }

    private function getCaptchaValidation()
    {
        // reCaptcha validation
        $gcResponse = $this->request->getData('g-recaptcha-response');
        $http = new Client();
        $captchaResponse = $http->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => Configure::read('reCaptchaKeys.secret'), // TODO
            'response' => $gcResponse
        ]);
        $jsonResponse = $captchaResponse->getJson();

        return $jsonResponse['success'];
    }
}
