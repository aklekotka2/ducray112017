<?php 

    add_action('init', 'ducray_init_posttypes');
    
    function ducray_init_posttypes(){
        
        
        /*
         * Register Products Post Type
         */
        $products_args = array(
            'labels' => array(
                'name' => 'Produkty',
                'singular_name' => 'Produkty',
                'all_items' => 'Wszystkie produkty',
                'add_new' => 'Dodaj nowy produkt',
                'add_new_item' => 'Dodaj nowy produkt',
                'edit_item' => 'Edytuj produkt',
                'new_item' => 'Nowy produkt',
                'view_item' => 'Zobacz produkt',
                'search_items' => 'Szukaj w produktach',
                'not_found' =>  'Nie znaleziono żadnych produktów',
                'not_found_in_trash' => 'Nie znaleziono żadnych produktów w koszu', 
                'parent_item_colon' => ''
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true, 
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => 5,
            'supports' => array(
                'title','editor','author','thumbnail','excerpt','comments','custom-fields'
            ),
            'has_archive' => true            
        );
        
        register_post_type('products', $products_args);
		
		
		 /*
         * Register Descs Post Type
         */
        $descs_args = array(
            'labels' => array(
                'name' => 'Opisy problemów skórnych',
                'singular_name' => 'Opisy problemów',
                'all_items' => 'Wszystkie opisy',
                'add_new' => 'Dodaj nowy opis',
                'add_new_item' => 'Dodaj nowy opis',
                'edit_item' => 'Edytuj opis',
                'new_item' => 'Nowy opis',
                'view_item' => 'Zobacz opis',
                'search_items' => 'Szukaj w opisach',
                'not_found' =>  'Nie znaleziono żadnych opisów',
                'not_found_in_trash' => 'Nie znaleziono żadnych opisów w koszu', 
                'parent_item_colon' => ''
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true, 
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => 5,
            'supports' => array(
                'title','editor','author','thumbnail','custom-fields'
            ),
            'has_archive' => true            
        );
        
        register_post_type('descs', $descs_args);
        
        
        
        
        /*
         * Register Points Post Type
         */
        $points_args = array(
            'labels' => array(
                'name' => 'Punkty sprzedaży',
                'singular_name' => 'Punkty sprzedaży',
                'all_items' => 'Wszystkie punkty',
                'add_new' => 'Dodaj nowy punkt',
                'add_new_item' => 'Dodaj nowy punkt',
                'edit_item' => 'Edytuj rpunkt sprzedaży',
                'new_item' => 'Nowy punkt sprzedaży',
                'view_item' => 'Zobacz punkt sprzedaży',
                'search_items' => 'Szukaj punktów sprzedaży',
                'not_found' =>  'Nie znaleziono żadnych punktów sprzedaży',
                'not_found_in_trash' => 'Nie znaleziono żadnych punktów sprzedaży w koszu', 
                'parent_item_colon' => ''
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true, 
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => 5,
            'supports' => array(
                'title','editor','author','custom-fields'
            ),
            'has_archive' => true
            
        );
        
        register_post_type('points', $points_args); 
        
	}
	
	
    add_action('init', 'ducray_init_taxonomies');
    
    /* rejestruje taksonomie*/
    
    function ducray_init_taxonomies(){
        
        // Typ produktu: kosmetyk, wyrób medyczny, suplement diety
        register_taxonomy(
            'type',
            array('products'),
            array(
                'hierarchical' => true,
                'labels' => array(
                    'name' => 'Typ produktu',
                    'singular_name' => 'Typ produktu',
                    'search_items' =>  'Wyszukaj typ produktu',
                    'popular_items' => 'Najpopularniejszy typ produktu',
                    'all_items' => 'Wszystkie typy produktów',
                    'most_used_items' => null,
                    'parent_item' => null,
                    'parent_item_colon' => null,
                    'edit_item' => 'Edytuj typ produktu', 
                    'update_item' => 'Aktualizuj typ produktu',
                    'add_new_item' => 'Dodaj nowy typ produktu',
                    'new_item_name' => 'Nazwa nowego typu produktu',
                    'separate_items_with_commas' => 'Oddziel typy produktu przecinkiem',
                    'add_or_remove_items' => 'Dodaj lub usuń typy produktu',
                    'choose_from_most_used' => 'Wybierz spośród najczęścież używanych typów produktu',
                    'menu_name' => 'Typy produktu',
                ),
                'show_ui' => true,
                'update_count_callback' => '_update_post_term_count',
                'query_var' => true,
                'rewrite' => array('slug' => 'type' )
        ));
        
        
     
        
        // Adresy
        register_taxonomy(
            'place',
            array('points'),
            array(
                'hierarchical' => true,
                'labels' => array(
                    'name' => 'Adres ( województwo, miasto )',
                    'singular_name' => 'Adres ( województwo, miasto )',
                    'search_items' =>  'Wyszukaj adres ( województwo, miasto )',
                    'popular_items' => 'Najpopularniejsze adresy ( województwo, miasto)',
                    'all_items' => 'Wszystkie adres ( województwo, miasto)',
                    'most_used_items' => null,
                    'parent_item' => null,
                    'parent_item_colon' => null,
                    'edit_item' => 'Edytuj adres ( województwo, miasto)', 
                    'update_item' => 'Aktualizuj adres ( województwo, miasto)',
                    'add_new_item' => 'Dodaj nowy adres ( województwo, miasto)',
                    'new_item_name' => 'Nazwa nowego adres ( województwo, miasto)',
                    'separate_items_with_commas' => 'Oddziel rodzaje adresy przecinkiem',
                    'add_or_remove_items' => 'Dodaj lub usuń adres ( województwo, miasto)',
                    'choose_from_most_used' => 'Wybierz spośród najczęściej używanych adresów ( województwo, miasto)',
                    'menu_name' => 'Adres ( województwo, miasto)',
                ),
                'show_ui' => true,
                'update_count_callback' => '_update_post_term_count',
                'query_var' => true,
                'rewrite' => array('slug' => 'place' )
        ));
        
        
        // Seria produktu
        register_taxonomy(
            'series',
            array('products','descs'),
            array(
                'hierarchical' => FALSE,
                'labels' => array(
                    'name' => 'Seria produktu',
                    'singular_name' => 'Seria produktu',
                    'search_items' =>  'Wyszukaj serię produktu',
                    'popular_items' => 'Najpopularniejsze serie',
                    'all_items' => 'Wszystkie serie',
                    'most_used_items' => null,
                    'parent_item' => null,
                    'parent_item_colon' => null,
                    'edit_item' => 'Edytuj serię produktu', 
                    'update_item' => 'Aktualizuj',
                    'add_new_item' => 'Dodaj nową serię produktu',
                    'new_item_name' => 'Nazwa serii produktu',
                    'separate_items_with_commas' => 'Oddziel serie przecinkiem',
                    'add_or_remove_items' => 'Dodaj lub usuń serię',
                    'choose_from_most_used' => 'Wybierz spośród najczęściej używanych serii',
                    'menu_name' => 'Seria produktu',
                ),
                'show_ui' => true,
                'update_count_callback' => '_update_post_term_count',
                'query_var' => true,
                'rewrite' => array('slug' => 'series' )
        ));        
		
		// Wskazania, rodzaj problemu
        register_taxonomy(
            'indicate',
            array('products','descs','posts'),
            array(
                'hierarchical' => FALSE,
                'labels' => array(
                    'name' => 'Wskazania',
                    'singular_name' => 'Wskazania',
                    'search_items' =>  'Wyszukaj wskazania',
                    'popular_items' => 'Najpopularniejsze wskazania',
                    'all_items' => 'Wszystkie wskazania',
                    'most_used_items' => null,
                    'parent_item' => null,
                    'parent_item_colon' => null,
                    'edit_item' => 'Edytuj wskazania', 
                    'update_item' => 'Aktualizuj',
                    'add_new_item' => 'Dodaj nowe wskazania',
                    'new_item_name' => 'Nazwa wskazań',
                    'separate_items_with_commas' => 'Oddziel wskazania przecinkiem',
                    'add_or_remove_items' => 'Dodaj lub usuń wskazania',
                    'choose_from_most_used' => 'Wybierz spośród najczęściej używanych wskazań',
                    'menu_name' => 'Wskazania',
                ),
                'show_ui' => true,
                'update_count_callback' => '_update_post_term_count',
                'query_var' => true,
                'rewrite' => array('slug' => 'indicate' )
        ));
		
		unregister_taxonomy( 'problem' );
        
    }   
    
     add_action('admin_head', 'duc_admin_icons');
    function duc_admin_icons(){
        $ICON_URL = DUCRAY_THEME_URL.'img/admin/';
        
        ?>
<style>
    /* po to żeby w panelu admina zmienić domyślne ikonki custom post types*//* dla menu */
	
    #menu-posts-products .wp-menu-image,
    #menu-posts-points .wp-menu-image,
    
    #menu-posts-products:hover .wp-menu-image,
    #menu-posts-points:hover .wp-menu-image,
    #menu-posts-products.wp-has-current-submenu .wp-menu-image,
    #menu-posts-points.wp-has-current-submenu .wp-menu-image{
        background-repeat: no-repeat;
        background-position: center 6px!important;
		transform: scale(.7);
    }
    
    #menu-posts-products .wp-menu-image{
        background-image: url('<?php echo $ICON_URL.'krem.png' ?>');
    }
    
    #menu-posts-points .wp-menu-image{
        background-image: url('<?php echo $ICON_URL.'sign.png' ?>');
    }
    
    
    
    .icon32-posts-products,
    .icon32-posts-points{
        background-position: center center!important;
    }
	
    /* dla posdtronyu*/
    .icon32-posts-products{
        background-image: url('<?php echo $ICON_URL.'krem.png' ?>')!important;
    }
    
    .icon32-posts-points{
        background-image: url('<?php echo $ICON_URL.'sign.png' ?>')!important;
    }
    
 
    
</style>
        <?php
    }

    


?>
