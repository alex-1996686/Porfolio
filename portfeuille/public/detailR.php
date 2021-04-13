<?php require_once('../private/initialize.php'); ?>

<?php


  $id = $_GET['id'] ?? false;

  if(!$id) {
    redirect_to('reseau.php');
  }


  $reseau = reseau::find_by_id($id);

?>

<?php $page_title = 'Detail: ' . $reseau->name(); ?>
<?php $page_title = 'Detail: ' . $reseau->descriptif(); ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <a href="reseau.php">Retour à reseau</a>

  <div id="page">

    <div class="detail">
      <dl>
        <dt>Nom</dt>
        <dd><?php echo h($reseau->name); ?></dd>
        <dt>Descriptif</dt>
        <dd><?php echo h($reseau->descriptif); ?></dd>

      </dl>
      
    </div>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
