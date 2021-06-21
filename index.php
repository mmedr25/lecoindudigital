<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>le coin du digital</title>
</head>
<body>
<!-- ////////////////////////////// test ////////////////////////////////////-->
 <?php

    function ere_get_template() {}

    function esc_html_e() {}

    function wp_reset_post() {}

    function do_action() {}

    class Lecoin
    {
            
        public $max_num_pages = 0;

        public function have_posts () {}

        public function the_posts () {}
    }
    
    $data = new lecoin();
?>

<div class="<?php echo join( ' ', $wrapper_classes ) ?>">
            <?php if ( $data->have_posts() ) :
                while ( $data->have_posts() ): $data->the_posts(); ?>

                    <?php ere_get_template(array(
                        'custom_property_image_size' => $custom_property_image_size,
                        'property_item_class' => $property_item_class
                    )); ?>
    
                <?php endwhile; 
            else: ?>
                <div class="item-not-found">
                <?php esc_html_e( 'Aucun élément trouvé', 'essential-real-estate' ); ?>
                </div>
            <?php endif; ?>
            <div class="clearfix"></div>
            <?php
            $max_num_pages = $data->max_num_pages;
            ere_get_template(array( 'max_num_pages' => $max_num_pages ) );
            wp_reset_post(); ?>
        </div>
    </div>
    <?php do_action('ere_advanced_search_after_main_content'); ?>
     <div class="honoraires">
        <button>CONSULTER NOTRE BARÈME D’HONORAIRES</button>
     </div>

<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
</body>
</html>
