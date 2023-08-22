<?php

namespace App\Controllers;

class Email extends BaseController
{
    public function index()
    {
        
        return view('email/form_email');
        
    }
    public function enviar_email()
    {
        $asunto = $this->request->getPost('asunto');
        $mensaje = $this->request->getPost('mensaje');
        $correo = $this->request->getPost('correo');

        $email = \Config\Services::email();

        $email->setFrom('TESTING@example.com', 'Test');
        $email->setTo($correo);

        $email->setSubject($asunto);
        $email->setMessage($mensaje);

        if (! $email->send())
        {
            echo "no se ah podido enviar el correo";    
        }else{
            echo "correo enviado exitosamente";
        }
    }
        
            
}
