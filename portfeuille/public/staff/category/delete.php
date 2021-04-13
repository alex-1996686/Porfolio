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

  
  $result = $category->delete();
  $session->message('The category was deleted successfully.');
  redirect_to(url_for('/staff/category/index.php'));

} else {
}

?>

<?php $page_title = 'Delete category'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/category/index.php'); ?>">&laquo; Back to List</a>

  <div class="category delete">
    <h1>Delete Category</h1>
    <p>Etes vous sur de vouloir supprimer cette catégorie?</p>
    <p class="item"><?php echo h($category->name()); ?></p>

    <form action="<?php echo url_for('/staff/category/delete.php?id=' . h(u($id))); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete Category" />
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
