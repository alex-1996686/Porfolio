<?php

require_once('../../../private/initialize.php');

require_login();

if(is_post_request()) {

  $args = $_POST['reseau'];
  $reseau = new Reseau($args);
  $result = $reseau->save();

  if($result === true) {
    $new_id = $reseau->id;
    $session->message('The matiere was created successfully.');
    redirect_to(url_for('/staff/reseau/show.php?id=' . $new_id));
  } else {
  }

} else {
  $reseau = new Reseau;
}

?>

<?php $page_title = 'Create Reseau'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/reseau/index.php'); ?>">&laquo; Back to List</a>

  <div class="reseau new">
    <h1>Creer une matiere</h1>

    <?php echo display_errors($reseau->errors); ?>

    <form action="<?php echo url_for('/staff/reseau/new.php'); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Creer un reseau" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
