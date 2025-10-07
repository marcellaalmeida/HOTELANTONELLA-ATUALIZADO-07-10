<?php
class Tipo {
    // Atributos
    private $id_tipo;
    private $descricao;

    // Métodos Getter e Setter

    public function getId() {
        return $this->idtipo;
    }

    public function setId($idtipo) {
        $this->idtipo = $idtipo;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    // Método para retornar uma string do objeto
    public function __toString() {
        return $this->descricao;
    }
}
?>
