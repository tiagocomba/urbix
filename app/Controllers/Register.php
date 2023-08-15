<?php

namespace App\Controllers;

use \App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    {
        echo view('common/header');
        return view('users/register');
    }
    
    public function do_register()
{
    $userModel = new UserModel();

    $name = $this->request->getPost('name');
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');
    
    // Verificar si el correo electrónico ya está registrado
    if ($userModel->isEmailTaken($email)) {
        echo "El correo electrónico ya está registrado.";
        return;
    }
    
    $password = password_hash($password, PASSWORD_BCRYPT);

    $data = ['name' => $name, 'email' => $email, 'password' => $password];

    $ra = $userModel->insert($data);

    if ($ra)
    {   
        echo "Usuario registrado exitosamente!";
    }
    else
    {
        echo "Error durante el registro";
    }
}
}




