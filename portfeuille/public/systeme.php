<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'portfeuille'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <img class="inset" src="<?php echo url_for('/images/AdobeStock_55807979_thumb.jpeg') ?>" />
      <h2>Systeme</h2>
      <p>Faire du web sa femme.</p>
      <p>Le developpent web un univers plein de merveilles.</p>
    </div>

    <table id="portfeuille">
      <tr>
        <th>Nom</th>
        <th>Descriptif</th>
      </tr>

<?php

$systeme = Systeme::find_all();

?>
      <?php foreach($systeme as $systeme) { ?>
      <tr>
        <td><?php echo h($systeme->name); ?></td>
        <td><?php echo h($systeme->descriptif); ?></td>
        <td><a href="detailS.php?id=<?php echo $systeme->id; ?>">View</a></td>
        
      </tr>
      <?php } ?>

    </table>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
