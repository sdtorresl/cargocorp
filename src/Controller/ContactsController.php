<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Mailer\Mailer;
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
        if ($this->request->is('post')) {
            // reCaptcha validation
            // $gcResponse = $this->request->getData('g-recaptcha-response');
            // $http = new Client();
            // $captchaResponse = $http->post('https://www.google.com/recaptcha/api/siteverify', [
            //     'secret' => Configure::read('reCaptchaKeys.secret'), // TODO
            //     'response' => $gcResponse
            // ]);
            // $jsonResponse = $captchaResponse->getJson();

            // if ($jsonResponse['success']) {
            $contact = $this->request->getData();


            $this->Flash->success(__('Your message has been sent!'));

            $message = 'Hemos recibido su mensaje en nuestra página web:<br><br>';
            $message .= 'Nombres:  ' . $contact->first_name . '<br>';
            $message .= 'Apellidos:  ' . $contact->last_name . '<br>';
            $message .= 'Teléfono:  ' . $contact->telephone . '<br>';
            $message .= 'Mensaje:  ' . $contact->message . '<br>';

            // Mail to contact
            $mail = new Mailer('default');
            $mail->setFrom(['soporte@innovaciones.co' => 'CargoCorp UW'])
                ->setTo($contact->email)
                ->setSubject(__('New message on CargoCorp UW'))
                ->deliver($message);

            $message = 'Un usuario ha enviado un nuevo mensaje en la página web.<br><br>';
            $message .= 'Nombres:  ' . $contact->first_name . '<br>';
            $message .= 'Apellidos:  ' . $contact->last_name . '<br>';
            $message .= 'Correo:  ' . $contact->email . '<br>';
            $message .= 'Teléfono:  ' . $contact->telephone . '<br>';
            $message .= 'Mensaje:  ' . $contact->message . '<br>';

            // Mail to Admin
            $mail = new Mailer('default');
            $mail->setFrom(['soporte@innovaciones.co' => 'CargoCorp UW'])
                ->setTo('soluciones@innovaciones.co')
                ->setSubject(__('New message on CargoCorp UW'))
                ->deliver($message);

            return $this->redirect(['action' => 'index']);
            // } else {
            //     $this->Flash->error(__('Your didn\'t pass captcha validation. Please, try again.'));
            // }
        }
    }
}
