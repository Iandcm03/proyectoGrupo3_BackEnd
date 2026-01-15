<?php

class Cliente {

    private $id_cliente;
    private $nombre;
    private $correo;
    private $empresa;
    private $usuario;
    private $contrasena;
    private $tipo;
    private $pregunta_seguridad;
    private $respuesta_seguridad;

    public function __construct(
        $nombre,
        $correo,
        $usuario,
        $contrasena,
        $pregunta_seguridad,
        $respuesta_seguridad,
        $empresa = null,
        $tipo = 'CLIENTE'
    ) {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->usuario = $usuario;
        $this->contrasena = $contrasena;
        $this->pregunta_seguridad = $pregunta_seguridad;
        $this->respuesta_seguridad = $respuesta_seguridad;
        $this->empresa = $empresa;
        $this->tipo = $tipo;
    }

}
