            <section class="boxes">
                <div class="pos-center">

                    <section class="box first">
                        <div class="step1">
 							<div class="step1-desc">
                            <!--<h2><img src="img/ducray-logo-b1.png" alt="" /></h2>-->
								<p>Użyteczna innowacyjność od 1930 roku</p>
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
		</section>
		<footer>
            <div class="pos-center">
                <section class="logo">
					<img src="<?php echo DUCRAY_THEME_URL; ?>img/logo-ducray-n-155.png" alt="" />
                </section>

                <section class="social">
					<a href="" title=""><i class="demo-icon icon-facebook"></i></a>
					<a href="mailto:aklekotka@interia.pl" title=""><i class="demo-icon icon-mail"></i> </a>     
                </section>
			</div>
			<div class="pos-center">
				<section class="footer-menu">
					 <!--<ul class="menu-footer">-->
                          <?php wp_nav_menu( array( 'menu_class' => 'menu-footer' ) );?>
                       <!-- </ul>-->
				</section>
			</div>
			<div class="pos-center">
				<div class="copyright">
					<p>Ducray &copy; 2017 </p>    
                </div>
            </div>
        </footer>


    </body>
</html>