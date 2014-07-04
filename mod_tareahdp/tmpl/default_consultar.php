<?php

 defined('_JEXEC') or die;

?>

<div id="menu_principal" align="center" >
<h1>CONSULTAR INVERSION EN EL RUBRO DE INFORMATICA</h1>
<form method="post" id="identificador" name="principal" action="<?php echo JRoute::_('index.php', true, $params->get('mod_tareahdp.php')); ?>">
    <select name="filtro">
          <option selected disabled>--Seleccionar filtro--</option>
          <option>Inversion por Ano</option>
          <option>Inversion por Organismo</option>
          <option>Inversion total</option> 
        </select>
    
    <input type="submit" name="filtroConsul" value="Consultar" />
    <br>
    <input type="submit" name="cancelarConsul" value="Cancelar" />
</form>
</div>