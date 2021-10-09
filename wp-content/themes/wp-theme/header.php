<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="article-nav">
    <!-- custom header -->
    <?php $header_image = get_header_image();
    if (!empty($header_image)) : ?>
      <div id="header_img">
        <a href="<?php echo home_url(); ?>"><img src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>" /></a>
      </div>
    <?php endif; ?>

    <!--<a href="<?php echo esc_url(home_url('/')); ?>" class="article-logo">
      <?php bloginfo('name'); ?>
      <br />
      <!--<span class="magazine-subtitle">
        <?php bloginfo('description'); ?>
      </span>
    </a>-->
    <div class="header-content-flex">
      <div class="header-about">
        <ul>
          <li>
            <a href="http://localhost/wptraining/category/html/">HTML</a>
          </li>
          <li>
            <a href="http://localhost/wptraining/category/css/">CSS</a>
          </li>
          <li>
            <a href="http://localhost/wptraining/category/javascript/">JavaScript</a>
          </li>
          <li><a href="http://localhost/wptraining/category/php/">PHP</a>
          </li>
          <li><a href="http://localhost/wptraining/category/mysql/">MySQL</a>
          </li>
        </ul>
      </div>
    </div>
  </header>