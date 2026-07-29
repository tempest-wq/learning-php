<?php

require '../vendor/autoload.php';

class HomeController extends BaseController
{
    public function index():string
    {
        return $this->view('home');
    }
}

class LoginController extends BaseController
{
    public function index():string
    {
        return $this->view('login');
    }
}
class BaseController
{
    protected function view(string $view):string
    {
        return $view;
    }
}

$controller = new HomeController();
