<?php
    include_once("../Modelo/Conexion.php");
    $obgetoConexion = new Conexion();
    $conexion = $obgetoConexion->conectar();

    include_once("../Modelo/usuario.php");

    $opcion = $_POST['enviar'];
    $idusuario = $_POST['idsuario'];
    $nombre = $_POST['nombre'];
    $rol = $_POST['rol'];
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];

    $obgetoCliente = new  Usuario($conexion,$idcliente,$nombre,$rol,$correo,$clave);
    echo 'entra al insertar';
    
    switch($opcion){
        case 'Insertar':
            $obgetoCliente->insertar();
            $mensaje = 'insertado';
            break;
        
    }

    $obgetoConexion->desconectar($conexion);
    header("location:../Vista/FormRegistro.php?msj=$mensaje");