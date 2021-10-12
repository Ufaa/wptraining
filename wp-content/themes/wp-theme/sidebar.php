<aside class="sidebar">
  <div class="banner">
    <a href="https://coachtech.site">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner.png">
    </a>
  </div>
  <div class="contributer">
    <div class="contributer_icon">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/estramedia__logo.png">
    </div>
    <h2 class="contributer_name">エストラ編集部</h2>
    <P class="contributo_profile">
      プロフィール文が入ります。プロフィール文が入ります。プロフィール文が入ります。プロフィール文が入ります。プロフィール文が入ります。
    </P>
  </div>
  <div class="category">
    <h2 class="category_ttl">Category</h2>
    <ul>
      <li class="category_list">
        <a href="<?php echo get_category_link(2); ?>" class="category_link"> HTML</a>
      </li>
      <li class="category_list">
        <a href="<?php echo get_category_link(3); ?>" class="category_link"> CSS</a>
      </li>
      <li class="category_list">
        <a href="<?php echo get_category_link(4); ?>" class="category_link"> JavaScript</a>
      </li>
      <li class="category_list">
        <a href="<?php echo get_category_link(5); ?>" class="category_link"> PHP</a>
      </li>
      <li class="category_list">
        <a href="<?php echo get_category_link(6); ?>" class="category_link"> MySQL</a>
      </li>
    </ul>
  </div>
</aside>

<!--
  <?php if (is_active_sidebar('main-sidebar')) : ?>
    <ul class="menu">
      <?php dynamic_sidebar('main-sidebar'); ?>
    </ul>
  <?php endif; ?>
  -->