<?php

namespace app\controllers;

use app\core\Application;
use app\core\Constant;
use app\core\Controller;
use app\models\AuthModel;

class AuthController extends Controller
{
    public function registration()
    {
        return $this->view("registration", "auth", null);
    }

    public function registrationPost()
    {
        $model = new AuthModel();
        $model->mapData($this->request->all());
        $model->validate();

        if ($model->errors) {
            return $this->view("registration", "auth", $model);
        }

        $model->registration();

        Application::$app->session->setFlash(Constant::$flash_session_success, "Uspešno ste se registrovali. Možete se prijaviti.");
        header("Location: /login");
        exit;
    }

public function login()
{
    if (Application::$app->session->get(Constant::$auth_session)) {
        header("Location: /home");
        exit;
    }

    $model = new AuthModel();
    return $this->view("login", "auth", ['params' => $model]);  
}



    public function loginPost()
    {
        $model = new AuthModel();
        $model->mapData($this->request->all());
        $model->validate();

        if ($model->errors) {
            Application::$app->session->setFlash(Constant::$flash_session_error, "Uneti podaci nisu validni.");
            return $this->view("login", "auth", $model);
        }

        if ($model->login()) {
            Application::$app->session->set(Constant::$auth_session, $model->sessionData());
            Application::$app->session->setFlash(Constant::$flash_session_success, "Uspešno ste se prijavili!");
            header("Location: /home");
            exit;
        } else {
            Application::$app->session->setFlash(Constant::$flash_session_error, "Neispravni email ili lozinka.");
            return $this->view("login", "auth", $model);
        }
    }

    public function logout()
    {
        if (Application::$app->session->get(Constant::$auth_session)) {
            Application::$app->session->remove(Constant::$auth_session);
            Application::$app->session->setFlash(Constant::$flash_session_success, "Uspešno ste se odjavili.");
            header("Location: /login");
            exit;
        }
    }

    public function accessDenied()
    {
        return $this->view("accessDenied", "main", null);
    }

    public function authorizeRoles(): array
    {
        // Možeš ovde vratiti ['Admin'] ako želiš da samo admin ima pristup
        return [];
    }
}
