$(document).ready(function(){
    
    
    $('nav .menu .sub-menu a').each(function(){
        var $this = $(this);
        $this.parent().addClass($this.attr('title'));
        if($this.attr('title') == 'all'){
            $this.append($('<span/>'));
        }
    });
    
    $('nav .menu .sub-menu a').last().css('border-bottom', '0');
    
	var hamburger=document.querySelector(".hamburger");
	console.log(hamburger);
	hamburger.addEventListener("click",function(){
	document.querySelector("#main-nav").classList.toggle("nav-opened");
	},false);
    
    $('#home .comments .container section').first().addClass('first');
    $('#home .comments .container section').last().addClass('last');
  
    
    /*$('#header .main-news.home-slider .slides').carouFredSel({*/
    $('#header .baner .slides').carouFredSel({
        scroll: { 
            items: 1,
            /*easing           : "elastic",*/
            duration         : 1000,
            pauseOnHover     : true,
            timeoutDuration: 4000,
            fx: 'fade'
        },
        pagination: {
            /*container: $('#header .main-news.home-slider .pagination ul'),*/
            container: $('#header .baner .pagination ul'),
            anchorBuilder: function(nr){
                return '<li><a href="#">'+nr+'</a></li>';
            }
        }
    });
    

	
	   $('.inspirations .slider .slides-container .items').carouFredSel({
        prev: $('.inspirations .slider .prev'),
        next: $('#home .inspirations .slider .next'),
        scroll: { 
            items: 1,
			duration         : 1000,
            pauseOnHover     : true,
            timeoutDuration: 4000,
        }
    });
	
	
    
    
    
    $('#home .boxes .box').mouseover(function(){
        var $this = $(this);
        
        if($this.find('.step2').size() > 0){
            $this.find('.step1').hide();
            $this.find('.step2').show();
        }
    });
    
    $('#home .boxes .box').mouseout(function(){
       var $this = $(this);
       
       if($this.find('.step2').size() > 0){
            $this.find('.step2').hide();
            $this.find('.step1').show();
        }
    }); 
	
	/*przełączanie informacji o kosmetyku */
	
	$('.cosmetic-menu li').click(function(){
       var $this = $(this);
	   $title=$this.attr('title');
	   $('.cosmetic-menu li.active').removeClass('active');
	   $this.addClass('active');
	   $('.cosmetic-info').removeClass('visible');
	   $('#'+$title).addClass('visible');
	  
    });
	//footer sub-meny-footer
	$('.menu-footer a[href="http://#"]').click(function(e){
		e.preventDefault();
		$('.menu-footer ul.sub-menu').css('display','block');
		
	});
    
    //archiwum przepisów
    $('#recipes .left .entry:nth-child(odd)').css('border-right', '1px dashed #cecece');
    $('#entry .right .ingredients ul li:nth-child(odd)').css('background-color', '#181818');
        
    //strzałki animacja inspiracje
    var $sliderNav = $('#home .inspirations .slider > a');
    
    $sliderNav.each(function(){
        var $this = $(this);
        
        if($this.hasClass('prev')){
            var cleft = parseInt($this.css('left'));
            $this.css('left', (cleft+2));
            var onOver = {left: cleft+'px'};
            var onOut = {left: (cleft+2)+'px'};
        }else{
            var cright = parseInt($this.css('right'));
            $this.css('right', (cright+2));
            var onOver = {right: cright+'px'};
            var onOut = {right: (cright+2)+'px'};
        }
        
        $this.hover(function(){
            $this.animate(onOver, 100);
        }, function(){
            $this.animate(onOut, 100);
        });
    });
   
 
   
    // dwa ostatnie przepisy w archiwum dostają klasę last
    $('#recipes .entry')
        .last().addClass('last')
        .prev().addClass('last');


	
		//walidacja formularza
		$('#pole').on('blur', function() {
			var pattern_name =  /^[a-zA-ZąćęłńóśżźĄĆĘŁŃÓŚŻŹ\s]{2,50}$/;
		var input_name = $(this);
		var is_name=pattern_name.test(input_name.val());
		var name_length = input_name.val().length;
		if((name_length >= 3) && (name_length <= 50) && is_name){
			input_name.removeClass("invalid").addClass("valid");
		}
		else{
			input_name.removeClass("valid").addClass("invalid");			
		}
		console.log(name_length);
	});
		
	//Walidacja email
	$('#pole1').on('blur', function() {
		var input = $(this);
		var pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		var is_email = pattern.test(input.val());
		if(is_email){
			input.removeClass("invalid").addClass("valid");
			
		}
		else{
			input.removeClass("valid").addClass("invalid");
			input.next('.komunikat').text("Wprowadź poprawny email!");
		}
		
	});	
	
	//Walidacja wiadomości
	$('#pole3').on('blur', function() {
		var input = $(this);
		var message = $(this).val();
		if(message){
			input.removeClass("invalid").addClass("valid");
			
		}
		else{
			input.removeClass("valid").addClass("invalid");
		}
	});
	
	//Po próbie wysłania formularza
		$('button').click(function(event){
			let name = $('#pole');
			let email = $('#pole1');
			let message = $('#pole3');
			
			if(name.hasClass('valid') && email.hasClass('valid') && message.hasClass('valid')){
				console.log("Pomyślnie wysłano formularz.");
				
				
			}
			else {
				event.preventDefault();
				alert("Uzupełnij wszystkie pola!");	
			}
		});
    
});