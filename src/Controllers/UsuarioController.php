<?php
declare(strict_types=1);

namespace App\Controllers;


use App\Core\Controller;
use App\Core\Exception\ModelException;
use App\Core\Exception\NotFoundException;
use App\Core\Router;
use App\Entity\Usuario;
use App\Model\GenreModel;
use App\Model\MovieModel;
use App\Core\App;
use App\Core\Security;
use App\Model\UsuarioModel;
use App\Utils\MyLogger;
use DateTime;
use Exception;
use PDOException;

/**
 * Class MovieController
 * @package App\Controllers
 */
class UsuarioController extends Controller
{
    /**
     * @return string
     * @throws Exception
     */
    public function index(): string
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

    /**
     * @return string
     * @throws ModelException
     */
    public function filter(): string
    {
        // S'executa amb el POST
        $title = "Movies - Movie FX";
        $errors = [];
        $movieModel = null;
        $movies = null;

        $router = App::get(Router::class);

        $text = filter_input(INPUT_POST, "text", FILTER_SANITIZE_STRING);

        $tipo_busqueda = filter_input(INPUT_POST, "optradio", FILTER_SANITIZE_STRING);

        if (!empty($text)) {
            $movieModel = App::getModel(MovieModel::class);
            if ($tipo_busqueda == "both") {
                $movies = $movieModel->executeQuery("SELECT * FROM movie WHERE title LIKE :text OR tagline LIKE :text",
                    ["text" => "%$text%"]);

            }
            if ($tipo_busqueda == "title") {
                $movies = $movieModel->executeQuery("SELECT * FROM movie WHERE title LIKE :text",
                    ["text" => "%$text%"]);

            }
            if ($tipo_busqueda == "tagline") {
                $movies = $movieModel->executeQuery("SELECT * FROM movie WHERE tagline LIKE :text",
                    ["text" => "%$text%"]);
            }

        } else {
            $error = "Cal introduir una paraula de búsqueda";
        }

        return $this->response->renderView("movies", "default", compact('title', 'movies',
            'movieModel', 'errors', 'router'));
    }

    /**
     * @return string
     * @throws Exception
     */
    public function create(): string
    {
        $genreModel = new GenreModel(App::get("DB"));
        $genres = $genreModel->findAll(["name" => "ASC"]);

        return $this->response->renderView("movies-create-form", "default", compact("genres"));
    }

    /**
     * @return string
     * @throws Exception
     */
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

        if($repitePassword !== $password){

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
                $usuario->setRole("ROLE_USER");

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
     * @param int $id
     * @return string
     * @throws Exception
     */
    public function updateUsuario(int $id): string
    {
        $isGetMethod = true;
        $errors = [];

        $id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
        if (empty($id)) {
            $errors[] = "Wrong ID";
        }

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

        if($repitePassword !== $password){

            $errors[] = "Debe introcir el mismo password";
        }

        if (empty($errors)) {

            try {

                $usuarioModel = App::getModel(UsuarioModel::class);
                // getting the partner by its identifier
                $usuario = $usuarioModel->find($id);
                $usuario->setNombre($nombre);
                $usuario->setApellidos($apellidos);
                $usuario->setTelefono($telefono);
                $usuario->setEmail($email);
                $usuario->setUsername($username);
                $usuario->setPassword($password);
                $usuario->setRole("ROLE_USER");




                // updating changes
                $usuarioModel->update($usuario);
            } catch (Exception $e) {
                $errors[] = 'Error: ' . $e->getMessage();
            }
        }
        return $this->response->renderView("usuarios-edit", "back", compact(
            "errors", "isGetMethod", "usuario"));
    }



    public function editUsuario(int $id): string
    {
        $isGetMethod = true;
        $errors = [];
        $usuarioModel = App::getModel(UsuarioModel::class);
        $usuario = null;

        if (empty($id)) {
            $errors[] = '404 No encontrado';
        } else {
            $usuario = $usuarioModel->find($id);

        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $isGetMethod = false;

            $id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
            if (empty($id)) {
                $errors[] = "ID Erronea";
            }

            $nombre = filter_input(INPUT_POST, "nombre", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $apellidos = filter_input(INPUT_POST, "apellidos", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $telefono = filter_input(INPUT_POST, "telefono", FILTER_VALIDATE_INT);
            $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
            $username = filter_input(INPUT_POST, "username");

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

            if($repitePassword !== $password){

                $errors[] = "Debe introcir el mismo password";
            }

            if (empty($errors)) {
                try {
                    // Instead of creating a new object we load the current data object.
                    $usuario = $usuarioModel->find($id);

                    //then we set the new values
                    $usuario->setNombre($nombre);
                    $usuario->setApellidos($apellidos);
                    $usuario->setTelefono($telefono);
                    $usuario->setEmail($email);
                    $usuario->setUsername($username);
                    $usuario->setPassword($password);

                    $usuario->update($usuario);

                } catch (PDOException $e) {
                    $errors[] = "Error: " . $e->getMessage();
                }
            }
        }

        return $this->response->renderView("usuarios-edit", "back", compact(
            "errors", "isGetMethod", "usuario"));
    }



    public function deleteUsuario(int $id): string
    {
        $errors = [];
        $usuario = null;
        $usuarioModel = App::getModel(UsuarioModel::class);

        if (empty($id)) {
            $errors[] = '404 Not Found';
        } else {
            try {
                $usuario = $usuarioModel->find($id);
            } catch (NotFoundException $e) {

                $errors[] = '404 Usuario no encontrado';

            }
        }

        $router = App::get(Router::class);

        return $this->response->renderView("usuarios-delete", "back", compact(
            "errors", "usuario", 'router'));
    }

    /**
     * @return string
     * @throws ModelException
     * @throws NotFoundException
     */
    public function destroyUsuario(): string
    {
        $errors = [];
        $usuarioModel = App::getModel(UsuarioModel::class);
        $usuario = null;

        $id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
        if (empty($id)) {
            $errors[] = '404 Not Found';
        } else {
            $usuario = $usuarioModel->find($id);
        }
        $userAnswer = filter_input(INPUT_POST, "userAnswer");
        if ($userAnswer === 'yes') {
            if (empty($errors)) {
                try {
                    $usuario = $usuarioModel->find($id);
                    $result = $usuarioModel->delete($usuario);
                } catch (PDOException $e) {
                    $errors[] = "Error: " . $e->getMessage();
                }
            }
        }
        else
            App::get(Router::class)->redirect('back-usuarios');

        if (empty($errors))
            App::get(Router::class)->redirect('back-usuarios');
        else
            return $this->response->renderView("usuarios-destroy", "back",
                compact("errors", "id", "usuario"));

        return "";
    }
}