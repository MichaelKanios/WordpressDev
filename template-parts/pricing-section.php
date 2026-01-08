<?php
$cards = [
    [
        'title' => get_field('pricing_card1_title'),
        'price' => get_field('pricing_card1_price'),
        'description' => get_field('pricing_card1_description'),
    ],
    [
        'title' => get_field('pricing_card2_title'),
        'price' => get_field('pricing_card2_price'),
        'description' => get_field('pricing_card2_description'),
    ],
    [
        'title' => get_field('pricing_card3_title'),
        'price' => get_field('pricing_card3_price'),
        'description' => get_field('pricing_card3_description'),
    ],
];
?>

<section
  id="pricing-react"
  data-props='<?php echo json_encode($cards); ?>'
  class="my-20"
>
  <!-- React θα κάνει mount εδώ -->
</section>
