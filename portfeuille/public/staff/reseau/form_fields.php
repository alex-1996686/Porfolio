<?php

if(!isset($reseau)) {
  redirect_to(url_for('/staff/reseau/index.php'));
}
?>

<dl>
  <dt>Nom</dt>
  <dd><input type="text" name="reseau[name]" value="<?php echo h($reseau->name); ?>" /></dd>
</dl>
<dl>
  <dt>Descriptif</dt>
  <dd><input type="text" name="reseau[descriptif]" value="<?php echo h($reseau->descriptif); ?>" /></dd>
</dl>








