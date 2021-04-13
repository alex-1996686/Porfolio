<?php

require_once('../../../private/initialize.php');

require_login();

if(is_post_request()) {

  $args = $_POST['systeme'];
  $systeme = new Systeme($args);
  $result = $systeme->save();

  if($result === true) {
    $new_id = $systeme->id;
    $session->message('The matiere was created successfully.');
    redirect_to(url_for('/staff/systeme/show.php?id=' . $new_id));
  } else {
  }

} else {
  $systeme = new Systeme;
}

?>

<?php $page_title = 'Create Systeme'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/systeme/index.php'); ?>">&laquo; Back to List</a>

  <div class="systeme new">
    <h1>Creer une matiere</h1>

    <?php echo display_errors($systeme->errors); ?>

    <form action="<?php echo url_for('/staff/systeme/new.php'); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Creer un systeme" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
