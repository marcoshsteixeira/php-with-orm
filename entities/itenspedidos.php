<?php

namespace entities;

use core\db;

/**
 * @Entity
 * @Table(name="itenspedidos")
 */
class itenspedidos
{
    public $database;

    /**
     * @var integer @Id
     * @Column(name="id", type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ManyToOne(targetEntity="pedidos")
     * @JoinColumn(name="pedido_id", referencedColumnName="id")
     */
    private $pedido;

    /**
     * @var string @Column(type="string", length=255)
     */
    private $tamanho;

    /**
     * @var string @Column(type="string", length=255)
     */
    private $sabor;

    /**
     * @var integer @Column(type="integer", length=11)
     */
    private $quantidade;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPedido()
    {
        return $this->pedido;
    }

    public function setPedido($pedido)
    {
        $this->pedido = $pedido;
    }

    public function getTamanho()
    {
        return $this->tamanho;
    }

    public function setTamanho($tamanho)
    {
        $this->tamanho = $tamanho;
    }

    public function getSabor()
    {
        return $this->sabor;
    }

    public function setSabor($sabor)
    {
        $this->sabor = $sabor;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function __construct($id = 0, $pedido = null, $tamanho = 0, $sabor = null, $quantidade = 0)
    {
        $this->database = new db('entities\itenspedidos');
        $this->id = $id;
        $this->pedido = $pedido;
        $this->sabor = $sabor;
        $this->tamanho = $tamanho;
        $this->quantidade = $quantidade;
    }

    public static function construct($id, $pedido, $tamanho, $sabor, $quantidade)
    {
        $vars = new itenspedidos();
        $vars->setId($id);
        $vars->setPedido($pedido);
        $vars->setTamanho($tamanho);
        $vars->setSabor($sabor);
        $vars->setQuantidade($quantidade);
    }

    public function insert()
    {
        $this->database->insert($this);
    }

    public function update()
    {
        $this->database->update($this);
    }

    public function delete()
    {
        $this->database->delete($this);
    }

    public function findById()
    {
        $this->database->findById($this->getId());
    }

    public function findAll()
    {
        $this->database->findAll();
    }
}