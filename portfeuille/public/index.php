<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script
  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
  crossorigin="anonymous"></script>

    <title>portfeuille!</title>
  </head>
  <body>



<?php require_once('../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>



<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo url_for('/category.php'); ?>">Catégories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"href="<?php echo url_for('/reseau.php'); ?>">Reseau</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo url_for('/systeme.php'); ?>">Systeme</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo url_for('/web.php'); ?>">Developpement Web</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo url_for('/programmation.php'); ?>">Programmation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo url_for('/about.php'); ?>">Qui suis-je?</a>
        </li>
        
      </ul>

      

    </div>
<form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" title="posez votre question" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Rechercher</button>
</form>

  </div>
</nav>




<?php include(SHARED_PATH . '/public_footer.php'); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

 













 <script type="text/javascript">
   $(function(){
    $('a').mouseenter(function(){
      $('a').css("color" , "lightgray");
    

    })

    })
 </script>
 
  </body>
</html>