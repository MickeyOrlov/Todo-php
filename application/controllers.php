<?php
$app->post('/createTask/{$string}', function (Request $request, Response $response, array $args) {

}); // создать Таск

$app->delete('/delTask/{$id}', function (Request $request, Response $response, array $args) {

}); // Удалить Таск

$app->put('/editCompletedTask/{$id}', function (Request $request, Response $response, array $args) {

}); //Завершить Таск

$app->delete('/delCompleted/{$id}', function (Request $request, Response $response, array $args) {

}); //Удалить завершенный Таск

$app->get('/getAll', function (Request $request, Response $response, array $args) {

}); //Выбрать все Таски
$app->get('/getAllByUnState/{$active}', function (Request $request, Response $response, array $args) {

}); //Выбрать состояния завершенные или не завершенные

