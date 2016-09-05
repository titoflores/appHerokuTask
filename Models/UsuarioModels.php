<?php

class UsuarioModels {

    public $idUsuario;
    public $nombreUsuario;
    public $claveUsuario;

    function UsuarioModels($idUsuario, $nombreUsuario, $claveUsuario) {
        $this->idUsuario = $idUsuario;
        $this->nombreUsuario = $nombreUsuario;
        $this->claveUsuario = $claveUsuario;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getNombreUsuario() {
        return $this->nombreUsuario;
    }

    function getClaveUsuario() {
        return $this->claveUsuario;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setNombreUsuario($nombreUsuario) {
        $this->nombreUsuario = $nombreUsuario;
    }

    function setClaveUsuario($claveUsuario) {
        $this->claveUsuario = $claveUsuario;
    }

}
