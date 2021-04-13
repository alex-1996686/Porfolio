<?php

if(!isset($programmation)) {
  redirect_to(url_for('/staff/programmation/index.php'));
}
?>

<dl>
  <dt>Nom</dt>
  <dd><input type="text" name="programmation[name]" value="<?php echo h($programmation->name); ?>" /></dd>
</dl>
<dl>
  <dt>Descriptif</dt>
  <dd><input type="text" name="programmation[descriptif]" value="<?php echo h($programmation->descriptif); ?>" /></dd>
</dl>








