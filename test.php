Voici la partie de code. Pouvez-vous :

-	Ajouter le lien au bouton qui redirige vers la page « Honoraires »
-	Stylisez le bouton avec jquery et avec css : couleur du fond doit être noir et blanc au passage de souris, couleur du texte doit être bleu et jaune au passage de souris 
-	Trouver les erreurs et modifiez ce code correctement


   
Voici la partie de code. Pouvez-vous :

-	Ajouter le lien au bouton qui redirige vers la page « Honoraires »
-	Stylisez le bouton avec jquery et avec css : couleur du fond doit être noir et blanc au passage de souris, couleur du texte doit être bleu et jaune au passage de souris 
-	Trouver les erreurs et modifiez ce code correctement

<?php
       <div class="<?php echo join( ' ', $wrapper_classes ) ?>">
            <?php if ( $data->have_posts() ) :
                while ( $data->have_posts() ): $data->the_posts(); ?>

                    <?php ere_get_template(array(
                        'custom_property_image_size' => $custom_property_image_size,
                        'property_item_class' => $property_item_class
                    )); ?>
    
                <?php endwhile; 
            else: ?>
                <div class="item-not-found"><?php esc_html_e( 'Aucun élément trouvé', 'essential-real-estate' ); ></div>
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
?>
