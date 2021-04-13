<?php

require_once('../../../private/initialize.php');

require_login();

if(is_post_request()) {

  $args = $_POST['programmation'];
  $programmation = new Programmation($args);
  $result = $programmation->save();

  if($result === true) {
    $new_id = $programmation->id;
    $session->message('The matiere was created successfully.');
    redirect_to(url_for('/staff/programmation/show.php?id=' . $new_id));
  } else {
  }

} else {

  $programmation = new Programmation;
}

?>

<?php $page_title = 'Create programmation'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/programmation/index.php'); ?>">&laquo; Back to List</a>

  <div class="programmation new">
    <h1>Creer une matiere</h1>

    <?php echo display_errors($programmation->errors); ?>

    <form action="<?php echo url_for('/staff/programmation/new.php'); ?>" method="post">

      <?php include('form_fields.php'); ?>

      <div id="operations">
        <input type="submit" value="Creer une programmation" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
