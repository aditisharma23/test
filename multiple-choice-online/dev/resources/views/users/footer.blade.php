  <!-- Start Footer -->
        <footer class="footer_detail">
            <div class="container">
                <div class="row pt-5 pb-5">
                    <div class="col-lg-12">
                        <div class="text-center footer_about">
                            <h3 class="text_custom">Multiple Choice Online</h3>
                            <p class="mx-auto mt-3 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                        </div>
                        <div class="text-center subcribe-newslatter mt-5">
                            <form class="mx-auto position-relative">
                                <input type="email" placeholder="Enter Your Email" required="">
                                <button type="submit" class="btn btn_custom">Subcribe</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="fot_bor"></div>
                <div class="row pt-3 pb-3">
                    <div class="col-lg-12">
                        <div class=" text-center">
                            <p class="text-white mb-0">2018 &copy; Multiple Choice Online. Design by Indi IT Solutions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- Back To Top Up Arrow Start -->
        <a href="#" class="back_top_angle_up" style="display: inline;"> 
            <i class="mbri-arrow-up"> </i>
        </a>
        <!-- Back To Top Up Arrow End -->

        <!-- JAVASCRIPTS -->
       <script src="{{url('/')}}/resources/js/jquery.min.js"></script>
        <script src="{{url('/')}}/resources/js/popper.min.js"></script>
        <script src="{{url('/')}}/resources/js/bootstrap.min.js"></script>
        <!--TESTISLIDER JS-->
        <script src="{{url('/')}}/resources/js/owl.carousel.min.js"></script>
        <script src="{{url('/')}}/resources/js/masonry.pkgd.min.js"></script>
        <script src="{{url('/')}}/resources/js/jquery.magnific-popup.min.js"></script>
      
        <script src="{{url('/')}}/resources/js/jquery.easing.min.js"></script>
        <script src="{{url('/')}}/resources/js/custom.js"></script>

		
		
		
		
	<script>
	
	(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
	
	</script>		
		<script>
	$('#owl-carousel3').owlCarousel({
    loop:true,
    margin:10,
	autoplay:true,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
	</script>		
		
		
    </body>
</html>