<?php require_once('../../../private/initialize.php'); ?>
<?php require_login(); ?>

<?php

$id = $_GET['id'] ?? '1'; 

$category = Category::find_by_id($id);

?>

<?php $page_title = 'Show Category: ' . h($category->name()); ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/category/index.php'); ?>">&laquo; Back to List</a>

  <div class="Category show">

    <h1>Categorie: <?php echo h($category->name()); ?></h1>

    <div class="attributes">
      <dl>
        <dt>Nom</dt>
        <dd><?php echo h($category->name); ?></dd>
      </dl>
      
    </div>

  </div>

</div>
