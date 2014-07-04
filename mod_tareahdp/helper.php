<?php 
defined('_JEXEC') or die('Acceso restringido<br />Buen intento!');
//comentario para probar commit


class UsuarioDB{
	
	public static function mostrarRegistros(){
		$db = JFactory::getDbo(); // Una nueva instanacia de la base de datos
		$consulta = $db->getQuery(true);  //Le decimos que le asigne un objeto de tipo consulta a la variable $consulta
		$consulta->select('*'); // Le decimos que seleccione todos los campos
		$consulta->from($db->quoteName('#__usuariosgp15'));  /*el $db->quoteName('nombre_tabla') es una funcion que le va a agregar comillas de tipo nombre al parametro adentro de las comillas simple, eso se hace asi por seguridad para prevenir SQL Inyections
		
	El formato #__tabla (numeral guionBajo guionBajo, si son dos guiones bajos) se usa para joomla reconozca que es una tabla adentro de joomla, y con el #_ joomla detectara el prefijo que ha sido asignado a sus tablas ya que todas las instalaciones de joomla tienen prefijos diferentes en sus tablas, y con ese formato se solventa la portabilidad del modulo (que se puede instalar en cualquier joomla desde la version 2.5 en adelante)
*/
		$consulta->order('id_usuario DESC'); // Esta linea es opcional, si se la quitamos no pasa nada, aqui estamos diciendo que los resultados los muestre ordenados por el campo usuario descendientemente, se puede usario cualquier campo de la tabla y se puede ordenar ASC (ascendientemente) y DESC (descendientemente) 
		$db->setQuery($consulta); // ejecutamos la consulta con los parametros ya definidos anteriormente
		$resultado = $db->loadRowList(); //guardamos el resultado devuelto por loadRowList() y lo almacenamos en $resultado, el tipo de dato es una matriz
		return $resultado;		//retornamos la matriz
	}	
	
	
	
	public static function insertarUsuario($usuario, $contrasena, $nombres, $apellidos){

		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		 
		// Insert columns.
		$columns = array('id_usuario','contrasena','nombres','apellidos');
		$values = array($db->quote($usuario),$db->quote($contrasena),$db->quote($nombres), $db->quote($apellidos));
		 
		// Prepare the insert query.
		$query
			->insert($db->quoteName('#__usuariosgp15'))
			->columns($db->quoteName($columns))
			->values(implode(',', $values));
		 
		// Set the query using our newly populated query object and execute it.
		$db->setQuery($query);
		$resultado = $db->query();
		return $resultado;
	}
	
	
	public static function actualizarUsuario($usuario, $contrasena, $nombres, $apellidos, $user){
		$db = JFactory::getDbo();
		$consulta = $db->getQuery(true);
		$campo = array($db->quoteName('id_usuario') . ' = ' . $db->quote(trim($usuario)));
		$campo2 = array($db->quoteName('contrasena') . ' = ' . $db->quote(trim($contrasena)));
		$campo3 = array($db->quoteName('nombres') . ' = ' . $db->quote(trim($nombres)));
		$campo4 = array($db->quoteName('apellidos') . ' = ' . $db->quote(trim($apellidos)));
		
		$condiciones = array($db->quoteName('id_usuario').' = '.$db->quote($user));
			
		$consulta
		->update($db->quoteName('#__usuariosgp15'))
		->set($campo)
		->set($campo2)
		->set($campo3)
		->set($campo4)
		->where($condiciones);
		$db->setQuery($consulta);
		return $db->execute();
		
	}

	
	
	public static function eliminarUsuario($usuario){
		$db = JFactory::getDbo();
		$consulta = $db->getQuery(true);
		$consulta
			->delete($db->quoteName('#__usuariosgp15'))
			->where($db->quoteName('id_usuario').' = '.$db->quote($usuario));
		$db->setQuery($consulta);
		return $db->execute();	//retornamos la matriz
	}
	
}


class OrganismoDB{

	public static function mostrarOrganismos(){
		$db = JFactory::getDbo(); // Una nueva instanacia de la base de datos
		$consulta = $db->getQuery(true);  //Le decimos que le asigne un objeto de tipo consulta a la variable $consulta
		$consulta->select('*'); // Le decimos que seleccione todos los campos
		$consulta->from($db->quoteName('#__organismosgp15'));  /*el $db->quoteName('nombre_tabla') es una funcion que le va a agregar comillas de tipo nombre al parametro adentro de las comillas simple, eso se hace asi por seguridad para prevenir SQL Inyections

		El formato #__tabla (numeral guionBajo guionBajo, si son dos guiones bajos) se usa para joomla reconozca que es una tabla adentro de joomla, y con el #_ joomla detectara el prefijo que ha sido asignado a sus tablas ya que todas las instalaciones de joomla tienen prefijos diferentes en sus tablas, y con ese formato se solventa la portabilidad del modulo (que se puede instalar en cualquier joomla desde la version 2.5 en adelante)
		*/
		$consulta->order('id_organismo DESC'); // Esta linea es opcional, si se la quitamos no pasa nada, aqui estamos diciendo que los resultados los muestre ordenados por el campo usuario descendientemente, se puede usario cualquier campo de la tabla y se puede ordenar ASC (ascendientemente) y DESC (descendientemente)
		$db->setQuery($consulta); // ejecutamos la consulta con los parametros ya definidos anteriormente
		$resultado = $db->loadRowList(); //guardamos el resultado devuelto por loadRowList() y lo almacenamos en $resultado, el tipo de dato es una matriz
		return $resultado;		//retornamos la matriz
	}

