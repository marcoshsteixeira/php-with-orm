<?php
    require_once __DIR__ . "/vendor/autoload.php";
    include __DIR__ . "/controllers/produtos.php";
    include __DIR__ . "/controllers/pedidos.php";

    use controllers\produtos;
    use controllers\pedidos;

    $app = new \Slim\Slim();
    $prod = new produtos();
    $pedido = new pedidos();

    $app->get('/', function () {
        echo json_encode([
            "api" => "Pizza",
            "version" => "1.0.0"
        ]);
    });

    $app->get('/produtos(/(:id))', function ($id = null) use ($prod) {
        echo json_encode($prod->find($id));
    });

    $app->post('/produtos(/)', function () use ($prod) {
        $app = \Slim\Slim::getInstance();
        $json = json_decode($app->request()->getBody());
        echo json_encode($prod->insert($json));
    });

    $app->put('/produtos(/)', function () use ($prod) {
            $app = \Slim\Slim::getInstance();
            $json = json_decode($app->request()->getBody());
            echo json_encode($prod->update($json));
    });

    $app->delete('/produtos(/)', function () use ($prod) {
        $app = \Slim\Slim::getInstance();
        $json = json_decode($app->request()->getBody());
        echo json_encode($prod->delete($json));
    });

    $app->get('/pedidos(/(:id))', function ($id = null) use ($pedido) {
        echo json_encode($pedido->find($id));
    });

    $app->post('/pedidos(/)', function () use ($pedido) {
        $app = \Slim\Slim::getInstance();
        $json = json_decode($app->request()->getBody());
        echo json_encode($pedido->insert($json));
    });

    $app->put('/pedidos(/)', function () use ($pedido) {
        $app = \Slim\Slim::getInstance();
        $json = json_decode($app->request()->getBody());
        echo json_encode($pedido->update($json));
    });

    $app->delete('/pedidos(/)', function () use ($pedido) {
        $app = \Slim\Slim::getInstance();
        $json = json_decode($app->request()->getBody());
        echo json_encode($pedido->delete($json));
    });

    $app->run();