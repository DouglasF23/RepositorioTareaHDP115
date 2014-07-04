<?php
// no direct access
defined('_JEXEC') or die('Acceso restringido<br />Buen intento!');
?>

<h1>INVERSION POR ANO</h1>
     <br/>
<div>
<h3>Detalle Inversion:</h3>
<br/>
 <form method="post" id="identificador" name="formulario" action="<?php echo JRoute::_('index.php', true, $params->get('mod_ctrl_ventanas.php')); ?>">
     <p>Ingrese el ano: <input name="ano" type="text" id="textfield" size="5" placeholder="Ej:2014"/></p>
     <input type="submit" name="buscarAno" value="Buscar" />
    
    <table>
            <tr>
                <th>No</th>
                <th>Ano</th>
                <th>Inversion</th>  
            </tr>
        <tbody>
        <?php 
		if(count($res3)>0){
            $contr=1;
            $contdr=0;
			foreach($anos as $resultado){?>
        	<tr>
        	    <td><?php echo $contr?></td>
                <td><?php echo $resultado?></td>
                <td><?php echo $ano_inver[$contdr]?></td>
                <td></td>
            </tr>
            <?php 
            $contdr++;
            $contr++;}
			}else{
				echo'<tr><td colspan="5"><i><strong>No hay registros que mostrar</strong></i></td></tr>';
		   }?>
		</tbody>
      </table>
      <br/>
      <input type="submit" name="aceptarInverAno" value="Aceptar" />     
      </form>
      </div>

