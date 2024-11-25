<?php
require_once("../config/conexion.php");

class Estudios extends Conectar {

    // Método para insertar un nuevo estudio
    public function insert_estudio($nivel, $institucion, $titulos_obtenidos, $fecha_inicio, $fecha_fin) {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "INSERT INTO estudios (nivel, institucion, titulos_obtenidos, fecha_inicio, fecha_fin) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conectar->prepare($sql);
        $stmt->bindValue(1, $nivel);
        $stmt->bindValue(2, $institucion);
        $stmt->bindValue(3, $titulos_obtenidos);
        $stmt->bindValue(4, $fecha_inicio);
        $stmt->bindValue(5, $fecha_fin);
        $stmt->execute();
        return $stmt->rowCount(); // Retorna el número de filas afectadas
    }

    // Método para obtener todos los estudios
    public function get_estudios() {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "SELECT * FROM estudios";
        $stmt = $conectar->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Retorna todos los registros como un array asociativo
    }

    // Método para obtener un estudio por ID
    public function get_estudio_by_id($estudio_id) {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "SELECT * FROM estudios WHERE estudio_id = ?";
        $stmt = $conectar->prepare($sql);
        $stmt->bindValue(1, $estudio_id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); // Retorna un solo registro
    }

    // Método para actualizar un estudio
    public function update_estudio($estudio_id, $nivel, $institucion, $titulos_obtenidos, $fecha_inicio, $fecha_fin) {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "UPDATE estudios SET nivel = ?, institucion = ?, titulos_obtenidos = ?, fecha_inicio = ?, fecha_fin = ? WHERE estudio_id = ?";
        $stmt = $conectar->prepare($sql);
        $stmt->bindValue(1, $nivel);
        $stmt->bindValue(2, $institucion);
        $stmt->bindValue(3, $titulos_obtenidos);
        $stmt->bindValue(4, $fecha_inicio);
        $stmt->bindValue(5, $fecha_fin);
        $stmt->bindValue(6, $estudio_id);
        $stmt->execute();
        return $stmt->rowCount(); // Retorna el número de filas afectadas
    }

    // Método para eliminar un estudio
    public function delete_estudio($estudio_id) {
        $conectar = parent::Conexion();
        parent::set_names();
        $sql = "DELETE FROM estudios WHERE estudio_id = ?";
        $stmt = $conectar->prepare($sql);
        $stmt->bindValue(1, $estudio_id);
        $stmt->execute();
        return $stmt->rowCount(); // Retorna el número de filas afectadas
    }
}
?>