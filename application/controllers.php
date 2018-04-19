<?php


$app->post('/createTask/{string}', function (Request $request, Response $response, array $args) {

});

$app->delete('/delTask/{id}', function (Request $request, Response $response, array $args) {

});

$app->put('/completedTask/{id}', function (Request $request, Response $response, array $args) {

});

$app->delete('/delCompleted/{id}', function (Request $request, Response $response, array $args) {

});

$app->put('/unCompleted/{id}', function (Request $request, Response $response, array $args) {

});

$app->get('/getAll/{}', function (Request $request, Response $response, array $args) {

});
$app->get('/getAllByUnCompleted/{}', function (Request $request, Response $response, array $args) {

});
$app->get('/getAllByCompleted/{}', function (Request $request, Response $response, array $args) {

});
