<?php

namespace entities;

use core\db;

/**
 * @Entity
 * @Table(name="pedidos")
 */
class pedidos
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
    private $endereco;

    /**
     * @var string @Column(type="string", length=15)
     */
    private $telefone;

    /**
     * @var datetime @Column(type="datetime")
     */
    private $dataHora;

    /**
     * @OneToMany(targetEntity="itenspedidos", mappedBy="pedidos",cascade={"persist","remove"})
     **/
    private $itens;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getDataHora()
    {
        return $this->dataHora;
    }

    public function setDataHora($dataHora)
    {
        $this->dataHora = $dataHora;
    }

    public function getItens()
    {
        return $this->itens;
    }

    public function setItens($itens)
    {
        $this->itens = $itens;
    }

    public function __construct($id = 0, $endereco = null, $telefone = null, $dataHora = null, $itens =array())
    {
        $this->database = new db('entities\pedidos');
        $this->id = $id;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->dataHora = $dataHora;
        $this->itens = $itens;
    }

    public static function construct($id, $endereco, $telefone, $dataHora, $itens)
    {
        $vars = new pedidos();
        $vars->setId($id);
        $vars->setEndereco($endereco);
        $vars->setTelefone($telefone);
        $vars->setDataHora($dataHora);
        $vars->setItens($itens);
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

    public function findById() {
        $this->database->findById($this->getId());
    }

    public function findAll() {
        $this->database->findAll();
    }
}