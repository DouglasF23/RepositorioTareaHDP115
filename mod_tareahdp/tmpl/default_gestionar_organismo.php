<?php

 defined('_JEXEC') or die;

?>


<div  align="center" >
     <h1>GESTIONAR ORGANISMO</h1>
     <br/>
      <h3>Seleccione el ID del organismo para realizar cualquier operacion:</h3>
     <form method="post" id="identificador" name="principal" action="<?php echo JRoute::_('index.php', true, $params->get('mod_tareahdp.php')); ?>">
     <?php 
     echo "<select name='listaOrga'>";
     echo "<option selected disabled>--Seleccionar Organismo--</option>";
     
     if(count($res2)>0){
     			foreach($res2 as $resultado){
             	
                  
	                    echo"<option value =".$resultado[0].">$resultado[0]</option>";
     			    }
                    
                 
     			}else{
     				echo'<tr><td colspan="5"><i><strong>No hay registros que mostrar</strong></i></td></tr>';
     		   }
     		   echo "</select>";
         ?>
           <br>
           <br>
           <?php echo "$mensaje";?>
         <input type="submit" name="nuevoOrga" value="+Nuevo" />&nbsp;
         <input type="submit" name="actualizarOrga" value="Actualizar" />&nbsp;
         <input type="submit" name="eliminarOrga" value="Eliminar" /><br> <br>
         <input type="submit" name="gestionInver" value="Gestionar Inversiones" /><br>
         <input type="submit" name="aceptarOrga" value="Aceptar" />
         
        </form>
       </div>
       