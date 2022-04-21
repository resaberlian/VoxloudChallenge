<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- displays site properly based on user's device -->
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <title>Challenge by Voxloud | Bookmark landing page</title>
  <?php wp_head(); ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
</head>

<body>
  <!-- HEADER -->
  <header>
    <nav class="header">
      <div class="logo">
        <img src="<?php echo get_template_directory_uri().'/assets/images/logo-bookmark.svg';?>" alt="" class="logo-svg" id="Logo" width="150px">
      </div>
      <ul>
        <li><a href="">FEATURES</a></li>
        <li><a href="">PRICING </a> </li>
        <li><a href="">CONTACT </a> </li>
        <li><button class="red-btn"><a href="">LOGIN</a> </button></li>
      </ul>
      <div class="menu-toggle">
        <input type="checkbox" name="" id="">
        <span></span>
        <span></span>
        <span class="child"></span>
      </div>
    </nav>
  </header>