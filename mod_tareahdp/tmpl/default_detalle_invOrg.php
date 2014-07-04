<?php
// no direct access
defined('_JEXEC') or die('Acceso restringido<br />Buen intento!');

?>
 <h1>INVERSION POR ORGANISMO</h1>
     <br/>
<div>
<h3>DETALLE DE INVERSION DEL ORGANISMO:</h3> 
<input type="image" name="Org" value='<?php echo $orga; ?>' />

 <form method="post" id="identificador" name="formulario" action="<?php echo JRoute::_('index.php', true, $params->get('mod_tareahdp.php')); ?>">
 
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
			foreach($res3 as $resultado){

          if($resultado[0]==$id_inv[$con]){?>
			
        	<tr>
                <td><?php echo $resultado[0]?></td>
                <td><?php echo $resultado[1]?></td>
                <td><?php echo $resultado[2]?></td>
                <td><?php echo $resultado[3]?></td>
                <td><?php echo $resultado[4]?></td>
            </tr>
            <?php $con++;}}
			}else{
				echo'<tr><td colspan="5"><i><strong>No hay registros que mostrar</strong></i></td></tr>';
		   }?>
		</tbody>
      </table>
      <br/>
      <input type="submit" name="aceptarDetalleOrg" value="Aceptar" />
      </form>
</div>
<?php echo "<div><h5>".$textDesp."</h5></div>";?>