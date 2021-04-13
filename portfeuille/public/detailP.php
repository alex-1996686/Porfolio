<?php require_once('../private/initialize.php'); ?>

<?php


  $id = $_GET['id'] ?? false;

  if(!$id) {
    redirect_to('programmation.php');
  }


  $programmation = programmation::find_by_id($id);

?>

<?php $page_title = 'Detail: ' . $programmation->name(); ?>
<?php $page_title = 'Detail: ' . $programmation->descriptif(); ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <a href="systeme.php">Retour à systeme</a>

  <div id="page">

    <div class="detail">
      <dl>
        <dt>Nom</dt>
        <dd><?php echo h($programmation->name); ?></dd>
        <dt>Descriptif</dt>
        <dd><?php echo h($programmation->descriptif); ?></dd>

      </dl>
      
    </div>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
