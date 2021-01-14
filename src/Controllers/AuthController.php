<?php


namespace App\Controllers;

use App\Core\Controller;
use App\Core\Router;
use App\Core\App;


class AuthController extends Controller
{
    public function login()
    {
        return $this->response->renderView('auth/login', 'default');
    }

    public function checkLogin()
    {
        $messages = [];
        $username = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST, 'password');
        if (!empty($username) && !empty($password)) {
            // TODO: Authentication

        }
        App::get('flash')->set("message", "No s'ha pogut iniciar sessió");
        App::get(Router::class)->redirect("login");
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        setcookie(session_name());
        App::get(Router::class)->redirect("");
    }
}