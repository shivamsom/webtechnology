//to clear form inputs on browser back button may not required in firefox due to BFcache 
				$(window).bind("pageshow", function() {
    					var form = $('form'); 
    						// let the browser natively reset defaults
   							 form[0].reset();
						});
