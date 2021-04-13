<?php

require_once('../../../private/initialize.php');

require_login();

if(is_post_request()) {

  $args = $_POST['web'];
  $web = new Web($args);
  $result = $web->save();

  if($result === true) {
    $new_id = $web->id;
    $session->message('The matiere was created successfully.');
    redirect_to(url_for('/staff/web/show.php?id=' . $new_id));
  } else {
  }

} else {
  $web = new Web;
}

?>

<?php $page_title = 'Create Web'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/web/index.php'); ?>">&laquo; Back to List</a>

  <div class="web new">
    <h1>Creer une matiere</h1>

    <?php echo display_errors($web->errors); ?>

    <form action="<?php echo url_for('/staff/web/new.php'); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Creer un web" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
