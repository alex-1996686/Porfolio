<?php require_once('../../private/initialize.php'); ?>

<?php require_login(); ?>

<?php $page_title = 'Staff Menu'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div id="main-menu">
    <h2>Menu principal</h2>
    <ul>
      <li><a href="<?php echo url_for('/staff/category/index.php'); ?>">Categories</a></li>
      <li><a href="<?php echo url_for('/staff/admins/index.php'); ?>">Admins</a></li>
      <li><a href="<?php echo url_for('/staff/reseau/index.php'); ?>">Reseau</a></li>
      <li><a href="<?php echo url_for('/staff/systeme/index.php'); ?>">Systeme</a></li>
      <li><a href="<?php echo url_for('/staff/web/index.php'); ?>">Developpement Web</a></li>


    </ul>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
