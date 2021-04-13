<?php

require_once('../../../private/initialize.php');

require_login();

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/systeme/index.php'));
}
$id = $_GET['id'];
$systeme = Systeme::find_by_id($id);
if($systeme == false) {
  redirect_to(url_for('/staff/systeme/index.php'));
}

if(is_post_request()) {

  $result = $systeme->delete();
  $session->message('The systeme was deleted successfully.');
  redirect_to(url_for('/staff/systeme/index.php'));

} else {
}

?>

<?php $page_title = 'Delete Systeme'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/systeme/index.php'); ?>">&laquo; Back to List</a>

  <div class="reseau delete">
    <h1>Delete Systeme</h1>
    <p>Etes vous sur de vouloir supprimer cette matiere?</p>
    <p class="item"><?php echo h($systeme->name()); ?></p>
    <p class="item"><?php echo h($systeme->descriptif()); ?></p>

    <form action="<?php echo url_for('/staff/systeme/delete.php?id=' . h(u($id))); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete Systeme" />
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
