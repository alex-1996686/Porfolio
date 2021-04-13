<?php

require_once('../../../private/initialize.php');

require_login();

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/reseau/index.php'));
}
$id = $_GET['id'];
$reseau = Reseau::find_by_id($id);
if($reseau == false) {
  redirect_to(url_for('/staff/reseau/index.php'));
}

if(is_post_request()) {

  $result = $reseau->delete();
  $session->message('The reseau was deleted successfully.');
  redirect_to(url_for('/staff/reseau/index.php'));

} else {
}

?>

<?php $page_title = 'Delete reseau'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/reseau/index.php'); ?>">&laquo; Back to List</a>

  <div class="reseau delete">
    <h1>Delete Reseau</h1>
    <p>Etes vous sur de vouloir supprimer cette matiere?</p>
    <p class="item"><?php echo h($reseau->name()); ?></p>
    <p class="item"><?php echo h($reseau->descriptif()); ?></p>

    <form action="<?php echo url_for('/staff/reseau/delete.php?id=' . h(u($id))); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete Category" />
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
