<?php
/*
Template Name: お問い合わせ
*/
?>
<?php get_header(); ?>
<div class="contact">
  <form class="form" method="post">
    <?php echo do_shortcode('[contact-form-7 id="33" title="お問い合わせフォーム"]'); ?>
  </form>
</div>
<?php get_footer(); ?>