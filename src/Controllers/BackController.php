<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Controller;
use App\Core\Router;
use App\Model\GenreModel;
use App\Model\MovieModel;
use App\Utils\MyMail;
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

        return $this->response->renderView("back/back-productos", "back");

    }
    public function backPedidos(): string
    {

        return $this->response->renderView("back/back-pedidos", "back");

    }
    public function backUsuarios(): string
    {

        return $this->response->renderView("back/back-usuarios", "back");

    }

    public function create(): string
    {
        return $this->response->renderView("productos-create-form", "back", compact("productos"));
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