<?php
// in src/Form/ContactForm.php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;
use Cake\Mailer\Mailer;
use Cake\Http\Client;
use Cake\Core\Configure;
use Cake\Log\Log;

class ContactForm extends Form
{
    protected function _buildSchema(Schema $schema): Schema
    {
        return $schema
            ->addField('name', 'string')
            ->addField('email', ['type' => 'string'])
            ->addField('reason', ['type' => 'string'])
            ->addField('message', ['type' => 'text']);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->minLength('name', 10)
            ->email('email');

        return $validator;
    }

    protected function _execute(array $data): bool
    {
        try {
            Log::write('debug', 'Sending email to contact');

            // reCaptcha validation
            // $gcResponse = $this->request->getData('g-recaptcha-response');
            // $http = new Client();
            // $captchaResponse = $http->post('https://www.google.com/recaptcha/api/siteverify', [
            //     'secret' => Configure::read('reCaptchaKeys.secret'), // TODO
            //     'response' => $gcResponse
            // ]);
            // $jsonResponse = $captchaResponse->getJson();

            $message = 'Hemos recibido su mensaje en nuestra página web:<br><br>';
            $message .= 'Nombre: ' . $data['name'] . '<br>';
            $message .= 'Razón de contacto: ' . $data['reason'] . '<br>';
            $message .= 'Correo: ' . $data['email'] . '<br>';
            $message .= 'Mensaje: ' . $data['message'] . '<br>';

            // Mail to contact
            $mail = new Mailer('default');
            $mail->setFrom(['soporte@innovaciones.co' => 'CargoCorp UW'])
                ->setTo($data['email'])
                ->setSubject(__('Mensaje registrado en CargoCorp UW'))
                ->deliver($message);

            $message = 'Un usuario ha enviado un nuevo mensaje en la página web.<br><br>';
            $message .= 'Nombres:  ' . $data['name'] . '<br>';
            $message .= 'Correo:  ' . $data['email'] . '<br>';
            $message .= 'Razón de contacto:  ' . $data['reason'] . '<br>';
            $message .= 'Mensaje:  ' . $data['message'] . '<br>';

            // Mail to Admin
            $mail = new Mailer('default');
            $mail->setFrom(['soporte@innovaciones.co' => 'CargoCorp UW'])
                ->setTo('soluciones@innovaciones.co')
                ->setSubject(__('Nuevo mensaje en CargoCorp UW'))
                ->deliver($message);

            return true;
        } catch (\Throwable $th) {
            Log::write('debug', 'Error sending an email');

            return false;
        }
    }
}
