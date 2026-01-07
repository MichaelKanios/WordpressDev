<?php
function mrp_enqueue() {
    // Tailwind CSS
    wp_enqueue_style(
        'react-tailwind',
        get_template_directory_uri() . '/assets/index.css',
        array(),
        filemtime(get_template_directory() . '/assets/index.css')
    );
      wp_enqueue_script(
    'react-app',
    get_template_directory_uri() . '/assets/index.js',
    array(),
    filemtime(get_template_directory() . '/assets/index.js'),
    true
  );

    // GSAP CDN
   wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js', array(), null, true);
    wp_enqueue_script('my-custom-js', get_template_directory_uri() . '/js/custom.js', array('gsap'), null, true);

    // Hero animations script
    wp_enqueue_script(
        'hero-animations',
        get_template_directory_uri() . '/assets/hero.js',
        array('gsap'),
        filemtime(get_template_directory() . '/assets/hero.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'mrp_enqueue');


add_filter('script_loader_tag', function ($tag, $handle) {
  if ($handle === 'react-app') {
    return str_replace('<script ', '<script type="module" ', $tag);
  }
  return $tag;
}, 10, 2);
?>
