<?php
$title = get_field('pricing_title'); // ACF free
?>

<section
    id="hybrid-react"
    data-props='<?php echo json_encode([
        "title" => $title,
    ]); ?>'
    class="my-20"
>
    <!-- React θα κάνει mount εδώ -->
</section>
