<?php require_once('../private/initialize.php'); ?>

<?php


  $id = $_GET['id'] ?? false;

  if(!$id) {
    redirect_to('web.php');
  }


  $web = web::find_by_id($id);

?>

<?php $page_title = 'Detail: ' . $web->name(); ?>
<?php $page_title = 'Detail: ' . $web->descriptif(); ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <a href="systeme.php">Retour à web</a>

  <div id="page">

    <div class="detail">
      <dl>
        <dt>Nom</dt>
        <dd><?php echo h($web->name); ?></dd>
        <dt>Descriptif</dt>
        <dd><?php echo h($web->descriptif); ?></dd>

      </dl>
      
    </div>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
