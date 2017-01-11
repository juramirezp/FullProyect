var mediaquery = window.matchMedia("(max-width: 767px)");
		if (mediaquery.matches) {
			$('#navegador').removeClass("animated");
			$('#navegador').removeClass("slideInLeft");
			
			$('#navegador li, #navegador a').click(function(){
				$('#navegador').removeClass('in');
			})
		}



	  $(function() {
	    $(".rslides").responsiveSlides();
	  });

	   $(document).ready(function(){
		  var altura = $('#navegador').offset().top;
		  $(window).on('scroll', function(){
		  if ( $(window).scrollTop() > altura ){
		  $('#navegador').addClass('ElementoFixed');
		  } else {
		  $('#navegador').removeClass('ElementoFixed');
		  }
		 });
		 $('#navegador a, footer a').click(function(e){
			e.preventDefault();
			$('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 700);
		});


		 $('#formulario').submit(function(e){
		 	e.preventDefault
		 	$.ajax({
                data: $(this).serialize(),
                url:   'contacto.php',
                type:  'post',
                success:  function (response) {
                    alert('Muchas Gracias, Pronto te contactaremos.');
                }
        	});
		 });
		});