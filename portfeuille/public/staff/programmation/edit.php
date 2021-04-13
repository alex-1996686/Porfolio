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

  $args = $_POST['programmation'];
  $programmation->merge_attributes($args);
  $result = $programmation->save();

  if($result === true) {
    $session->message('The programmation was updated successfully.');
    redirect_to(url_for('/staff/programmation/show.php?id=' . $id));
  } else {
  }

} else {


}

?>

<?php $page_title = 'Edit programmation'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/programmation/index.php'); ?>">&laquo; Back to List</a>

  <div class="web edit">
    <h1>Mettre à jour la programmation</h1>

    <?php echo display_errors($programmation->errors); ?>

    <form action="<?php echo url_for('/staff/programmation/edit.php?id=' . h(u($id))); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Edit Programmation" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
