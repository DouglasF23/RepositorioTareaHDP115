<?php

defined('_JEXEC') or die;

require_once dirname(__FILE__) . '/helper.php';
//Llama al metodo mostrarRegistro del archivo helper.phpfunction rubro_inv($inver){


$layout = $params->get('layout', 'default');//asignamos un objeto de tipo layout con default (nuestro archivo default.php) como parametro
$mensaje='';

$res = UsuarioDB::mostrarRegistros();
$res2= OrganismoDB::mostrarOrganismos();
$res3= inversionDB::mostrarInversiones();



/*foreach ($res3 as $inver){
	if("JICA"==$inver[3]){
		$total=total+$inver[4];
	}
	
}*/




//VENTANAS DE USUARIOS


if(isset($_POST['identificar'])|isset($_POST['saliradmin'])){
	$layout .= '_sesion';
}

if(isset($_POST['aceptarUser'])){
	$layout .= '_menadmin';
}

if(isset($_POST['cerrarSesion'])){
	$layout = $params->get('layout', 'default');
    
}





if(isset($_POST['users'])){
	$layout .= '_gestionar_usuario';
}

if(isset($_POST['nuevoUser'])){
	$layout .= '_nuevo_usuario';
}

if(isset($_POST['guardarUser'])){
	$res = UsuarioDB::mostrarRegistros();
	$usuario=$_POST['usuarioNew'];
	$contrasena=$_POST['contrasenaNew'];
	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$ban=0;
	
	foreach ($res as $result){
		if($result[0]==$_POST['usuarioNew']){
			$ban=1;
		}
	}
	
	if($ban==0){
	  if( $usuario!=''&& $contrasena!=''  && $nombres!='' && $apellidos!=''){
	    	$inst = UsuarioDB::insertarUsuario($usuario, $contrasena, $nombres, $apellidos);
		    $mensaje="<script> alert('Ingresado con exito!!');</script>";
		    $res = UsuarioDB::mostrarRegistros();
		    $layout .= '_gestionar_usuario';
		
	} 
	else {$mensaje="<script> alert('##Error:Complete todos los campos');</script>";
	  $layout .= '_nuevo_usuario';
	}
	
	}else{
		if($ban==1){
		$mensaje="<script> alert('El usuario".$usuario." ya existe!!');</script>";
		$layout .= '_nuevo_usuario';
		}
		
	}
}



if(isset($_POST['cancelarUser'])){
	$layout .= '_gestionar_usuario';
}



if(isset($_POST['actualizarUser'])){
	$res = UsuarioDB::mostrarRegistros();
	$usuarioAnt=$_POST['listaUser'];
	if(count($res)>0){
		foreach($res as $resultado){

				
			if($_POST['listaUser']==$resultado[0]){
	           $usuario=$resultado[0];
	           $contrasena=$resultado[1];
	           $nombres=$resultado[2];
	           $apellidos=$resultado[3];
	          }
			

	
		}
	}else{
		echo'<tr><td colspan="5"><i><strong>No hay registros que mostrar</strong></i></td></tr>';
	}
	$layout .= '_actualizar_usuario';
}


if(isset($_POST['actualUser'])){
	$userAnt=$_POST['usuarioAnt'];
    $usuario=$_POST['usuarioNew'];
	$contrasena=$_POST['contrasenaNew'];
	$nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$ban=0;
	foreach ($res as $result){
		if($result[0]==$_POST['usuarioNew']){
			$ban=1;
		}
	}
	
	if($ban==0){
	if( $usuario!=''&& $contrasena!=''  && $nombres!='' && $apellidos!=''&& $userAnt!=''){
		$actual=UsuarioDB::actualizarUsuario($usuario, $contrasena, $nombres, $apellidos, $userAnt);
		$mensaje="<script> alert('Guardado con exito!!');</script>";
		$res = UsuarioDB::mostrarRegistros();
		$layout .= '_gestionar_usuario';

	} 
	else {$mensaje="<script> alert('##Error:Complete todos los campos');</script>";
	  $layout .= '_gestionar_usuario';
	}
  }else{
  	if(ban==1){
  		$mensaje="<script> alert('El usuario".$usuario." ya existe!!');</script>";
  		$layout .= '_nuevo_usuario';
  	}
  	
  }
}



if(isset($_POST['eliminarUser'])){
	
	
	$res = UsuarioDB::mostrarRegistros();
	
	$usuario=$_POST['listaUser'];
	if(count($res)>0){
		foreach($res as $resultado){

	
				if($_POST['listaUser']==$resultado[0]){

						UsuarioDB::eliminarUsuario($resultado[0]);
						$mensaje="<script> alert('Eliminado con exito!!');</script>";
				
				}

	
		}
	}else{
		echo'<tr><td colspan="5"><i><strong>No hay registros que mostrar</strong></i></td></tr>';
	}
	$res = UsuarioDB::mostrarRegistros();
	$layout .= '_gestionar_usuario';
}


