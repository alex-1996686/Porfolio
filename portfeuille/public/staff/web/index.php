<?php require_once('../../../private/initialize.php'); ?>
<?php require_login(); ?>

<?php

$current_page = $_GET['page'] ?? 1;
$per_page = 5;
$total_count = Web::count_all();

$pagination = new Pagination($current_page, $per_page, $total_count);



$sql = "SELECT * FROM web ";
$sql .= "LIMIT {$per_page} ";
$sql .= "OFFSET {$pagination->offset()}";
$web = Web::find_by_sql($sql);

?>
<?php $page_title = 'web'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="category listing">
    <h1>Web</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/staff/web/new.php'); ?>">Ajouter une matiere</a>
    </div>

  	<table class="list">
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Descriptif</th>
        
      </tr>

      <?php foreach($web as $web) { ?>
        <tr>
          <td><?php echo h($web->id); ?></td>
          <td><?php echo h($web->name); ?></td>
          <td><?php echo h($web->descriptif); ?></td>
          
          <td><a class="action" href="<?php echo url_for('/staff/web/show.php?id=' . h(u($web->id))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/web/edit.php?id=' . h(u($web->id))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/web/delete.php?id=' . h(u($web->id))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

<?php
$url = url_for('/staff/web/index.php');
echo $pagination->page_links($url);
?>


  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
