<?php get_header(); ?>
	
	<?php the_post(); ?>
	<?php 
		$indicate = get_the_terms($post->ID, 'indicate');
		$indicate_type = array_shift(array_values($indicate)); 
		$indic=($indicate_type->slug);
		
		
		
		
		
	
	?>

        
        <section id="header" class="category-desc entry">
			<div class="breadcrumbs">
				<div class="pos-center">              
                        <a href="<?php echo home_url() ?>">Strona główna</a>
                        <span></span>
						<?php $atr= get_post_meta($post->ID,'Partia ciala',true); 
							if($atr=='1'):?>
								<a href="#">Pielęgnacja skóry</a>
							<?php elseif($atr=='3'): ?>
								<a href="#">Pielęgnacja włosów</a>
							<?php endif; ?>
                        <span></span>
                        <?php the_title(); ?>
				</div>
			</div>

            <!--<div class="baner" style="background:  url('img/dex.png') 50% 50% no-repeat; "> -->                                                        
            <div class="baner" style="background: #ffffff; ">                                                         
                    <div class="main-baner">
                            <div class="pos-center">

							<div class="caption text">
							    <h3 style="text-shadow: 0px 0px 0px #00A0C6"><?php the_title(); ?></h3>
								<div class="skin-desc">
									<?php the_content(); ?>
									
								</div>
                              
							</div>
                        </div>
                    </div>
                       
            </div>
        </section>

        <section id="home" class="content">
            <section class="inspirations cosmetics-list">
                <div class="pos-center">
                    <header>
                        <h2>Produkty</h2>
                        <h4 class="empty-h4"> </h4>
                    </header>
                      
                    <div class="cosmetics-container">
					<?php
						$loop = new WP_Query(array(
								'post_type' => 'products',
								'tax_query' => array(
												array(
														'taxonomy' => 'indicate',
														'field' => 'slug',
														'terms' => $indic
													)
												)
									));
									
						if($loop->have_posts()) :
						
							while($loop->have_posts()) : $loop->the_post();
							
									$series = get_the_terms($post->ID, 'series');
									$product_series = array_shift(array_values($series)); 
									$seriesOfProduct=($product_series->slug);
					?>
					
                        <section class="cosmetics entry">
                            <div class="description">
								<div class="cosmetics-img">
									<!--<img src="content/dexyane_208.png" alt="" />-->
									<?php the_post_thumbnail('medium'); ?>
								</div>

                                <h2><a href="#" class="cosmetics-desc"><?php the_title() ?></a></h2>
								<h3><a href="#" class="cosmetics-desc"><?php echo get_post_meta($post->ID,'Nazwa rozszerzona',true); ?></a></h3>
                                    <ul>
                                        <li class=""><?php $type = get_the_terms($post->ID, 'type');
										$product_type = array_shift(array_values($type)); 
										$typeOfProduct=($product_type->name); 
										echo $typeOfProduct;  ?>
										</li>
                                        <li class=""><?php echo get_post_meta($post->ID,'Ilość',true); ?></li>
                                    </ul>
									<p><?php the_excerpt();?> </p>                               
                            </div>
							<a class="link-more" href="<?php the_permalink(); ?>" style="background: #<?php echo getColor($seriesOfProduct); ?>; border: 1px solid #<?php echo getColor($seriesOfProduct); ?>;">więcej</a>
                        </section>
							<?php endwhile; ?>
					
						<?php else: ?>
					
							<h4>Nie ma żadnych produktów</h4>
						
						<?php endif; ?>
						
						
						
						
						
						<!--<section class="cosmetics entry">
                            <div class="description">
								<div class="cosmetics-img">
									<img src="content/dexyane_208.png" alt="" />
								</div>
                                <h2><a href="#" class="cosmetics-desc">Dexyane</a></h2>
								<h3><a href="#" class="cosmetics-desc">Zmiękczający balsam</a></h3>
                                    <ul>
                                        <li class="">dermokosmetyk</li>
                                        <li class="">pojemność: 150ml</li>
                                    </ul>
									<p>Baume émollient anti-grattage qui aide à réparer intensément la barrière cutanée altérée, apaise les irritations et nourrit les peaux très sèches à tendance atopique. </p>
                               

                                
                            </div>
							<a class="link-more" href="#">więcej</a>
                        </section>-->
						
					
                    </div>
                </div>
            </section>

 <?php get_footer(); ?>