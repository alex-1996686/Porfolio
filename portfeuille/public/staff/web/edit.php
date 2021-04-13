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

  $args = $_POST['web'];
  $web->merge_attributes($args);
  $result = $web->save();

  if($result === true) {
    $session->message('The web was updated successfully.');
    redirect_to(url_for('/staff/web/show.php?id=' . $id));
  } else {
  }

} else {


}

?>

<?php $page_title = 'Edit web'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/web/index.php'); ?>">&laquo; Back to List</a>

  <div class="web edit">
    <h1>Mettre à jour la categorie</h1>

    <?php echo display_errors($web->errors); ?>

    <form action="<?php echo url_for('/staff/web/edit.php?id=' . h(u($id))); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Edit Reseau" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
