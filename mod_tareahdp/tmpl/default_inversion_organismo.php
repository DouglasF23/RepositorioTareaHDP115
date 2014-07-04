<?php
// no direct access
defined('_JEXEC') or die('Acceso restringido<br />Buen intento!');

?>
 <h1>INVERSION POR ORGANISMO</h1>
     <br/>
<div>
<h3>Detalle Inversion</h3>
 <form method="post" id="identificador" name="formulario" action="<?php echo JRoute::_('index.php', true, $params->get('mod_tareahdp.php')); ?>">
 <?php 
     echo "<select name='listaOrg'>";
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
         <input type="submit" name="buscarOrg" value="Buscar" />
         <br/>
         <br/>
    <table>
            <tr>
                <th>Organismo</th>
                <th>Pais</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Inversion</th>
            </tr>
        <tbody>
        <?php 
		if(count($res)>0){
             $con=0;
			foreach($res2 as $resultado){?>
        	<tr>
                <td><?php echo $resultado[0]?></td>
                <td><?php echo $resultado[2]?></td>
                <td><?php echo $resultado[1]?></td>
                <td><?php echo $resultado[3]?></td>
                <td><?php echo $org_inver[$con]?></td>
            </tr>
            <?php $con++;}
			}else{
				echo'<tr><td colspan="5"><i><strong>No hay registros que mostrar</strong></i></td></tr>';
		   }?>
		</tbody>
      </table>
      
      <input type="submit" name="AceptarInverOrg" value="Aceptar" />
      <input type="submit" name="graficarOrg" value="Generar Grafico" />
      </form>
</div>
