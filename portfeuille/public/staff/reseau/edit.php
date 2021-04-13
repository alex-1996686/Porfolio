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

  $args = $_POST['reseau'];
  $reseau->merge_attributes($args);
  $result = $reseau->save();

  if($result === true) {
    $session->message('The category was updated successfully.');
    redirect_to(url_for('/staff/reseau/show.php?id=' . $id));
  } else {
  }

} else {


}

?>

<?php $page_title = 'Edit reseau'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/reseau/index.php'); ?>">&laquo; Back to List</a>

  <div class="category edit">
    <h1>Mettre à jour la categorie</h1>

    <?php echo display_errors($category->errors); ?>

    <form action="<?php echo url_for('/staff/reseau/edit.php?id=' . h(u($id))); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Edit Reseau" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
