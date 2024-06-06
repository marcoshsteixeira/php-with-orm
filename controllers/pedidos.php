<?php

namespace controllers;

include __DIR__ . "/../entities/pedidos.php";

use entities\pedidos as pedido;

class pedidos
{
    public function find($id)
    {
        $produto = new pedido();
        $produto->findById($id);
    }

    public function insert($data)
    {
        $produto = new pedido($data);
        $produto->insert();
    }

    public function update($data)
    {
        $produto = new pedido($data);
        $produto->update();
    }

    public function delete($data)
    {
        $produto = new pedido($data);
        $produto->delete();
    }
}