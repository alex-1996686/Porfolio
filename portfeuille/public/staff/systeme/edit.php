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

  $args = $_POST['systeme'];
  $systeme->merge_attributes($args);
  $result = $systeme->save();

  if($result === true) {
    $session->message('The system was updated successfully.');
    redirect_to(url_for('/staff/systeme/show.php?id=' . $id));
  } else {
  }

} else {


}

?>

<?php $page_title = 'Edit systeme'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/systeme/index.php'); ?>">&laquo; Back to List</a>

  <div class="systeme edit">
    <h1>Mettre à jour la matiere</h1>

    <?php echo display_errors($systeme->errors); ?>

    <form action="<?php echo url_for('/staff/systeme/edit.php?id=' . h(u($id))); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Edit Systeme" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
