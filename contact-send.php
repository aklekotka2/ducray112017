


<?php
/*

	Template Name: send contact form

*/

?>

<?php 



	$to = 'aklekotka@interia.pl';
	$subject = 'Wiadomość ze strony Ducray.pl';
	$body = htmlspecialchars(trim($_POST['pytanie']))."<br> <br>".htmlspecialchars(trim($_POST['nazwisko']));
	$headers = array('Content-Type: text/html; charset=UTF-8','From: '.htmlspecialchars(trim($_POST['nazwisko'])).' <'.htmlspecialchars(trim($_POST['mail'])).'>');

 
	wp_mail( $to, $subject, $body, $headers );
	
	$send_form = true;


	//echo sendForm();
	 get_template_part('page','contact');
	
	
?>