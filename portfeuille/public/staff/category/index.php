<?php require_once('../../../private/initialize.php'); ?>
<?php require_login(); ?>

<?php

$current_page = $_GET['page'] ?? 1;
$per_page = 5;
$total_count = Category::count_all();

$pagination = new Pagination($current_page, $per_page, $total_count);


$sql = "SELECT * FROM category ";
$sql .= "LIMIT {$per_page} ";
$sql .= "OFFSET {$pagination->offset()}";
$category = Category::find_by_sql($sql);

?>
<?php $page_title = 'Category'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="category listing">
    <h1>Categories</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/staff/category/new.php'); ?>">Ajouter un catégorie</a>
    </div>

  	<table class="list">
      <tr>
        <th>ID</th>
        <th>Nom</th>
        
      </tr>

      <?php foreach($category as $category) { ?>
        <tr>
          <td><?php echo h($category->id); ?></td>
          <td><?php echo h($category->name); ?></td>
          
          <td><a class="action" href="<?php echo url_for('/staff/category/show.php?id=' . h(u($category->id))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/category/edit.php?id=' . h(u($category->id))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/category/delete.php?id=' . h(u($category->id))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

<?php
$url = url_for('/staff/category/index.php');
echo $pagination->page_links($url);
?>


  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
