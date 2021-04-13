<?php

require_once('../../../private/initialize.php');

require_login();

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/category/index.php'));
}
$id = $_GET['id'];
$category = Category::find_by_id($id);
if($category == false) {
  redirect_to(url_for('/staff/category/index.php'));
}

if(is_post_request()) {

  $args = $_POST['category'];
  $category->merge_attributes($args);
  $result = $category->save();

  if($result === true) {
    $session->message('The category was updated successfully.');
    redirect_to(url_for('/staff/category/show.php?id=' . $id));
  } else {
  }

} else {


}

?>

<?php $page_title = 'Edit Category'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/category/index.php'); ?>">&laquo; Back to List</a>

  <div class="category edit">
    <h1>Mettre à jour la categorie</h1>

    <?php echo display_errors($category->errors); ?>

    <form action="<?php echo url_for('/staff/category/edit.php?id=' . h(u($id))); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Edit Category" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
