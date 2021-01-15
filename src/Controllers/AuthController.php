<?php


namespace App\Controllers;

use App\Core\Controller;
use App\Core\Router;
use App\Core\App;
use App\Model\UserModel;



class AuthController extends Controller
{
    public function login()
    {
        $message = App::get('flash')::get('message');
        return $this->response->renderView('auth/login', 'default', compact('message'));
    }

    public function checkLogin()
    {
        $messages = [];
        $username = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST, 'password');

        if (!empty($username) && !empty($password)) {
            $pdo = App::get("DB");
            $userModel = new UserModel($pdo);
            $router = App::get(Router::class);
            $user = $userModel->findOneBy(['username' => $username]);

            if(empty($user)){

                App::get('flash')->set("message", "No se ha podido conectar");
                App::get("redirect")->redirect("login");

            }

            if ($user->getUsername() == $username && $user->getPassword() == $password){

                $_SESSION["loggedUser"] = $user->getId();

                App::get('flash')->set("message", "Se ha conectado correctamente");
                App::get("redirect")->redirect("movies");

            }


        }
        App::get('flash')->set("message", "No s'ha pogut iniciar sessió");
        App::get("redirect")->redirect("login");
    }

    public function logout()
    {
        session_unset();
        session_destroy();
        setcookie(session_name());
        App::get(Router::class)->redirect("");
    }
}