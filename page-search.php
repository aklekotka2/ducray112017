<?php
/*

	Template Name: Search

*/
?>

<?php get_header(); ?>

        
        <section id="header" class="category-desc entry">
			<div class="breadcrumbs">
				<div class="pos-center">              
                        <a href="<?php echo home_url() ?>">Strona główna</a>
                        <span></span>
                        Wyszukiwanie
				</div>
			</div>

            <div class="baner-brand contact-info">                                                         
                    <div class="main-baner">
                        <div class="pos-center">
						<?php 
						$params = array(
         
        'post_type' => array('products', 'post'),
        's' => 'keracnyl'
		);
						//if ( have_posts() ) {
							//while ( have_posts() ) {
								//the_post(); 
								$loop = new WP_Query($params);
								if($loop->have_posts()){
						
							while($loop->have_posts()) { $loop->the_post();
							echo "fff";
							?>

							<div class="caption text">
							    <h3 style="text-shadow: 0px 0px 0px #00A0C6"><?php the_title(); ?>zczcz</h3>
								<div class="contact-desc">
									<!--<h4>Pierre Fabre Dermo-Cosmétique Polska Sp. z o.o.</h4>
									<p><i class="demo-icon icon-mail-alt"></i> ul. Belwederska 20/22, 00-762 Warszawa</p>
									<p><i class="demo-icon icon-phone"></i> +48 22 559 63 60</p>
									<p><i>NIP</i> 526-24-09-388</p>

									<p><i class="demo-icon icon-mail"></i><a href="mailto:serwis.konsumencki@pierre-fabre.pl">serwis.konsumencki@pierre-fabre.pl</a><p>

									<p>Sąd Rejonowy dla m.st.Warszawy XIII Wydział Gospodarczy Krajowego Rejestru Sądowego nr KRS 0000021960</p>-->
									<?php the_content(); ?>

								</div>							
							</div>
							<?php 
								} 
							} 
							?>
							
						</div>
					</div>
					
					
					
            </div>
        </section>
		

        <section id="home" class="content content-story">

 <?php get_footer(); ?>