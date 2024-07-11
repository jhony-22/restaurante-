<?php
class Login {
    private $conexion;
    private $correo;
    private $clave;

    public function __construct($conexion, $correo, $clave) {
        $this->conexion = $conexion;
        $this->correo = $correo;
        $this->clave = $clave;
    }

    public function verificar() {
        $stmt = $this->conexion->prepare("SELECT * FROM usuario WHERE correo = ?");
        $stmt->bind_param("s", $this->correo);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $usuario = $result->fetch_assoc();
            return $usuario['clave'] === hash('md2', $this->clave) ? $usuario : false;
        }
        return false;
    }
}