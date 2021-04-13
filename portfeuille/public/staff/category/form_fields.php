<?php

if(!isset($category)) {
  redirect_to(url_for('/staff/category/index.php'));
}
?>

<dl>
  <dt>Nom</dt>
  <dd><input type="text" name="category[name]" value="<?php echo h($category->name); ?>" /></dd>
</dl>








