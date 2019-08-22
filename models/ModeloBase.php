<?php

require_once './libs/DB.php';

class ModeloBase extends DB {
    public $db;
    
	public function __construct() {
		$this->db = new DB();
	}

	public function insertar($tabla, $datos) {
		try {
			$llaves = array_keys($datos);
	    $sql = "INSERT INTO $tabla (".implode(", ", $llaves).") \n";
	    $sql .= "VALUES ( :".implode(", :",$llaves).")";
	    $q = $this->db->prepare($sql);
	    return $q->execute($datos);
		} catch (PDOException $e) {
			$_SESSION['mensaje'] = $e->getMessage();
		} catch (Exception $e) {
			$_SESSION['mensaje'] = $e->getMessage();
		}
	}

	public function consultarRegistro($query) {
		try {
			$consulta = $this->db->query($query);
			if ($consulta->rowCount() == 1) {
				return $consulta;
			} else {
				return false;
			}
		} catch (PDOException $e){
			echo "Error: ".$e->getMessage();
		}
	}

	public function obtenerTodos($query) {
		try {
			return $this->db->query($query);
		} catch (PDOException $e){
			echo "Error: ".$e->getMessage();
		}
	}

}
