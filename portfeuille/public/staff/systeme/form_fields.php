<?php

if(!isset($systeme)) {
  redirect_to(url_for('/staff/systeme/index.php'));
}
?>

<dl>
  <dt>Nom</dt>
  <dd><input type="text" name="systeme[name]" value="<?php echo h($systeme->name); ?>" /></dd>
</dl>
<dl>
  <dt>Descriptif</dt>
  <dd><input type="text" name="systeme[descriptif]" value="<?php echo h($systeme->descriptif); ?>" /></dd>
</dl>








