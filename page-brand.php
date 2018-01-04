<?php
/*

	Template Name: Marka

*/
?>

<?php get_header(); ?>
        
        <section id="header" class="category-desc entry">
			<div class="breadcrumbs">
				<div class="pos-center">              
                        <a href="<?php echo home_url() ?>">Strona główna</a>
                        <span></span>
                        Marka
				</div>
			</div>

            <div class="baner-brand">                                                         
                    <div class="main-baner">
                        <div class="pos-center">
						<?php
						$loop = new WP_Query(array(
								'post_type' => 'post',
								'tax_query' => array(
												array(
														'taxonomy' => 'category',
														'field' => 'slug',
														'terms' => 'info'
													)
												)
									));
									
						if($loop->have_posts()) :
						
							 $loop->the_post();
					?>
					

							<div class="caption text">
							    <h3 style="text-shadow: 0px 0px 0px #00A0C6"><?php the_title(); ?></h3>
								<div class="brand-desc">
									<?php 
										the_content();
									?>
								</div>
								<div class="brand-img">
									<img src="<?php echo DUCRAY_THEME_URL; ?>content/brand3.jpg" />
								</div>
							</div>
							<?php else: ?>
					
							<h4>Nie ma żadnych informacji</h4>
						
						<?php endif; ?>
							<img src="<?php echo DUCRAY_THEME_URL; ?>img/line2.png" id="brand-img-line"/>
						</div>
						<!--<img src="img/line.png" id="brand-img-line"/>-->
					</div>
					<div class="main-brand-story">
						<div class="pos-center">
							<div class="brand-story">
								<?php
									$loop = new WP_Query(array(
											'post_type' => 'post',
											'tax_query' => array(
															array(
																	'taxonomy' => 'category',
																	'field' => 'slug',
																	'terms' => 'nowe-produkty'
																)
															)
												));
												
									if($loop->have_posts()) :
									
										 $loop->the_post();
								?>							
								<?php the_content(); ?>
							</div> 
							<?php else: ?>
					
							<h4>Nie ma żadnych informacji</h4>
						
						<?php endif; ?>							
                        </div>
						
                    </div>
					<div class="main-eco">
						<div class="pos-center">
								<?php
									$loop = new WP_Query(array(
											'post_type' => 'post',
											'tax_query' => array(
															array(
																	'taxonomy' => 'category',
																	'field' => 'slug',
																	'terms' => 'srodowisko'
																)
															)
												));
												
									if($loop->have_posts()) :
									
										 $loop->the_post();
								?>
								
									<h3><?php the_title(); ?></h3>

								<?php the_content(); ?>
							 
							<?php else: ?>
					
							<h4>Nie ma żadnych informacji</h4>
						
						<?php endif; ?>	
						</div>
					</div>
					
            </div>
        </section>
		

        <section id="home" class="content content-story">
            <section class="inspirations">
                <div class="pos-center">
				<?php
									$loop = new WP_Query(array(
											'post_type' => 'post',
											'tax_query' => array(
															array(
																	'taxonomy' => 'category',
																	'field' => 'slug',
																	'terms' => 'historia'
																)
															)
												));
												
									if($loop->have_posts()) :
									
										 $loop->the_post();
								?>
					<header>
                        <h2><?php the_title(); ?></h2>
                        <h4 class="empty-h4"> </h4>
                    </header>
						<?php the_content(); ?>
                   <!--<iframe width="100%" height="100%" src="https://www.youtube.com/embed/Cb6Iwa4Zj2I" frameborder="0" allowfullscreen></iframe>-->

							 
							<?php else: ?>
					
							<h4>Nie ma żadnych informacji</h4>
						
						<?php endif; ?>	

                </div>
            </section>

 <?php get_footer(); ?>