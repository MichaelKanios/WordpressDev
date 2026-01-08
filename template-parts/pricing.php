<?php
$pricing_title = get_field('pricing_title');
$pricing_cards = [
    [
        'name' => get_field('pricing_card1_name'),
        'price' => get_field('pricing_card1_price'),
    ],
    [
        'name' => get_field('pricing_card2_name'),
        'price' => get_field('pricing_card2_price'),
    ],
    [
        'name' => get_field('pricing_card3_name'),
        'price' => get_field('pricing_card3_price'),
    ],
];
?>

<section
    id="hybrid-react"
    data-props='<?php echo json_encode([
        "title" => $pricing_title,
        "cards" => $pricing_cards
    ]); ?>'
    class="my-20"
></section>
