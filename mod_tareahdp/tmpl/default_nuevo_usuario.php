<?php
// No permitir el acceso directo al archivo ..
  defined('_JEXEC') or die;
?>
<div  align="center" >
<h1>GUARDAR USUARIO</h1>
  <form method="post" name="formulario" action="<?php echo JRoute::_('index.php', true, $params->get('mod_ctrl_ventanas.php')); ?>">
     <p>Usuario: <input name="usuarioNew" type="text" id="textfield" size="5" /><br /></p>
     <p>Nombres: <input name="nombres" type="text" id="textfield" size="5" /><br /></p>
     <p>Apellidos: <input name="apellidos" type="text" id="textfield" size="5" /><br /></p>
     <p>Contrasena: <input name="contrasenaNew" type="password" id="textfield" size="5" /><br /></p>
     <br/>
     <?php echo "$mensaje";?>
     <input type="submit" name="guardarUser" value="Guardar" />
     <input type="submit" name="cancelarUser" value="Cancelar" />
   </form>
    </div>