	public static function insertarOrganismo($organismo, $telefono, $pais, $correo){

		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
			
		// Insert columns.
		$columns = array('id_organismo','telefono','pais','correo');
		$values = array($db->quote($organismo),$db->quote($telefono),$db->quote($pais), $db->quote($correo));
			
		// Prepare the insert query.
		$query
		->insert($db->quoteName('#__organismosgp15'))
		->columns($db->quoteName($columns))
		->values(implode(',', $values));
			
		// Set the query using our newly populated query object and execute it.
		$db->setQuery($query);
		$resultado = $db->query();
		return $resultado;
	}


	public static function actualizarOrganismo($organismo, $telefono, $pais, $correo, $organ){
		$db = JFactory::getDbo();
		$consulta = $db->getQuery(true);
		$campo = array($db->quoteName('id_organismo') . ' = ' . $db->quote(trim($organismo)));
		$campo2 = array($db->quoteName('telefono') . ' = ' . $db->quote(trim($telefono)));
		$campo3 = array($db->quoteName('pais') . ' = ' . $db->quote(trim($pais)));
		$campo4 = array($db->quoteName('correo') . ' = ' . $db->quote(trim($correo)));
		
		$condiciones = array($db->quoteName('id_organismo').' = '.$db->quote($organ));
			
		$consulta
		->update($db->quoteName('#__organismosgp15'))
		->set($campo)
		->set($campo2)
		->set($campo3)
		->set($campo4)
		->where($condiciones);
		$db->setQuery($consulta);
		return $db->execute();
	}



	public static function eliminarOrganismo($organismo){
	$db = JFactory::getDbo();
		$consulta = $db->getQuery(true);
		$consulta
			->delete($db->quoteName('#__organismosgp15'))
			->where($db->quoteName('id_organismo').' = '.$db->quote($organismo));
		$db->setQuery($consulta);
		return $db->execute();	//retornamos la matriz
	}

}

class InversionDB{

	public static function mostrarInversiones(){
		$db = JFactory::getDbo(); // Una nueva instanacia de la base de datos
		$consulta = $db->getQuery(true);  //Le decimos que le asigne un objeto de tipo consulta a la variable $consulta
		$consulta->select('*'); // Le decimos que seleccione todos los campos
		$consulta->from($db->quoteName('#__inversiongp15'));  /*el $db->quoteName('nombre_tabla') es una funcion que le va a agregar comillas de tipo nombre al parametro adentro de las comillas simple, eso se hace asi por seguridad para prevenir SQL Inyections

		El formato #__tabla (numeral guionBajo guionBajo, si son dos guiones bajos) se usa para joomla reconozca que es una tabla adentro de joomla, y con el #_ joomla detectara el prefijo que ha sido asignado a sus tablas ya que todas las instalaciones de joomla tienen prefijos diferentes en sus tablas, y con ese formato se solventa la portabilidad del modulo (que se puede instalar en cualquier joomla desde la version 2.5 en adelante)
		*/
		$consulta->order('id_inversion DESC'); // Esta linea es opcional, si se la quitamos no pasa nada, aqui estamos diciendo que los resultados los muestre ordenados por el campo usuario descendientemente, se puede usario cualquier campo de la tabla y se puede ordenar ASC (ascendientemente) y DESC (descendientemente)
		$db->setQuery($consulta); // ejecutamos la consulta con los parametros ya definidos anteriormente
		$resultado = $db->loadRowList(); //guardamos el resultado devuelto por loadRowList() y lo almacenamos en $resultado, el tipo de dato es una matriz
		return $resultado;		//retornamos la matriz
	}
	
	public static function insertarInversion($descripcion, $ano, $organismo,$total){
	
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
			
		// Insert columns.
		$columns = array('descripcion','ano','organismo_id', 'total');
		$values = array($db->quote($descripcion),$db->quote($ano), $db->quote($organismo), $db->quote($total));
			
		// Prepare the insert query.
		$query
		->insert($db->quoteName('#__inversiongp15'))
		->columns($db->quoteName($columns))
		->values(implode(',', $values));
			
		// Set the query using our newly populated query object and execute it.
		$db->setQuery($query);
		$resultado = $db->query();
		return $resultado;
	}
	
	
	public static function actualizarInversion($inversion, $descripcion, $ano, $organismo,$total,$invAnt){
		$db = JFactory::getDbo();
		$consulta = $db->getQuery(true);
		$campo = array($db->quoteName('id_inversion') . ' = ' . $db->quote(trim($inversion)));
		$campo2 = array($db->quoteName('descripcion') . ' = ' . $db->quote(trim($descripcion)));
		$campo3 = array($db->quoteName('ano') . ' = ' . $db->quote(trim($ano)));
		$campo4 = array($db->quoteName('organismo_id') . ' = ' . $db->quote(trim($organismo)));
		$campo5 = array($db->quoteName('total') . ' = ' . $db->quote(trim($total)));
		
		$condiciones = array($db->quoteName('id_inversion').' = '.$db->quote($invAnt));
			
		$consulta
		->update($db->quoteName('#__inversiongp15'))
		->set($campo)
		->set($campo2)
		->set($campo3)
		->set($campo4)
		->set($campo5)
		->where($condiciones);
		$db->setQuery($consulta);
		return $db->execute();
	}
	
	
	
	public static function eliminarInversion($inversion){
		$db = JFactory::getDbo();
		$consulta = $db->getQuery(true);
		$consulta
		->delete($db->quoteName('#__inversiongp15'))
		->where($db->quoteName('id_inversion').' = '.$db->quote($inversion));
		$db->setQuery($consulta);
		return $db->execute();	//retornamos la matriz
	}

	}
	
	
?>