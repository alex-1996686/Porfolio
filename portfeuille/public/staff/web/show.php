<?php require_once('../../../private/initialize.php'); ?>
<?php require_login(); ?>

<?php

$id = $_GET['id'] ?? '1'; 

$web = Web::find_by_id($id);

?>

<?php $page_title = 'Show web: ' . h($web->name()) .h($web->descriptif()); ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/web/index.php'); ?>">&laquo; Back to List</a>

  <div class="web show">

    <h1>web: <?php echo h($web->name()); ?></h1>
    <h1>web: <?php echo h($web->descriptif()); ?></h1>

    <div class="attributes">
      <dl>
        <dt>Nom</dt>
        <dt>Descriptif</dt>
        <dd><?php echo h($web->name); ?></dd>
        <dd><?php echo h($web->descriptif); ?></dd>
      </dl>
      
    </div>

  </div>

</div>
