<?php

namespace app\controllers;

use app\core\Application;
use app\core\Constant;
use app\core\Controller;

class HomeController extends Controller
{
    public function home()
    {
        $session = Application::$app->session->get(Constant::$auth_session);

        if (!$session) {
            header("Location: /login");
            exit;
        }

        return $this->view("home", "main", null);
    }

    public function about()
    {
        return $this->view("about", "main", null);
    }

    public function contact()
    {
        return $this->view("contact", "main", null);
    }

    public function services()
    {
        return $this->view("services", "main", null);
    }

    public function cart()
    {
        return $this->view("cart", "main", null);
    }

     public function shop()
    {
        return $this->view("shop", "main", null);
    }

    public function authorizeRoles(): array
    {
        return [];
    }
    
}
