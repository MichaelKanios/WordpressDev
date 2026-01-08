<?php
$title = get_field('pricing_title');
$cards = get_field('pricing_cards');
?>

<section
  id="pricing-react"
  data-props='<?php echo json_encode([
    "title" => $title,
    "cards" => $cards
  ]); ?>'
  class="my-24"
>
  <!-- React κάνει mount εδώ μέσω JS -->
</section>
