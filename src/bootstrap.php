<?php

require_once __DIR__ . '/../vendor/autoload.php';



use App\Core\App;
use App\Core\Response;
use App\Database;
use App\Model\UserModel;
use App\Utils\MyLogger;
use App\Utils\MyMail;
use App\Core\Helpers\FlashMessage;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use App\Core\Router;

session_start();

$config = require_once __DIR__ . '/../config/config.php';

$_flash = new FlashMessage();
$redirect = new Router();

App::bind("redirect", $redirect);
App::bind("flash", $_flash);
App::bind("config", $config);
App::bind("DB", Database::getConnection());
App::bind(Response::class, new Response());

$myLogger = new MyLogger("app");
$myLogger->pushHandler(new StreamHandler(__DIR__."/../{$config["logfile"]}", $config["loglevel"]));
App::bind(MyLogger::class, $myLogger);

// The load method acts as a factory. We pass the config
// data and returns a myMail object
$myMail = MyMail::load($config["mailer"]);
App::bind(MyMail::class, $myMail);

// we use the coalesce operator to check if loggedUser is set
// if not we assign 0 to $loggedUser.

$loggedUser = $_SESSION["loggedUser"] ?? 0;

//we check if loggedUser is a valid integer

$id = filter_var($loggedUser, FILTER_VALIDATE_INT);
if (!empty($id)) {
    try {
        App::bind('user', App::getModel(UserModel::class)->find($id));            
    } 
    catch (NotFoundException $notFoundException) {
        App::bind('user',null);            
    }
}
else
    App::bind('user', null);
?>