<?php

namespace controllers;

include __DIR__ . "/../entities/produtos.php";

use entities\produtos as prod;

class produtos
{
    public function find($id)
    {
        $produto = new prod();
        $produto->findById($id);
    }

    public function insert($data)
    {
        $produto = new prod($data);
        $produto->insert();
    }

    public function update($data)
    {
        $produto = new prod($data);
        $produto->update();
    }

    public function delete($data)
    {
        $produto = new prod($data);
        $produto->delete();
    }
}