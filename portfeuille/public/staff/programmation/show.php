<?php require_once('../../../private/initialize.php'); ?>
<?php require_login(); ?>

<?php

$id = $_GET['id'] ?? '1'; 

$programmation = Programmation::find_by_id($id);

?>

<?php $page_title = 'Show programmation: ' . h($programmation->name()) .h($programmation->descriptif()); ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/programmation/index.php'); ?>">&laquo; Back to List</a>

  <div class="programmation show">

    <h1>programmation: <?php echo h($programmation->name()); ?></h1>
    <h1>programmation: <?php echo h($programmation->descriptif()); ?></h1>

    <div class="attributes">
      <dl>
        <dt>Nom</dt>
        <dt>Descriptif</dt>
        <dd><?php echo h($programmation->name); ?></dd>
        <dd><?php echo h($programmation->descriptif); ?></dd>
      </dl>
      
    </div>

  </div>

</div>