if(isset($_POST['iniciarSesion'])){
$res=UsuarioDB::mostrarRegistros();
	$band=0;

	if(count($res)>0){
		foreach($res  as $result){

				
			if($_POST['usua']==$result[0]){
				$contras=$result[1];
					if($_POST['contra']==$contras){
					$band=1;
					}
				}


		        
			}
			
			if($band==1){
			$layout .= '_menadmin';
			
		}
	}else{
		echo'<tr><td colspan="5"><i><strong>No hay registros que mostrar</strong></i></td></tr>';
	}
	

	if($band==0){
		$mensaje="<script> alert('##Error:Datos Incorrectos');</script>";
		$layout .= '_sesion';
	}
	


}




//VENTANAS DE ORGANISMOS
if(isset($_POST['organismos'])){
	$layout .= '_gestionar_organismo';
}

if(isset($_POST['nuevoOrga'])){
	$layout .= '_nuevo_organismo';
}

if(isset($_POST['eliminarOrga'])){
    
	if(count($res2)>0){
		foreach($res2 as $resultado){
	
	
			if($_POST['listaOrga']==$resultado[0]){
	
				OrganismoDB::eliminarOrganismo($resultado[0]);
				$mensaje="<script> alert('Eliminado con exito!!');</script>";
				
				foreach ($res3 as $inv){
					if($inv[3]==$_POST['listaOrga']){
						$inst= InversionDB::eliminarInversion($inv[0]);
							
					}
				
				}
	
			}
	
	
		}
	}else{
		echo'<tr><td colspan="5"><i><strong>No hay registros que mostrar</strong></i></td></tr>';
	}
	$res2= OrganismoDB::mostrarOrganismos();
	$layout .= '_gestionar_organismo';
}




if(isset($_POST['actualizarOrga'])){
	$orgaAnt=$_POST['listaOrga'];
	if(count($res2)>0){
		foreach($res2 as $resultado){
	
				
			if($_POST['listaOrga']==$resultado[0]){
	           $org=$resultado[0];
	           $tel=$resultado[1];
	           $pas=$resultado[2];
	           $email=$resultado[3];
	          }
			}
	
		
	}else{
		echo'<tr><td colspan="5"><i><strong>No hay registros que mostrar</strong></i></td></tr>';
	}


	$layout .= '_actualizar_organismo';
}


if(isset($_POST['actualOrga'])){
	$OrgaAnt=$_POST['orgaAnt'];
	$organismo=$_POST['nombreOrga'];
	$telefono=$_POST['telOrga'];
	$pais=$_POST['paisOrga'];
	$correo=$_POST['emailOrga'];
$ban=0;
	foreach ($res2 as $result){
		if($result[0]==$_POST['nombreOrga']){
			$ban=1;
		}
	}
	
	if($ban==0){
		if( $organismo!=''&& $telefono!=''  && $pais!='' && $correo!=''){
			$inst = OrganismoDB::actualizarOrganismo($organismo, $telefono, $pais, $correo,$OrgaAnt);
			$mensaje="<script> alert('Guardado con exito!!');</script>";
			
			//Actualizar inversiones
			foreach ($res3 as $inv){
				if($inv[3]==$OrgaAnt){
					$inst= InversionDB::ActualizarInversion($inv[0],$inv[1],$inv[2],$organismo,$inv[4],$inv[0]);
					
				}
				
			}
			
			$res2= OrganismoDB::mostrarOrganismos();
			$layout .= '_gestionar_organismo';
	
		}
		else {$mensaje="<script> alert('##Error:Complete todos los campos');</script>";
		$layout .= '_nuevo_organismo';
		}
	
	}else{
		if($ban==1){
			$mensaje="<script> alert('El usuario".$usuario." ya existe!!');</script>";
			$layout .= '_nuevo_usuario';
		}
	
	}
	
}


if(isset($_POST['aceptarOrga'])){
	$layout .= '_menadmin';
}

if(isset($_POST['cancelarOrgaNew'])){
	$layout .= '_gestionar_organismo';
}

if(isset($_POST['guardarOrgaNew'])){
	$organismo=$_POST['nombreOrga'];
	$telefono=$_POST['telOrga'];
	$pais=$_POST['paisOrga'];
	$correo=$_POST['emailOrga'];
	$ban=0;
	foreach ($res2 as $result){
		if($result[0]==$_POST['nombreOrga']){
			$ban=1;
		}
	}
	
	if($ban==0){
		if( $organismo!=''&& $telefono!=''  && $pais!='' && $correo!=''){
			$inst = OrganismoDB::insertarOrganismo($organismo, $telefono, $pais, $correo);
			$mensaje="<script> alert('Guardado con exito!!');</script>";
			$res2= OrganismoDB::mostrarOrganismos();
			$layout .= '_gestionar_organismo';
	
		}
		else {$mensaje="<script> alert('##Error:Complete todos los campos');</script>";
		$layout .= '_nuevo_organismo';
		}
	
	}else{
		if($ban==1){
			$mensaje="<script> alert('El usuario".$usuario." ya existe!!');</script>";
			$layout .= '_nuevo_usuario';
		}
	
	}
}

if(isset($_POST['gestionInver'])){
	$organismo=$_POST['listaOrga'];
	$layout .= '_gestionar_inversion';
}

