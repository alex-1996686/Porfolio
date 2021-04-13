<?php

if(!isset($web)) {
  redirect_to(url_for('/staff/web/index.php'));
}
?>

<dl>
  <dt>Nom</dt>
  <dd><input type="text" name="web[name]" value="<?php echo h($web->name); ?>" /></dd>
</dl>
<dl>
  <dt>Descriptif</dt>
  <dd><input type="text" name="web[descriptif]" value="<?php echo h($web->descriptif); ?>" /></dd>
</dl>








