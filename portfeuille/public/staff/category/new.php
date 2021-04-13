<?php

require_once('../../../private/initialize.php');

require_login();

if(is_post_request()) {

  $args = $_POST['bicycle'];
  $category = new Category($args);
  $result = $category->save();

  if($result === true) {
    $new_id = $category->id;
    $session->message('The category was created successfully.');
    redirect_to(url_for('/staff/category/show.php?id=' . $new_id));
  } else {
  }

} else {
  $category = new Category;
}

?>

<?php $page_title = 'Create Category'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/category/index.php'); ?>">&laquo; Back to List</a>

  <div class="category new">
    <h1>Creer une category</h1>

    <?php echo display_errors($category->errors); ?>

    <form action="<?php echo url_for('/staff/category/new.php'); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Creer une Category" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
