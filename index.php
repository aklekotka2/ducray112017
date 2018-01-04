<?php
	get_header();
?>
        
        <section id="header" class="main-news home-slider">

            <div class="baner">
                                   
                <div class="slides">

                    <div class="item main-baner keracnyl" >
                        <div class="pos-center inn">
							<div class="main-baner-desc">
								<div class="caption img">
									<h3><img src="<?php echo DUCRAY_THEME_URL; ?>content/baner/keracnyl-PP-logo.png" /> </h3>
									
									<!--<div class="keracnyl-img"> 
									  <img src="content/baner/keracnyl-250.png" alt="" />
									</div>-->
									
									<div class="keracnyl-info">								
										<p class="subtitle">KREM KOJĄCY PRZECIW NIEDOSKONAŁOŚCIOM</p>
										<!--<p class="info">
										Koi i redukuje zmiany trądzikowe oraz niedoskonałości
										</p>-->
										<p class="info-skutecznosc"><span>Skuteczny już po <b>7</b> dniach stosowania<sup>*</sup></span>
										<img class="myrtacine "src="<?php echo DUCRAY_THEME_URL; ?>content/baner/myrtacine1.png" /></p>
									</div>
									<p class="more">
										<a href="<?php echo home_url() ?>/products/keracnyl-pp/">więcej</a>
									</p>
									
									
									<p class="add">* Badanie kliniczne przeprowadzone u 20 osób. Aplikacja 2 razy dziennie przez 28 dni.</p>
									
								</div>
							</div>
                        </div>
                    </div>

                    <div class="item main-baner dexyane" >
                        <div class="pos-center inn">
							<div class="main-baner-desc">

								<div class="caption img">
									<h3 class="pink"><img src="<?php echo DUCRAY_THEME_URL; ?>content/baner/dexyanemed-logo.png" /><br /> WYRÓB MEDYCZNY DO LECZENIA:<br /> egzemy atopowej, kontaktowej i przewlekłej egzemy skóry dłoni</h3>
									<img src="<?php echo DUCRAY_THEME_URL; ?>content/baner/dexyane-med-250.png" alt="" />
									
									<p>
										<!--<span>NOWOŚĆ</span>-->
										<a href="<?php echo home_url() ?>/products/dexyane-med/" style="background: #02a6d9;">więcej</a>
									</p>
								</div>
							</div>
                        </div>
                    </div>

                    <div class="item main-baner anaphase" >
                        <div class="pos-center inn">
							<div class="main-baner-desc">
								<div class="caption img">
									<!--<h3>ZADBAJ O ZDROWE I MOCNE WŁOSY!</h3>-->
									<h3>Podstawowe oraz uzupełniające postępowanie w WYPADANIU WŁOSÓW</h3>
									 <img src="<?php echo DUCRAY_THEME_URL; ?>content/baner/anacaps-progresiv.png" alt="" />
									
									<p>
										<!--<img src="content/baner/anaphase-szampon-logo.png" /><br />
										<span>NOWOŚĆ</span>-->
										
										<a href="<?php echo home_url() ?>/descs/wypadanie-wlosow/" style="background: #f1581e;">więcej</a>
									</p>
								</div>
							</div>
                        </div>
                    </div>

                    <div class="item main-baner melascreen">
                        <div class="pos-center inn">
							<div class="main-baner-desc">
								<div class="caption img">
									<h3 style="color: #8f7043;"><img src="<?php echo DUCRAY_THEME_URL; ?>content/baner/melascreen-logo2.png" /><br />PODWÓJNE DZIAŁANIE PRZECIW PRZEBARWIENIOM, PRZECIW STARZENIU</h3>
									 <img src="<?php echo DUCRAY_THEME_URL; ?>content/baner/melascreen.png" alt="" />
								
									<p>
										<b class="navy">UZNANIE W ŚWIECIE DERMATOLOGII</b>
										<a href="<?php echo home_url() ?>/products/melascreen-2/" style="background: #8f7043;">więcej</a>
									</p>
								</div>
							</div>
                        </div>
                    </div>
					 <div class="item main-baner extradoux">
                        <div class="pos-center inn">
							<div class="main-baner-desc">
								<div class="caption img">
									<h3><img src="<?php echo DUCRAY_THEME_URL; ?>content/baner/extradoux-logo.png" /> Szampon dermatologiczny</h3>
									 <img src="<?php echo DUCRAY_THEME_URL; ?>content/baner/ultradoux-szampon.png" alt="" />
									<p>
										CODZIENNA PIELĘGNACJA WŁOSÓW DELIKATNYCH <b>DLA CAŁEJ RODZINY</b>
										<a href="<?php echo home_url() ?>/products/extra-doux/" style="background: #269a44;">więcej</a>
									</p>
								</div>
							</div>
                        </div>
                    </div>
					
                </div>
				

                    <div class="pagination">
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="active"><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
                        </ul>
                    </div>
               
            </div>

            <section class="caption quote">
                <div class="pos-center">
                    <blockquote>
                        <p>Użyteczna innowacyjność od 1939 roku</p>
                    </blockquote>
                </div>
            </section>

            <!--<div class="gradient">
                <div class="pos-center">&nbsp;</div>
            </div>-->
        </section>

        <section id="home" class="content">
            <section class=" bestsellers">
                <div class="pos-center">
                    <header class="month-product">
                        <h2>Produkt miesiąca</h2>
                        <h4 class="empty-h4"> </h4>
                    </header>

                    <div class="slider">
                        
                        <div class="slides-container">
                            <div class="items">
							
							<?php
								$sticky_posts = new WP_Query(array(
									'post_type' => 'products',
									'post__in'  => get_option('sticky_posts')
								));
							?>
				
                 
							<?php while($sticky_posts->have_posts()) : $sticky_posts->the_post(); ?>
								<div> 
									<?php 
										$seriesOfProduct='';
										$series = get_the_terms($post->ID, 'series');
										$product_series = array_shift(array_values($series)); 
										$seriesOfProduct=($product_series->slug);
									?>
									<div class="slide-img <?php echo $seriesOfProduct; ?>">									
										<a href="<?php the_permalink(); ?>">
										<svg style="position: absolute; bottom: 30px; left: calc( 50% - 95px ); z-index: 1;" version="1.1" id="Layer_1" xmlns="&ns_svg;" xmlns:xlink="&ns_xlink;" width="189" height="171" viewBox="0 0 269.9 244"
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
										<?php //the_post_thumbnail(array(100, 250)); ?>
										<?php the_post_thumbnail('medium'); ?>
										</a>
									</div>
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
										
									<h3><a href="<?php the_permalink(); ?>"><?php echo get_post_meta($post->ID, 'Nazwa rozszerzona', true); ?></a></h3>                 
									<p><a href="<?php the_permalink(); ?>"><?php $type = get_the_terms($post->ID, 'type');
										$product_type = array_shift(array_values($type)); 
										$typeOfProduct=($product_type->name); 
										echo $typeOfProduct;  ?></a></p>
									
									
								</div>
							<?php endwhile; ?>
					  
                

                            </div>
                        </div>
                        
                    </div>

                </div>
            </section>

            <section class="boxes">
                <div class="pos-center">

                    <section class="box first">
                        <div class="step1">
							<div class="step1-desc">
                            <!--<h2><img src="img/ducray-logo-b1.png" alt="" /></h2>-->
								<p>Użyteczna innowacyjność od 1930 roku.</p>
								<p>Wszystkie produkty marki DUCRAY są opracowane i produkowane zgodnie z Kartą rozwoju i bezpieczeństwa. Niniejsza karta stanowi gwarancję dla lekarzy, farmaceutów oraz konsumentów, że produkty są skuteczne i dobrze tolerowane, a ich wysoka jakość jest niezmienna. </p>
							</div>
							<div class="facebook">
								<h2>Dołącz do nas</h2>
								<!--<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDucrayPolska%2F&tabs&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=287377751376603" width="340" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>-->
								
								<div class="fb-page" 
								  data-href="https://www.facebook.com/DucrayPolska/"
								  data-width="340" 
								  data-hide-cover="false"
								  data-show-facepile="false">
								</div>
							</div>
                        </div>
                    </section>

                    <section class="box second">
                        <div class="step1">
                            <img src="<?php echo DUCRAY_THEME_URL; ?>/content/ducray1.jpg" alt="" />
                        </div>
                        <div class="step2 hidden">
                            <h2>Jakość</h2>
                            <p>Składniki aktywne produktów DUCRAY są selekcjonowane przy współpracy naukowców, na podstawie głębokich analiz fizjologicznych i biologicznych mechanizmów ich działania. Skład produktów opracowany jest przez Centrum Badan Pierre Fabre* lub na podstawie wyjątkowo rygorystycznych badan laboratoryjnych: in vitro, ex vivo, skin model tests etc.</p>
                        </div>
                    </section>

                    <section class="box third">
                        <div class="step1">
                            <img src="<?php echo DUCRAY_THEME_URL; ?>/content/ducray2.jpg" alt="" />
                        </div>
                        <div class="step2 hidden">
                            <h2>Bezpieczeństwo</h2>
                           <p>Tolerancja naszych preparatów jest nieustannie oceniana na całym świecie dzięki stałemu i systematycznemu monitorowaniu bezpieczeństwa kosmetyków stosowanych u ludzi, zgodnie z obowiązującym rozporządzeniem Parlamentu Europejskiego i Rady Wspólnoty Europejskiej. </p>
                        </div>
                    </section>

                </div>
            </section>         

            <section class="inspirations news">
                <div class="pos-center">
                    <header>
                        <h2>Nagrody</h2>
                        <h4 class="empty-h4"> </h4>
                    </header>

                    <div class="slider">
                        <a class="prev" href="#">&LeftArrow;</a>
                        <div class="slides-container">
                            <div class="items">
							<?php $query = new WP_Query( 'cat=32' ); ?>
							<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                                <div>
                                    <?php the_post_thumbnail(); ?>
                                    <h2><?php the_title(); ?></h2>
                                   
                                    
                                </div>

								<?php endwhile; 
								wp_reset_postdata();
								else : ?>
								<p><?php esc_html_e( 'Brak informacji do wyświetlenia' ); ?></p>
							<?php endif; ?>

                            </div>
                        </div>
                        <a class="next" href="#">&RightArrow;</a>
                    </div>

                </div>
            </section>
        </section>
		<?php get_footer('home'); ?>