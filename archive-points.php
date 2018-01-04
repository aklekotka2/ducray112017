		<?php get_header(); ?>
        
         <section id="header" class="entry points-desc">
			<div class="breadcrumbs">
				<div class="pos-center">              
                        <a href="<?php echo home_url() ?>">Strona główna</a>
                        <span></span>
                        Punkty sprzedaży
				</div>
			</div>
			<!--<div id="map" class="map"></div>-->
			<?php $search = getQuerySingleParam('search'); ?>
            <section class="points">
                <div class="pos-center">
                    <form class="search-points" method="get" action="<?php echo home_url(); ?>/points">
                        <label for="search">Znajdź punkt sprzedaży:</label>
                        <fieldset>
                            <input type="text" name="search" id="search-point" value="<?php echo $search; ?>" placeholder="Wpisz województwo lub nazwę miejscowości"/>
                            <input type="submit" value="Szukaj" />
                        </fieldset>
                    </form>
                </div>
            </section>
        </section>

        <section id="home" class="content">
            <section class="inspirations points-list">
                <div class="pos-center">
				
                    <header>
                        <h2>Punkty sprzedaży</h2>
						<?php if(isset($search)): ?>
							<h4><?php echo $search; ?></h4>
							<?php else:  ?>
							<h4 class="empty-h4"> </h4>
						<?php endif; ?>
                    </header>
					
					<?php
						$query_params = getQueryParams();
						
							if(isset($query_params['search'])) {
								$query_params['post_title_like'] = $query_params['search'];
								unset($query_params['search']);
							}
							/*else{
								$query_params= array(
									'post_type'	=> 'points',
									'orderby'=> 'meta_value',
									'order'	=> 'DESC'
								);
							}*/
								
							
							$query_params['meta_key']='miasto';
							$query_params['orderby']='meta_value';
							$query_params['order']='ASC';
							//print_r ($query_params);
							

						$loop = new WP_Query($query_params);
						
					?>
                      
                    <div class="points-container">
					<?php if($loop->have_posts()): ?>
						<?php while($loop->have_posts()):$loop->the_post(); ?>
                        <section <?php post_class('entry point-desc '); ?>>
                            <!--<h2><?php //echo get_post_meta($post->ID,'nazwa',true); ?></h2>
							<h3>ul.<?php //echo get_post_meta($post->ID,'ulica',true);
							//echo ' ';
							//echo get_post_meta($post->ID,'numer',true); ?></h3>
							<h3><?php ///echo get_post_meta($post->ID,'kod',true); ?>  Warszawa</h3> -->  
							
							<!--<h2><?php //echo the_title(); ?></h2>-->
							<?php echo the_content(); ?>
							<!--<h3><?php //echo get_post_meta($post->ID,'kod',true); ?> --> 
							<?php //printPointsCategories($post->ID);?>
						</section>
					<?php endwhile; ?>	
					<?php else: ?>
						<h4>Nie znaleziono punktów sprzedaży</h4>					
						
						
					<?php endif; ?>
                    </div>
					
					<div class="pagination">
                        <?php generatePagination(get_query_var('paged'), $loop); ?>
                    </div>
					
					
                </div>
            </section>
						
						


        <?php get_footer(); ?>