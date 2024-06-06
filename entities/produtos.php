<?php

namespace entities;

include __DIR__ . "/../core/db.php";

use core\db;

/**
 * @Entity
 * @Table(name="produtos")
 */
class produtos
{
    public $database;

    /**
     * @var integer @Id
     * @Column(name="id", type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string @Column(type="string", length=255)
     */
    private $sabor;

    /**
     * @var string @Column(type="string", length=255)
     */
    private $tamanho;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getSabor()
    {
        return $this->sabor;
    }

    public function setSabor($sabor)
    {
        $this->sabor = $sabor;
    }

    public function getTamanho()
    {
        return $this->tamanho;
    }

    public function setTamanho($tamanho)
    {
        $this->tamanho = $tamanho;
    }

    public function __construct($id = 0, $sabor = null, $tamanho = 0)
    {
        $this->database = new db('entities\produtos');
        $this->id = $id;
        $this->sabor = $sabor;
        $this->tamanho = $tamanho;
    }

    public static function construct($id, $sabor, $tamanho)
    {
        $vars = new produtos();
        $vars->setId($id);
        $vars->setSabor($sabor);
        $vars->setTamanho($tamanho);
    }

    public function insert() {
        $this->database->insert($this);
    }

    public function update() {
        $this->database->update($this);
    }

    public function delete() {
        $this->database->delete($this);
    }

    public function findById($id) {
        $this->database->findById($id);
    }

    public function findAll() {
        $this->database->findAll();
    }
}