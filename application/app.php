<?php

Slim\Slim::registerAutoloader();

// Инициализируем Slim

require APP_DIR."/models.php";
require APP_DIR."/middlewares.php";
require APP_DIR."/controllers.php";

// Запускаем приложение