if(isset($_POST['aceptarInver'])){
	$layout .= '_gestionar_organismo';
}

if(isset($_POST['nuevaInver'])){
	$orgas=$_POST['orgas'];
	$layout .= '_nueva_inversion';
}

if(isset($_POST['cancelarInverNew'])){
	$layout .= '_gestionar_inversion';
}

if(isset($_POST['guardarInverNew'])){
	$orgs=$_POST['orgs'];
	$descripcion=$_POST['descripcion'];
	$anio=$_POST['anio'];
	$total=(float)$_POST['total'];
	$insta= InversionDB::insertarInversion($descripcion, $anio, $orgs,$total);
	$res3=InversionDB::mostrarInversiones();
	$organismo=$orgs;
	$layout .= '_gestionar_inversion';
	
	
}

if(isset($_POST['actualizarInver'])){
	$orgas=$_POST['orgas'];
	$selec=$_POST['listaInver'];
	foreach ($res3 as $resultado){
		if($selec==$resultado[0]){
			$desc=$resultado[1];
			$an=$resultado[2];
			$tot=$resultado[4];
		}
		
	}
	$layout .= '_actualizar_inversion';
}

if(isset($_POST['actualsInverNew'])){
	$orgs=$_POST['orgs'];
	$seleccion=intval($_POST['selec']);
	$descripcion=$_POST['descripcion'];
	$anio=$_POST['anio'];
	$total=(float)$_POST['total'];
	
	$instan=InversionDB::actualizarInversion($seleccion, $descripcion, $anio, $orgs,$total,$seleccion);
	$mensaje="<script> alert('Actualizado!!');</script>";

	$res3=InversionDB::mostrarInversiones();
	$organismo=$orgs;
	$layout .= '_gestionar_inversion';


}


if(isset($_POST['eliminarInver'])){
	$orgas=$_POST['orgas'];
	$selec=$_POST['listaInver'];
	foreach ($res3 as $resultado){
		if($selec==$resultado[0]){
			$instan=InversionDB::eliminarInversion($resultado[0]);
			$mensaje="<script> alert('Inversion eliminada con exito!!');</script>";
		}

	}
	$res3=InversionDB::mostrarInversiones();
	$organismo=$orgs;
	$layout .= '_gestionar_inversion';
}

//VENTANAS CONSULTA
if(isset($_POST['consultar'])){
	$layout .= '_consultar';
}

if(isset($_POST['filtroConsul'])){
	if($_POST['filtro']=='Inversion por Ano'){
		$cont=0;
		foreach ($res3 as $invers){
			$vector[$cont]=$invers[2];
			$cont++;
			}
			
        $anos=array_unique($vector);
        $cont=0;
        foreach ($anos as $ans){
        	$total=0;
        	foreach ($res3 as $inversion){
        		if($inversion[2]==$ans){
        			$total=$total+$inversion[4];
        		}
        	}
        	$ano_inver[$cont]=$total;
        	$cont++;
        }
		$layout .= '_inversion_ano';
		
	}else {
		   $total_inv=0;
		   $cont=0;
		   foreach ($res2 as $org){
		   	$total_inv=0;
		     foreach ($res3 as $inver){
			    if($org[0]==$inver[3]){
				$total_inv=$total_inv+$inver[4];
			}
		    
		}
		$org_inver[$cont]=$total_inv;
		$cont++;
}       
		      $layout .= '_inversion_organismo';
	}
}

if(isset($_POST['buscarOrg'])){
	$orga=$_POST['listaOrg'];
	$indice=0;
	$id_inv[]=array();
	foreach ($res3 as $invierte){
		if($invierte[3]==$orga){
			$id_inv[$indice]=$invierte[0];
			$indice++;
		}
		
	}
	
	$layout .= '_detalle_invOrg';
	
}

if(isset($_POST['aceptarDetalleOrg'])){
	
	$layout .= '_inversion_organismo';
}

if(isset($_POST['buscarAno'])){
	$anio=$_POST['ano'];
	$layout .= '_detalle_invAno';
}

if(isset($_POST['aceptarDetalleAno'])){
	$cont=0;
	foreach ($res3 as $invers){
		$vector[$cont]=$invers[2];
		$cont++;
	}
		
	$anos=array_unique($vector);
	$cont=0;
	foreach ($anos as $ans){
		$total=0;
		foreach ($res3 as $inversion){
			if($inversion[2]==$ans){
				$total=$total+$inversion[4];
			}
		}
		$ano_inver[$cont]=$total;
		$cont++;
	}
	$layout .= '_inversion_ano';
}

if(isset($_POST['graficarOrg'])){
	$layout .= '_grafico_organismos';
}



if(isset($_POST['cancelarConsul'])){
	$layout .= '_';
}

if(isset($_POST['aceptarInverAno'])){
	$layout .= '_';
}
if(isset($_POST['aceptarInverOrg'])){
	$layout .= '_';
}

	require JModuleHelper::getLayoutPath('mod_tareahdp', $layout);
 // Mandamos a imprimir en pantalla el layout que hemos configurado
?>