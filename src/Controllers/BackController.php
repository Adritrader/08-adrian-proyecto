<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Controller;
use App\Core\Exception\ModelException;
use App\Core\Router;
use App\Entity\Movie;
use App\Entity\Usuario;
use App\Model\GenreModel;
use App\Model\MovieModel;
use App\Model\PedidoModel;
use App\Model\ProductoModel;
use App\Model\UsuarioModel;
use App\Utils\MyLogger;
use App\Utils\MyMail;
use App\Utils\UploadedFile;
use DateTime;
use Exception;
use PDOException;

/**
 * Class DefaultController
 * @package App\Controllers
 */
class BackController extends Controller
{
    /**
     * @return string
     * @throws Exception
     */
    public function backIndex(): string
    {

            return $this->response->renderView("back/back-index", "back");

    }
    public function backReservas(): string
    {

        return $this->response->renderView("back/back-reservas", "back");

    }
    public function backGaleria(): string
    {

        return $this->response->renderView("back/back-galeria", "back");

    }
    public function backBlog(): string
    {

        return $this->response->renderView("back/back-blog", "back");

    }
    public function backProductos(): string
    {

        $title = "BackOffice | Productos";
        $errors = [];
        $productoModel = App::getModel(ProductoModel::class);
        $productos = $productoModel->findAll();

        $order = filter_input(INPUT_GET, "order", FILTER_SANITIZE_STRING);

        if (!empty($_GET['order'])) {
            $orderBy = [$_GET["order"] => $_GET["tipo"]];
            try {
                $productos = $productoModel->findAll($orderBy);
            } catch (Exception $e) {
                $errors[] = $e->getMessage();
            }
        }

        $router = App::get(Router::class);

        $message = App::get("flash")::get("message");

        return $this->response->renderView("back/back-productos", "back", compact('title', 'productos',
            'productoModel', 'errors', 'router', 'message'));


    }
    public function backPedidos(): string
    {

        $title = "BackOffice | Pedidos";
        $errors = [];
        $pedidoModel = App::getModel(PedidoModel::class);
        $pedidos = $pedidoModel->findAll();

        $order = filter_input(INPUT_GET, "order", FILTER_SANITIZE_STRING);

        if (!empty($_GET['order'])) {
            $orderBy = [$_GET["order"] => $_GET["tipo"]];
            try {
                $pedidos = $pedidoModel->findAll($orderBy);
            } catch (Exception $e) {
                $errors[] = $e->getMessage();
            }
        }

        $router = App::get(Router::class);

        $message = App::get("flash")::get("message");

        return $this->response->renderView("back/back-pedidos", "back");

    }
    public function backUsuarios(): string
    {
        $title = "BackOffice | Usuarios";
        $errors = [];
        $usuarioModel = App::getModel(UsuarioModel::class);
        $usuarios = $usuarioModel->findAll();

        $order = filter_input(INPUT_GET, "order", FILTER_SANITIZE_STRING);

        if (!empty($_GET['order'])) {
            $orderBy = [$_GET["order"] => $_GET["tipo"]];
            try {
                $usuarios = $usuarioModel->findAll($orderBy);
            } catch (Exception $e) {
                $errors[] = $e->getMessage();
            }
        }

        $router = App::get(Router::class);

        $message = App::get("flash")::get("message");


        return $this->response->renderView("back/back-usuarios", "back", compact('title', 'usuarios',
            'usuarioModel', 'errors', 'router', 'message'));

    }

    public function createProducto(): string
    {
        return $this->response->renderView("productos-create-form", "back");
    }

    public function createUsuario(): string
    {
        return $this->response->renderView("usuarios-create-form", "back");
    }


    /**
     * @return string
     * @throws Exception
     */
    public function contact(): string
    {
        // 2. S'ha enviat el formulari
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // 3. Validar
            $name = filter_input(INPUT_POST, "name");
            $subject = filter_input(INPUT_POST, "subject");
            $message = filter_input(INPUT_POST, "message");
            $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
            $date = DateTime::createFromFormat("Y-m-d", filter_input(INPUT_POST, "date"));

            if (empty($name)) {
                $errors[] = "No has posat el nom i cognom";
            }

            if (empty($date)) {
                $errors[] = "No has posat la data";
            }

            if (empty($email)) {
                $errors[] = "No has posat el correu o és incorrecte";
            }

            if (empty($subject)) {
                $errors[] = "No has posat l'assumpte";
            }

            if (empty($message)) {
                $errors[] = "No has posat el missatge";
            }

            if (empty($errors)) {
                $fullMessage = "$name ($email)\n $subject\n $message";
                App::get(MyMail::class)->send("contact form", "vjorda.pego@gmail.com", "Vicent", $fullMessage);
            }

            return $this->response->renderView("contact", "default", compact('errors',
                'name', 'date', 'subject', 'message', 'email'));
        } else
            return $this->response->renderView("contact", "default");

    }


    public function storeUsuario(): string
    {
        $errors = [];
        $pdo = App::get("DB");

        $nombre = filter_input(INPUT_POST, "nombre", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $apellidos = filter_input(INPUT_POST, "apellidos", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $telefono = filter_input(INPUT_POST, "telefono", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $username = filter_input(INPUT_POST, "username");
        $password = filter_input(INPUT_POST, "password");
        $repitePassword = filter_input(INPUT_POST, "repitePassword");

        if (empty($nombre)) {
            $errors[] = "El nombre es obligatorio";
        }
        if (empty($apellidos)) {
            $errors[] = "Los apellidos son obligatorios";
        }

        if (empty($telefono)) {
            $errors[] = "El teléfono es obligatorio";
        }

        if (empty($email)) {
            $errors[] = "El email es obligatorio";
        }

        if (empty($username)) {
            $errors[] = "El username es obligatorio";
        }

        if (empty($password)) {
            $errors[] = "El password es obligtorio";
        }

        if(empty($repitePassword)){

            $errors[] = "Debe repetir el password";
        }

        if($repitePassword != $password){

            $errors[] = "Debe introcir el mismo password";
        }


        if (empty($errors)) {
            try {
                $usuarioModel = new UsuarioModel($pdo);
                $usuario = new Usuario();

                $usuario->setNombre($nombre);
                $usuario->setApellidos($apellidos);
                $usuario->setTelefono($telefono);
                $usuario->setEmail($email);
                $usuario->setUsername($username);
                $usuario->setPassword($password);

                $usuarioModel->saveTransaction($usuario);
                App::get(MyLogger::class)->info("Se ha creado un nuevo usuario");

            } catch (PDOException | ModelException | Exception $e) {
                $errors[] = "Error: " . $e->getMessage();
            }
        }

        if (empty($errors)) {
            App::get(Router::class)->redirect("back-usuarios");
        }

        return $this->response->renderView("usuarios-create", "back", compact(
            "errors", "nombre"));
    }
    /**
     * @return string
     * @throws \App\Core\Exception\ModelException
     */
    public function demo(): string
    {
        $movieModel = App::getModel(MovieModel::class);
        $movies = $movieModel->findAllPaginated(1, 8,
            ["release_date" => "DESC", "title" => "ASC"]);
        return $this->response->jsonResponse($movies);

    }
}