<?php

	class Model_DB extends CI_Model{

		/*	
		obtener($tabla){} 
		Obtener elementos de la tabla 
		*/

		public function obtener($tabla)
		{
			$query = $this->db->query('SELECT * FROM '.$tabla);
			return $query->result();
		}

		/*	
		insertar($arreglo,$tabla){} 
		Inserta un $arreglo en la $tabla. Arreglo indice (columna) - valor (dato)
		INSERT INTO $tabla (indice0,indice1,indice2,...) VALUES ('valor0','valor1','valor2',...);

		NO realiza insert multiples como la integrada de codeigniter
		*/
		public function insertar($arreglo,$tabla)
		{

			$this->db->insert("$tabla",$arreglo);
 
 /*
			No esta funcionando esta parte de abajo
			$sql = "INSERT INTO $tabla";
			$sql .= "(".implode(",",array_keys($arreglo)).")";
			$sql .= " VALUES ('".implode("', '",$arreglo)."'); ";
			echo $sql;
			$query = $this->db->query("$sql");
			echo $query;	
			return $query->result();
*/

		}

		/*
		eliminar($arreglo,$tabla){};
		Eliminar una fila de la $tabla donde 
		DELETE FROM $tabla 
			WHERE indice0 = 'valor0' 
			AND indice0 = 'valor1'
			AND indice0 = 'valor2'
		*/	

		public function eliminar($arreglo,$tabla)
		{

			foreach ($arreglo as $key => $value) {
				echo "$key => $value";
				$this->db->where("$key","$value");

			};
			$this->db->delete("$tabla");
		

/*		
			$i = 0;
			$sql = "DELETE FROM $tabla ";					
			foreach ($arreglo as $key => $value) {
				$i++;
				if($i==1){
					$sql .= "WHERE $key = '$value' ";
				}
				else{
					$sql .= "AND $key = '$value' ";	
				}				
 			}
 			$sql .= ";";			
			$query = $this->db->query("$sql");
			return $query->result();
*/			
		}
		
		/*
		modificar($v ,$tabla){};
		Modificar una fila de la $tabla donde 
		UPDATE $tabla 
			SET columna1 = valornuevo1 ,
				columna2 = valurnuevo2 
			WHERE 
				indice0 = 'valor0' 
			AND indice0 = 'valor1'
			AND indice0 = 'valor2'
		*/
		public function modificar($nuevos,$arreglo,$tabla)
		{
		
			$sql = "UPDATE $tabla SET ";
			$i = 0;
			foreach ($nuevos as $columna => $valornuevo) {
 				$i++;
 				if(count($nuevos) == $i){
					$sql .= "$columna = '$valornuevo' ";
				}
				else{
					$sql .= "$columna = '$valornuevo' ,";	
				}				
 			}
			$sql .= "WHERE ";
			$i=0;
			foreach ($arreglo as $key => $value) {
				$i++;
				if($i==1){
					$sql .= "WHERE $key = '$value' ";
				}
				else{
					$sql .= "AND $key = '$value' ";	
				}				
 			}
 			$sql .= ";";			
			$query = $this->db->query("$sql");
			return $query->result();
		}	



		

	}

?>