<?php
 the_post();
?>

<?php get_header(); ?>

        
        <section id="header" class="category-desc entry">
			<div class="breadcrumbs">
				<div class="pos-center">              
                        <a href="<?php echo home_url() ?>">Strona główna</a>
                        <span></span>
                        Nagrody
				</div>
			</div>

            <div class="baner-brand search-info">                                                         
                    <div class="main-baner">
                        <div class="pos-center">

							<div class="caption text">
							    <h4 style="text-shadow: 0px 0px 0px #00A0C6"><?php the_title(); ?></h4>
								<div class="search-desc">
									<?php the_post_thumbnail(); ?><?php the_content(); ?>

								</div>							
							</div>
						
							
						</div>
					</div>
					
					
					
            </div>
        </section>
		

        <section id="home" class="content content-story">

 <?php get_footer(); ?>