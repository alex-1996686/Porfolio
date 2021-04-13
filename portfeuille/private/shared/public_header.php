<!doctype html>

<html lang="en">
  <head>
    <title>ACCUEIL <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
    <meta charset="utf-8">
  <style type="text/css">
    a{
      list-style: none;
      text-decoration: none;
    }
  </style>
  </head>

  <body>

    <header>
      <h1 style="display: flex;justify-content: center;font-family: algerian;text-decoration: none;">
        <a href="<?php echo url_for('/index.php'); ?>">
          

         Accueil 
        </a>

      </h1>
    </header>

<!--  <img class="dev-icon" src="<?php echo url_for('/images/Dev_symbol.svg') ?>" /><br /> -->