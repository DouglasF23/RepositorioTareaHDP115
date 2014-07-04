<?php
// No permitir el acceso directo al archivo ..
  defined('_JEXEC') or die;
?>
<div  align="center" >
<h1>GUARDAR ORGANISMO</h1>
  <form method="post" name="formulario" action="<?php echo JRoute::_('index.php', true, $params->get('mod_ctrl_ventanas.php')); ?>">
     <p>Actualizacion del ORGANISMO: <input name="orgaAnt" type="hidden" value="<?php  echo $orgaAnt; ?>" id="textfield" size="5" /><br /></p>
     <p>Nombre o ID: <input name="nombreOrga" type="text" value='<?php echo $org; ?>' id="textfield" size="5" /><br /></p>
     <p>Pais: <input name="paisOrga" type="text" value='<?php echo $pas;?>' id="textfield" size="5" /><br /></p>
     <p>Telefono: <input name="telOrga" type="text" value='<?php echo $tel; ?>' id="textfield" size="5" /><br /></p>
     <p>Email: <input name="emailOrga" type="text" value='<?php echo $email; ?>' id="textfield" size="5" /><br /></p>
     <br/>
     <?php echo "$mensaje";?>
     <input type="submit" name="actualOrga" value="Guardar" />
     <input type="submit" name="cancelarOrgaNew" value="Cancelar" />
   </form>
    </div>