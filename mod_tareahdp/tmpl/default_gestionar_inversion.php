<?php

 defined('_JEXEC') or die;

?>


<div  align="center" >
     <h1>GESTIONAR INVERSIONES</h1>
     <br/>
     <h3>Seleccione el ID de la inversion (En caso de Actualizar o Eliminar):</h3>
     <form method="post" id="identificador" name="principal" action="<?php echo JRoute::_('index.php', true, $params->get('mod_tareahdp.php')); ?>">
      <p><input name="orgas" type="hidden" value="<?php  echo $organismo; ?>" id="textfield" size="5" /><br /></p>
     <?php 
     echo "<select name='listaInver'>";
     echo "<option selected disabled>--Seleccionar Inversion por ID--</option>";
     
     if(count($res3)>0){
     			foreach($res3 as $resultado){
             	    if($resultado[3]==$organismo){
                  
	                    echo"<option value =".$resultado[0].">$resultado[0]</option>";
     			    }
                     
     			  }
     			}else{
     				echo'<tr><td colspan="5"><i><strong>No hay registros que mostrar</strong></i></td></tr>';
     		   }
     		   echo "</select>";
         ?>
           <br/>
           <table>
            <tr>
                <th>Id_Inversion</th>
                <th>Descripcion</th>
                <th>Ano</th>
                <th>Organismo</th>
                <th>Total</th>
            </tr>
        <tbody>
        <?php 
		if(count($res)>0){
             $con=0;
			foreach($res3 as $resul){

          if($resul[3]==$organismo){?>
			
        	<tr>
                <td><?php echo $resul[0]?></td>
                <td><?php echo $resul[1]?></td>
                <td><?php echo $resul[2]?></td>
                <td><?php echo $resul[3]?></td>
                <td><?php echo $resul[4]?></td>
            </tr>
            <?php $con++;}}
			}else{
				echo'<tr><td colspan="5"><i><strong>No hay registros que mostrar</strong></i></td></tr>';
		   }?>
		</tbody>
		 </table>
		 <br/>
           <?php echo "$mensaje";?>
         <input type="submit" name="nuevaInver" value="+Nuevo" />&nbsp;
         <input type="submit" name="actualizarInver" value="Actualizar" />&nbsp;
         <input type="submit" name="eliminarInver" value="Eliminar" /><br> <br>
         <input type="submit" name="aceptarInver" value="Aceptar" />
         
        </form>
       </div>