<?php require_once('../../../private/initialize.php'); ?>
<?php require_login(); ?>

<?php

$current_page = $_GET['page'] ?? 1;
$per_page = 5;
$total_count = Systeme::count_all();

$pagination = new Pagination($current_page, $per_page, $total_count);



$sql = "SELECT * FROM systeme ";
$sql .= "LIMIT {$per_page} ";
$sql .= "OFFSET {$pagination->offset()}";
$systeme = Systeme::find_by_sql($sql);

?>
<?php $page_title = 'Systeme'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="category listing">
    <h1>Systeme</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/staff/systeme/new.php'); ?>">Ajouter une matiere</a>
    </div>

  	<table class="list">
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Descriptif</th>
        
      </tr>

      <?php foreach($systeme as $systeme) { ?>
        <tr>
          <td><?php echo h($systeme->id); ?></td>
          <td><?php echo h($systeme->name); ?></td>
          <td><?php echo h($systeme->descriptif); ?></td>
          
          <td><a class="action" href="<?php echo url_for('/staff/systeme/show.php?id=' . h(u($systeme->id))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/systeme/edit.php?id=' . h(u($systeme->id))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/systeme/delete.php?id=' . h(u($systeme->id))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

<?php
$url = url_for('/staff/systeme/index.php');
echo $pagination->page_links($url);
?>


  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
