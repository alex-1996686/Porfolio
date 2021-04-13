<?php require_once('../private/initialize.php'); ?>

<?php


  $id = $_GET['id'] ?? false;

  if(!$id) {
    redirect_to('systeme.php');
  }


  $systeme = systeme::find_by_id($id);

?>

<?php $page_title = 'Detail: ' . $systeme->name(); ?>
<?php $page_title = 'Detail: ' . $systeme->descriptif(); ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <a href="systeme.php">Retour à systeme</a>

  <div id="page">

    <div class="detail">
      <dl>
        <dt>Nom</dt>
        <dd><?php echo h($systeme->name); ?></dd>
        <dt>Descriptif</dt>
        <dd><?php echo h($systeme->descriptif); ?></dd>

      </dl>
      
    </div>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
