<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Core\App;
use App\Core\Response;
use App\Database;
use App\Utils\MyLogger;
use App\Utils\MyMail;
use App\Core\Helpers\FlashMessage;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;


$config = require_once __DIR__ . '/../config/config.php';

$_flash = new FlashMessage();
$redirect = new \App\Core\Router();

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