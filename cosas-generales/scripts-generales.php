<script src="js/jquery.js"></script>
<script src="js/materialize.js"></script>
<script src="js/preloader.js"></script>

<!-- Menu Responsive -->
<script>
	$(document).ready(function(){
		// Btn Responsive
		$(".button-collapse").sideNav();
  		
  		// Slider
  		$('.carousel.carousel-slider').carousel({fullWidth: true});
  		
  		$('.modal').modal();
  		$('.parallax').parallax();

  		// Pushpin
  		$(document).ready(function(){
		    $('.target').pushpin({
		      top: 0,
		      bottom: 1000,
		      offset: 0
		    });
		});

  		$('.pushpin-demo-nav').each(function() {
		    var $this = $(this);
		    var $target = $('#' + $(this).attr('data-target'));
		    
		    $this.pushpin({
		      	top: $target.offset().top,
		      	bottom: $target.offset().top + $target.outerHeight() - $this.height()
		    });
		});
	});
</script>