<?php require_once('../../../private/initialize.php'); ?>
<?php require_login(); ?>

<?php

$current_page = $_GET['page'] ?? 1;
$per_page = 5;
$total_count = Reseau::count_all();

$pagination = new Pagination($current_page, $per_page, $total_count);



$sql = "SELECT * FROM reseau ";
$sql .= "LIMIT {$per_page} ";
$sql .= "OFFSET {$pagination->offset()}";
$reseau = Reseau::find_by_sql($sql);

?>
<?php $page_title = 'Reseau'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="category listing">
    <h1>Reseau</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/staff/reseau/new.php'); ?>">Ajouter une matiere</a>
    </div>

  	<table class="list">
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Descriptif</th>
        
      </tr>

      <?php foreach($reseau as $reseau) { ?>
        <tr>
          <td><?php echo h($reseau->id); ?></td>
          <td><?php echo h($reseau->name); ?></td>
          <td><?php echo h($reseau->descriptif); ?></td>
          
          <td><a class="action" href="<?php echo url_for('/staff/reseau/show.php?id=' . h(u($reseau->id))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/reseau/edit.php?id=' . h(u($reseau->id))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/reseau/delete.php?id=' . h(u($reseau->id))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

<?php
$url = url_for('/staff/reseau/index.php');
echo $pagination->page_links($url);
?>


  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
