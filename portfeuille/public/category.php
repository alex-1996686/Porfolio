<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'portfeuille'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <img class="inset" src="<?php echo url_for('/images/AdobeStock_55807979_thumb.jpeg') ?>" />
      <h2>Catégories</h2>
      <p>Faire du web sa femme.</p>
      <p>Le developpent web un univers plein de merveilles.</p>
    </div>

    <table id="portfeuille">
      <tr>
        <th>Nom</th>
      </tr>

<?php

$category = Category::find_all();

?>
      <?php foreach($category as $category) { ?>
      <tr>
        <td><?php echo h($category->name); ?></td>
        <td><a href="detail.php?id=<?php echo $category->id; ?>">View</a></td>
        
      </tr>
      <?php } ?>

    </table>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
