<?php
/*

	Template Name: Nie znaleziono strony

*/
?>

<?php get_header(); 
	the_post(); ?>

   
        <section id="header" class="category-desc entry">
			<div class="breadcrumbs">
				<div class="pos-center">              
                        <a href="<?php echo home_url() ?>">Strona główna</a>
                        <span></span>
                        Strona błędu 404
				</div>
			</div>

            <div class="baner-brand search-info">                                                         
                    <div class="main-baner">
                        <div class="pos-center">
						

							<div class="caption text">
							 
								<div class="search-desc 404-desc">
								
									<h2><b>Przykro nam, ale szukana strona nie istnieje.</b></h2>
									<p style="margin-top: 30px;"><img src="<?php echo DUCRAY_THEME_URL; ?>content/kompozycja.png" /></p>

								</div>							
							</div>
							
							
						</div>
					</div>
					
					
					
            </div>
        </section>
		

        <section id="home" class="content content-story">

 <?php get_footer(); ?>