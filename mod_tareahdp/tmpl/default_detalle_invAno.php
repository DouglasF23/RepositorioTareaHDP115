<?php
// no direct access
defined('_JEXEC') or die('Acceso restringido<br />Buen intento!');
?>

<h1>INVERSION POR ANO</h1>
     <br/>
<div>
<h3>DETALLE INVERSION DEL ANO:</h3>
<form method="post" id="identificador" name="formulario" action="<?php echo JRoute::_('index.php', true, $params->get('mod_tareahdp.php')); ?>">
<input type="image" name="Org" value='<?php echo $anio; ?>' />
<br/>

    <table>
            <tr>
                <th>Id_Inversion</th>
                <th>Ano</th>
                <th>Descripcion</th>
                <th>Organismo</th>
                <th>Inversion</th>  
            </tr>
        <tbody>
        <?php 
		if(count($res3)>0){
			foreach($res3 as $resultado){
            if($resultado[2]==$anio){?>
			
        	<tr>
                <td><?php echo $resultado[0]?></td>
                <td><?php echo $resultado[2]?></td>
                <td><?php echo $resultado[1]?></td>
                <td><?php echo $resultado[3]?></td>
                <td><?php echo $resultado[4]?></td>
                <td></td>
            </tr>
            <?php }}
			}else{
				echo'<tr><td colspan="5"><i><strong>No hay registros que mostrar</strong></i></td></tr>';
		   }?>
		</tbody>
      </table>
      <br/>
      <input type="submit" name="aceptarDetalleAno" value="Aceptar" />     
      </form>
      </div>