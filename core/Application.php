<?php

namespace app\core;

class Application
{
    public static Application $app;
    public DbConnection $db;
    public Router $router;
    public Session $session;
    public Form $form;

    public function __construct()
    {
        self::$app = $this;

        $this->session = new Session();
        $this->form = new Form();
        $this->router = new Router();
        $this->db = new DbConnection();
    }

    public function run()
    {
        echo $this->router->resolve();
    }
  
}
