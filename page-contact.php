<?php
/*

	Template Name: Kontakt

*/
?>

<?php get_header(); ?>

        
        <section id="header" class="category-desc entry">
			<div class="breadcrumbs">
				<div class="pos-center">              
                        <a href="<?php echo home_url() ?>">Strona główna</a>
                        <span></span>
                        Kontakt
				</div>
			</div>

            <div class="baner-brand contact-info">                                                         
                    <div class="main-baner">
                        <div class="pos-center">
						<?php 
						if ( have_posts() ) {
							while ( have_posts() ) {
								the_post(); 
							?>

							<div class="caption text">
							<?php 
								global $send_form;
						
						         if(isset($send_form)) {
							?>
									<h3 style="text-shadow: 0px 0px 0px #00A0C6">KONTAKT</h3>
								
							<?
							       
						         }else{
							?>
									<h3 style="text-shadow: 0px 0px 0px #00A0C6"><?php the_title(); ?></h3>
							<?php
								 }
							?>
								<div class="contact-desc">
									
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
		<div class="main-brand-story contact">
						<div class="pos-center">
							<header>
								<h2>Napisz do nas</h2>
								<h4 class="empty-h4"> </h4>
							</header>
							<?php
								if(isset($send_form)) {
							?>
								<p id="wyniki">Dziękujemy za wysłanie wiadomości</p> 
							<?php
								}
							?>
							<div class="form-container">
								<form name="myForm" method="post" action="<?php echo home_url(). '/wysylanie-formularza/' ?>" id="myForm" >
									<label for="pole">Imię i nazwisko</label>
									<input type="text"  id="pole" name="nazwisko"required/>
									<label for="pole1">Adres e-mail</label>
									<input type="email"  id="pole1" name="mail" required/>
									<label for="pole3">Pytanie</label>
									<textarea id="pole3" rows="5" cols="60" name="pytanie">Pytanie</textarea>
									<button type="submit">wyślij</button>
								</form>	
							</div>
                           							
                        </div>
						
                    </div>
 <?php get_footer(); ?>