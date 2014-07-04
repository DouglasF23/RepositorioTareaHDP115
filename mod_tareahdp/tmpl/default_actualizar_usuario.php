<?php
// No permitir el acceso directo al archivo ..
  defined('_JEXEC') or die;
?>
<div  align="center" >
<h1>GUARDAR USUARIO</h1>
  <form method="post" name="formulario" action="<?php echo JRoute::_('index.php', true, $params->get('mod_ctrl_ventanas.php')); ?>">
      <p>Actualizacion del Usuario: <input name="usuarioAnt" type="hidden" value="<?php  echo $usuarioAnt; ?>" id="textfield" size="5" /><br /></p>
     <p>Usuario: <input name="usuarioNew" type="text"  value="<?php  echo $usuario; ?>" id="textfield" size="5" /><br /></p>
     <p>Nombres: <input name="nombres" value="<?php echo $nombres; ?>" type="text" id="textfield" size="5" /><br /></p>
     <p>Apellidos: <input name="apellidos" value="<?php echo $apellidos; ?>" type="text" id="textfield" size="5" /><br /></p>
     <p>Contrasena: <input name="contrasenaNew" value="<?php echo $contrasena; ?>" type="password" id="textfield" size="5" /><br /></p>
     <br/>
     <?php echo "$mensaje";?>
     <input type="submit" name="actualUser" value="Guardar" />
     <input type="submit" name="cancelarUser" value="Cancelar" />
   </form>
    </div> 