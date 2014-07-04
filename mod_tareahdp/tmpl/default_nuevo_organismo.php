<?php
// No permitir el acceso directo al archivo ..
  defined('_JEXEC') or die;
?>
<div  align="center" >
<h1>GUARDAR ORGANISMO</h1>
  <form method="post" name="formulario" action="<?php echo JRoute::_('index.php', true, $params->get('mod_ctrl_ventanas.php')); ?>">
     <p>Nombre o ID: <input name="nombreOrga" type="text" id="textfield" size="5" /><br /></p>
     <p>Pais: <input name="paisOrga" type="text" id="textfield" size="5" /><br /></p>
     <p>Telefono: <input name="telOrga" type="text" id="textfield" size="5" /><br /></p>
     <p>Email: <input name="emailOrga" type="text" id="textfield" size="5" /><br /></p>
     <br/>
     <?php echo "$mensaje";?>
     <input type="submit" name="guardarOrgaNew" value="Guardar" />
     <input type="submit" name="cancelarOrgaNew" value="Cancelar" />
   </form>
    </div>