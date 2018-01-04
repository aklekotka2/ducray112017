<?php get_header(); ?>
	
	<?php the_post();
			$seriesOfProduct='';
			$series = get_the_terms($post->ID, 'series');
			$product_series = array_shift(array_values($series)); 
			$seriesOfProduct=($product_series->slug);	
			$seriesOfProductName=($product_series->name);	


			$indicate = get_the_terms($post->ID, 'indicate');
			$indicate_type = array_shift(array_values($indicate)); 
			$indicName=($indicate_type->name);
			$indicSlug=($indicate_type->slug);
	?>


        <section id="home" class="content-single">
			<div class="breadcrumbs">
				<div class="pos-center">              
                        <a href="<?php echo home_url() ?>">Strona główna</a>
                        <span></span>
                        <a href="<?php echo home_url() ?>/descs/<?php echo $indicSlug; ?>">
						<?php $atr= get_post_meta($post->ID,'Partia ciala',true); 
							if(($atr=='1')||($atr=='2')):?>
								Pielęgnacja skóry</a>
							<?php elseif($atr=='3'): ?>
								Pielęgnacja włosów</a>
							<?php endif; ?>                        
						<span></span>
                        <a href="<?php echo home_url() ?>/descs/<?php echo $indicSlug; ?>"><?php echo $indicName; ?></a>
                        <span></span>
                        <?php echo $seriesOfProductName; ?>
				</div>
			</div>
            <div class="cosmetic-single">
                <div class="pos-center">                     
                    <div class="cosmetic-single-container">
						<div class="cosmetic-single-img left <?php echo $seriesOfProduct; ?>" >
							<div style="position: relative; ">
								<?php if ( has_post_thumbnail() ) : ?>
									<svg style="position: absolute; bottom: 10px; left: calc( 50% - 135px );" version="1.1" id="Layer_1" xmlns="&ns_svg;" xmlns:xlink="&ns_xlink;" width="269.9" height="244" viewBox="0 0 269.9 244"
											 style="overflow:visible;enable-background:new 0 0 269.9 244;" xml:space="preserve">
										<style type="text/css">
										<![CDATA[
											.left.st0{fill:red;}
											.st1{fill:#FFFFFF;}
										]]>
										</style>
										<path class="st0" d="M51,192.6c-33.3-36.2-26.1-76.8-26.1-76.8s-34.1,19.6-22.5,55.1S129.2,244,129.2,244S84.3,228.8,51,192.6z"/>
										<path class="st0" d="M215.5,41.3l13,97.1c0,0,31.8-11.7,40.6-44.9C282.1,34.8,140.8,0,140.8,0L215.5,41.3z"/>
										<path class="st1" d="M248.1,120.5c0,61.8-50.1,112-112,112c-61.8,0-112-50.1-112-112c0-61.8,50.1-112,112-112
											C197.9,8.5,248.1,58.6,248.1,120.5z"/>
									</svg>
									<?php the_post_thumbnail(); ?>
								<?php endif; ?>
							</div>
						</div>
                        <div class="description-single right">						
							<section class="cosmetic-single-desc entry">
								<h2><?php the_title(); ?></h2>
                                <h3><?php echo get_post_meta($post->ID,'Nazwa rozszerzona',true); ?></h3>
                                
                                    <ul>
										<li class=""><?php echo get_post_meta($post->ID,'Ilość',true); ?></li>
                                        <li class="" style="border-top: 1px solid #<?php echo getColor($seriesOfProduct); ?>; border-bottom: 1px solid #<?php echo getColor($seriesOfProduct); ?>; padding-right: 3px; padding-left: 3px;"><?php $type = get_the_terms($post->ID, 'type');
										$product_type = array_shift(array_values($type)); 
										$typeOfProduct=($product_type->name); 
										echo $typeOfProduct;  ?></li>
                                        
                                    </ul>
									<ul class="cosmetic-menu">
                                        <li  title="wlasciwosci" class="<?php echo $seriesOfProduct; ?>">Właściwości</li>
                                        <li title="sklad" class="<?php echo $seriesOfProduct; ?>">Skład</li>
                                        <li class="active <?php echo $seriesOfProduct; ?>" title="wskazania">Wskazania</li>
                                    </ul>
									<section id="wskazania" class="cosmetic-info visible">
										<?php the_content(); ?>
									</section>
									<section id="sklad" class="cosmetic-info">
										<?php echo get_post_meta($post->ID,'Skład',true); ?>
									</section>
									<section id="wlasciwosci" class="cosmetic-info ">
										<?php echo get_post_meta($post->ID,'Właściwości',true); ?>
									</section>
                               
                               

							</section>
						</div>											
                    </div>
                </div>
            </div>
			<section class="application" style="background: #<?php echo getColor($seriesOfProduct); ?>">
				<div class="pos-center"> 
					<h2>Sposób użycia</h2>
					<?php //$atr= get_post_meta($post->ID,'Partia ciala',true); ?>
					<img src="<?php echo DUCRAY_THEME_URL; ?>img/<?php echo getImageApplicatiom($atr);?>" atl="Aplikacja" />
					<p><?php echo get_post_meta($post->ID,'Sposób użycia',true); ?></p>
				</div>
			</section>
			<section class="cosmetic-single-other inspirations others">
              <div class="pos-center">
                    <header class="<?php echo $seriesOfProduct; ?>" >
                        <h2><?php echo $indicName; ?></h2>
                        <h4>Zobacz pozostałe produkty</h4>
                    </header>

                    <div class="slider">
						
                        <a class="prev" href="#">&LeftArrow;</a>
                        <div class="slides-container">
 
                           <div class="items">
						   	<?php
								$loop = new WP_Query(array(
										'post_type' => 'products',
										'tax_query' => array(
														array(
																'taxonomy' => 'indicate',
																'field' => 'slug',
																'terms' => $indicSlug
															)
														)
											));
											
								if($loop->have_posts()) :
								
									while($loop->have_posts()) : $loop->the_post();
									
											$series = get_the_terms($post->ID, 'series');
											$product_series = array_shift(array_values($series)); 
											$seriesOfProduct=($product_series->slug);
							?>
							
                                <div>
                                    <a href="#"><?php the_post_thumbnail(array(95,190)); ?></a>
                                    <h2><a href="#"><?php the_title() ?></a></h2> 
									<p><a href="#"><?php echo get_post_meta($post->ID,'Nazwa rozszerzona',true); ?></a></p>
									<p><a href="#"><?php $type = get_the_terms($post->ID, 'type');
										$product_type = array_shift(array_values($type)); 
										$typeOfProduct=($product_type->name); 
										echo $typeOfProduct;  ?></a></p>
									<!--<a href="" class="more">zobacz</a>-->
									
                                </div>
									<?php endwhile; ?>
					
								<?php else: ?>
					
									<h4>Nie ma żadnych produktów</h4>
						
								<?php endif; ?>
						


                               

                            </div>
                        </div>
                        <a class="next" href="#">&RightArrow;</a>
                    </div>

                </div>			
			
			
			</section>

<?php get_footer(); ?>