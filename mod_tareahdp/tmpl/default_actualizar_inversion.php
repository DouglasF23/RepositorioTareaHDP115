
<?php
// No permitir el acceso directo al archivo ..
defined('_JEXEC') or die;
?>

<div  align="center" >
<h1>GUARDAR INVERSION</h1>
  <form method="post" name="formulario" action="<?php echo JRoute::_('index.php', true, $params->get('mod_ctrl_ventanas.php')); ?>">
      <p><input name="orgs" type="hidden" value="<?php  echo $orgas; ?>" id="textfield" size="5" /><br /></p>
      <p><input name="selec" type="hidden" value="<?php  echo $selec; ?>" id="textfield" size="5" /><br /></p>
      <p>Descripcion: <input name="descripcion" value="<?php  echo $desc; ?>" type="text" id="textfield" size="5" /><br /></p>
      <p>Ano: <input name="anio" type="text" value="<?php  echo $an; ?>" id="textfield" size="5" /><br /></p>
      <p>total: <input name="total" type="text" value="<?php  echo $tot; ?>" id="textfield" size="5" /><br /></p>
     <br/>
     <?php echo "$mensaje";?>
     <input type="submit" name="actualsInverNew" value="Guardar" />
     <input type="submit" name="cancelarInverNew" value="Cancelar" />
   </form>
    </div>