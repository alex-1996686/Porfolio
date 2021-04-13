<?php require_once('../../../private/initialize.php'); ?>
<?php require_login(); ?>

<?php

$id = $_GET['id'] ?? '1'; 

$reseau = Reseau::find_by_id($id);

?>

<?php $page_title = 'Show reseau: ' . h($reseau->name()) .h($reseau->descriptif()); ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/reseau/index.php'); ?>">&laquo; Back to List</a>

  <div class="reseau show">

    <h1>reseau: <?php echo h($reseau->name()); ?></h1>
    <h1>reseau: <?php echo h($reseau->descriptif()); ?></h1>

    <div class="attributes">
      <dl>
        <dt>Nom</dt>
        <dt>Descriptif</dt>
        <dd><?php echo h($category->name); ?></dd>
        <dd><?php echo h($category->descriptif); ?></dd>
      </dl>
      
    </div>

  </div>

</div>
