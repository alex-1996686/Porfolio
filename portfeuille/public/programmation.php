<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'portfeuille'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <img class="inset" src="<?php echo url_for('/images/AdobeStock_55807979_thumb.jpeg') ?>" />
      <h2>Programmation</h2>
      <p>Faire du web sa femme.</p>
      <p>Le developpent web un univers plein de merveilles.</p>
    </div>

    <table id="portfeuille">
      <tr>
        <th>Nom</th>
        <th>Descriptif</th>
      </tr>

<?php

$programmation = Programmation::find_all();

?>
      <?php foreach($programmation as $programmation) { ?>
      <tr>
        <td><?php echo h($programmation->name); ?></td>
        <td><?php echo h($programmation->descriptif); ?></td>
        <td><a href="detailP.php?id=<?php echo $programmation->id; ?>">View</a></td>
        
      </tr>
      <?php } ?>

    </table>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
