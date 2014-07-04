<?php

 defined('_JEXEC') or die;

?>

<div id="menu_principal" align="center" >
<h1>BIENVENIDOS</h1>
<h2>Menu Administrador</h2>
<form method="post" id="identificador" name="principal" action="<?php echo JRoute::_('index.php', true, $params->get('mod_tareahdp.php')); ?>">
    <input type="submit" name="consultar" value="Consultar Informacion" />
    <br>
    <input type="submit" name="organismos" value="Gestionar Organismos" />
    <br>
     <input type="submit" name="users" value="Gestionar Usuarios" />
    <br>
    <input type="submit"  name="cerrarSesion" value="Cerrar Sesion" />
</form>
</div>