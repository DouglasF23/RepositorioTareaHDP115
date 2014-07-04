<?php

 defined('_JEXEC') or die;

?>


<div  align="center" >
     <h1>GESTIONAR USUARIO</h1>
     <br/>
     <form method="post" id="identificador" name="principal" action="<?php echo JRoute::_('index.php', true, $params->get('mod_tareahdp.php')); ?>">
     <?php 
     echo "<select name='listaUser'>";
     echo "<option selected disabled>--Seleccionar Usuario--</option>";
     
     if(count($res)>0){
     			foreach($res as $resultado){
             	
                  
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
         <input type="submit" name="nuevoUser" value="+Nuevo" />&nbsp;
         <input type="submit" name="actualizarUser" value="Actualizar" />&nbsp;
         <input type="submit" name="eliminarUser" value="Eliminar" />&nbsp;
         <input type="submit" name="aceptarUser" value="Aceptar" />
         
        </form>
       </div>
       