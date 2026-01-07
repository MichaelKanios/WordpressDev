<?php 
$hero_title = get_field('hero_title');
$hero_name = get_field('hero_name');
$hero_desc = get_field('hero_desc');
$hero_image = get_field('hero_image'); // returns array with url, alt
?>

<section class="hero grid md:grid-cols-2 xl:grid-cols-2 text-center rounded-xl justify-items-center items-center mt-12 p-6">
  
  <div>
    <h1 class="text-5xl xl:text-6xl pb-2 font-fraun"><?php echo esc_html($hero_title); ?></h1>
    <h2 class="text-5xl xl:text-6xl text-rose-700 pb-4 font-fraun"><?php echo esc_html($hero_name); ?></h2>
    <p class="font-monts leading-loose"><?php echo esc_html($hero_desc); ?></p>
    
    <div class="py-10">
      <h2 class="pb-5 font-monts font-semibold">Download my curriculum vitae:</h2>
      <div class="flex justify-between">
        <a class="px-3 py-3 all_button" href="#contact">DOWNLOAD CV</a>
        <a href="#contact" class="px-6 py-3 all_button">CONTACT ME</a>
      </div>
    </div>
  </div>

  <div class="w-2/3 xl:w-3/4">
    <?php if ($hero_image): ?>
      <img src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>" class="drop-shadow-2xl rounded-full" />
    <?php endif; ?>
  </div>

</section>
