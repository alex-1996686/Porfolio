<?php require_once('../../../private/initialize.php'); ?>
<?php require_login(); ?>

<?php

$current_page = $_GET['page'] ?? 1;
$per_page = 5;
$total_count = Programmation::count_all();

$pagination = new Pagination($current_page, $per_page, $total_count);


$sql = "SELECT * FROM programmation ";
$sql .= "LIMIT {$per_page} ";
$sql .= "OFFSET {$pagination->offset()}";
$web = Programmation::find_by_sql($sql);

?>
<?php $page_title = 'programmation'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="category listing">
    <h1>Programmation</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/staff/programmation/new.php'); ?>">Ajouter une matiere</a>
    </div>

  	<table class="list">
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Descriptif</th>
        
      </tr>

      <?php foreach($programmation as $programmation) { ?>
        <tr>
          <td><?php echo h($programmation->id); ?></td>
          <td><?php echo h($programmation->name); ?></td>
          <td><?php echo h($programmation->descriptif); ?></td>
          
          <td><a class="action" href="<?php echo url_for('/staff/programmation/show.php?id=' . h(u($programmation->id))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/programmation/edit.php?id=' . h(u($programmation->id))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/programmation/delete.php?id=' . h(u($programmation->id))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

<?php
$url = url_for('/staff/programmation/index.php');
echo $pagination->page_links($url);
?>


  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
