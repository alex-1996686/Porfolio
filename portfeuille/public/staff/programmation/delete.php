<?php

require_once('../../../private/initialize.php');

require_login();

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/programmation/index.php'));
}
$id = $_GET['id'];
$programmation = Programmation::find_by_id($id);
if($programmation == false) {
  redirect_to(url_for('/staff/programmation/index.php'));
}

if(is_post_request()) {

  $result = $programmation->delete();
  $session->message('The programmation was deleted successfully.');
  redirect_to(url_for('/staff/programmation/index.php'));

} else {
}

?>

<?php $page_title = 'Delete programmation'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/programmation/index.php'); ?>">&laquo; Back to List</a>

  <div class="programmation delete">
    <h1>Delete programmation</h1>
    <p>Etes vous sur de vouloir supprimer cette matiere?</p>
    <p class="item"><?php echo h($programmation->name()); ?></p>
    <p class="item"><?php echo h($programmation->descriptif()); ?></p>

    <form action="<?php echo url_for('/staff/programmation/delete.php?id=' . h(u($id))); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete programmation" />
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
