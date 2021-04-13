<?php

require_once('../../../private/initialize.php');

require_login();

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/web/index.php'));
}
$id = $_GET['id'];
$web = Web::find_by_id($id);
if($web == false) {
  redirect_to(url_for('/staff/web/index.php'));
}

if(is_post_request()) {

  $result = $web->delete();
  $session->message('The web was deleted successfully.');
  redirect_to(url_for('/staff/web/index.php'));

} else {
}

?>

<?php $page_title = 'Delete web'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/web/index.php'); ?>">&laquo; Back to List</a>

  <div class="web delete">
    <h1>Delete web</h1>
    <p>Etes vous sur de vouloir supprimer cette matiere?</p>
    <p class="item"><?php echo h($web->name()); ?></p>
    <p class="item"><?php echo h($web->descriptif()); ?></p>

    <form action="<?php echo url_for('/staff/web/delete.php?id=' . h(u($id))); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete Category" />
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
