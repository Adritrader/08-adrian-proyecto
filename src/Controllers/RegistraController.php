<?php
declare(strict_types=1);
namespace App\Controllers;

use App\Core\App;
use App\Core\Controller;
use App\Core\Router;
use App\Model\RegistraModel;

/**
 * Class DefaultController
 * @package App\Controllers
 */
class RegistraController extends Controller {

    public function filter(): string
    {
        // S'executa amb el POST
        $title = "BackOffice | Reservas";
        $errors = [];
        $registraModel = null;
        $registra = null;

        $router = App::get(Router::class);

        $text = filter_input(INPUT_POST, "text", FILTER_SANITIZE_STRING);

        $tipo_busqueda = filter_input(INPUT_POST, "optradio", FILTER_SANITIZE_STRING);

        if (!empty($text)) {
            $registraModel = App::getModel(RegistraModel::class);
            if ($tipo_busqueda == "both") {
                $registra = $registraModel->executeQuery("SELECT * FROM registra WHERE nombre LIKE :text OR servicio LIKE :text",
                    ["text" => "%$text%"]);

            }
            if ($tipo_busqueda == "nombre") {
                $registra = $registraModel->executeQuery("SELECT * FROM registra WHERE nombre LIKE :text",
                    ["text" => "%$text%"]);

            }
            if ($tipo_busqueda == "servicio") {
                $registra = $registraModel->executeQuery("SELECT * FROM registra WHERE nombre LIKE :text",
                    ["text" => "%$text%"]);
            }

        } else {
            $error = "Debe introducir una palabra de búsqueda";
        }

        return $this->response->renderView("back/back-reservas", "back", compact('title', 'registra',
            'registraModel', 'errors', 'router'));
    }

}