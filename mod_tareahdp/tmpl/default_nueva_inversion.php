
<?php
// No permitir el acceso directo al archivo ..
defined('_JEXEC') or die;
?>

<div  align="center" >
<h1>GUARDAR INVERSION</h1>
  <form method="post" name="formulario" action="<?php echo JRoute::_('index.php', true, $params->get('mod_ctrl_ventanas.php')); ?>">
      <p><input name="orgs" type="hidden" value="<?php  echo $orgas; ?>" id="textfield" size="5" /><br /></p>
      <p>Descripcion: <input name="descripcion" type="text" id="textfield" size="5" /><br /></p>
      <p>Ano: <input name="anio" type="text" id="textfield" size="5" /><br /></p>
      <p>total: <input name="total" type="text" id="textfield" size="5" /><br /></p>
     <br/>
     <?php echo "$mensaje";?>
     <input type="submit" name="guardarInverNew" value="Guardar" />
     <input type="submit" name="cancelarInverNew" value="Cancelar" />
   </form>
    </div>