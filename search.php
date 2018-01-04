<?php
/*

	Template Name: Search

*/
?>

<?php get_header(); ?>

        <?php $search = getQuerySingleParam('search'); ?>
        <section id="header" class="category-desc entry">
			<div class="breadcrumbs">
				<div class="pos-center">              
                        <a href="<?php echo home_url() ?>">Strona główna</a>
                        <span></span>
                        Wyszukiwanie: <?php echo $search; ?>
				</div>
			</div>

            <div class="baner-brand search-info">                                                         
                    <div class="main-baner">
                        <div class="pos-center">
						<?php 
						
						
						$params = array(        
							'post_type' => array('products', 'post'),
							's' => $search
							);
						//if ( have_posts() ) {
							//while ( have_posts() ) {
								//the_post(); 
								$loop = new WP_Query($params);
								if($loop->have_posts()){
						
							while($loop->have_posts()) { $loop->the_post();
							
							?>

							<div class="caption text">
							    <h4 style="text-shadow: 0px 0px 0px #00A0C6"><?php the_title(); ?></h4>
								<div class="search-desc">
								
								<?php if(has_category( 'nagrody', $post->ID )): ?>


										<?php the_post_thumbnail(); ?>
									<?php else: ?>
										<?php the_post_thumbnail(array(80,160)); ?>
									<?php endif; ?>
									<?php the_excerpt(); ?>
									<a href="<?php the_permalink(); ?>"> więcej </a>

								</div>							
							</div>
							<?php 
									} 
								}
							else{
								?>
								<h4>Nie znaleziono postów spełniających kryteria wyszukiwania.</h4>
							<?php	
								}
							 
							?>
							
						</div>
					</div>
					
					
					
            </div>
        </section>
		

        <section id="home" class="content content-story">

 <?php get_footer(); ?>