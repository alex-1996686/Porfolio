<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'portfeuille'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <img class="inset" src="<?php echo url_for('/images/AdobeStock_55807979_thumb.jpeg') ?>" />
      <h2>Web</h2>
      <p>Faire du web sa femme.</p>
      <p>Le developpent web un univers plein de merveilles.</p>
    </div>

    <table id="portfeuille">
      <tr>
        <th>Nom</th>
        <th>Descriptif</th>
      </tr>

<?php

$web = Web::find_all();

?>
      <?php foreach($web as $web) { ?>
      <tr>
        <td><?php echo h($web->name); ?></td>
        <td><?php echo h($web->descriptif); ?></td>
        <td><a href="detailW.php?id=<?php echo $web->id; ?>">View</a></td>
        
      </tr>
      <?php } ?>

    </table>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
