<?php
    class Usuario{
        private $_conexion;
        private $_idusuario;
        private $_nombre;
        private $_rol;
        private $_correo;
        private $_hashedClave;
        

        function __construct($conexion,$idusuario,$nombre,$rol,$correo,$clave){
            $this->_conexion = $conexion;
            $this->_idusuario = $idusuario;
            $this->_nombre = $nombre;
            $this->_rol = $rol;
            $this->_correo = $correo;
            $this->_hashedClave = hash('md2', $clave);
        }
        function _get($k){
            return $this->$k;
        }
        function __set($k,$v){
            $this->$k = $v;
        }
        function insertar(){
            $sql = "insert into usuario (idusuario,nombre,rol,correo,clave)
            values (null, '$this->_nombre','$this->_rol','$this->_correo', '$this->_hashedClave')";
            $insertar = mysqli_query($this->_conexion,$sql);
            return $insertar;
        }
}