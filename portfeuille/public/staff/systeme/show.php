<?php require_once('../../../private/initialize.php'); ?>
<?php require_login(); ?>

<?php

$id = $_GET['id'] ?? '1'; 

$systeme = Systeme::find_by_id($id);

?>

<?php $page_title = 'Show systeme: ' . h($systeme->name()) .h($systeme->descriptif()); ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/systeme/index.php'); ?>">&laquo; Back to List</a>

  <div class="systeme show">

    <h1>systeme: <?php echo h($systeme->name()); ?></h1>
    <h1>systeme: <?php echo h($systeme->descriptif()); ?></h1>

    <div class="attributes">
      <dl>
        <dt>Nom</dt>
        <dt>Descriptif</dt>
        <dd><?php echo h($systeme->name); ?></dd>
        <dd><?php echo h($systeme->descriptif); ?></dd>
      </dl>
      
    </div>

  </div>

</div>
