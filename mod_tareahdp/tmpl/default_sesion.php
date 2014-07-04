<?php
// No permitir el acceso directo al archivo ..
defined('_JEXEC') or die;
?>
<div id="iniciar sesion" align="center" >
<h1>INICIAR SESION</h1>
  <form method="post" id="identificador" name="formulario" action="<?php echo JRoute::_('index.php', true, $params->get('mod_ctrl_ventanas.php')); ?>">
     <p>Usuario: <input name="usua" type="text" id="textfield" size="5" /><br /></p>
     <p>Contrasena: <input name="contra" type="password" id="textfield" size="5" /><br /></p>
     <?php echo "$mensaje";?>
     <input type="submit" name="iniciarSesion" value="Iniciar Sesion" />
     <input type="submit" name="salirsec" value="Salir" />
    </form>
    </div>
   