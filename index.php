<!DOCTYPE html>
<html <?php language_attributes(); ?> class="dark">
<head>
  <?php wp_head(); ?>
</head>
<body <?php body_class('overflow-x-hidden m-3 text-md bg-slate-800 text-white'); ?>>

  <!-- Πρώτο section: Hero dynamic -->
  <?php get_template_part('template-parts/hero'); ?>
  <?php get_template_part('template-parts/pricing'); ?>

  <!-- React app συνεχίζει για τα υπόλοιπα sections -->
  <div id="root"></div>

  <?php wp_footer(); ?>
</body>
</html>