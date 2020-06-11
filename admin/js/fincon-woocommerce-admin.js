(function( $ ) {
	'use strict';

	$(document).ready(function(){


		if($('#FC30SECONDS').length){

			setTimeout(function(){ window.location.reload(true); }, 30000);

		}


		$('.fincon-admin-trigger').on('click', function (){

			var $_THIS_BUTTON = $(this);

			$('#the-overlay').addClass('show');

			var ajax_data = {
				action: $_THIS_BUTTON.data('trigger')
			};

			$.ajax({
		        url: fincon_params.ajax_url,
		        type:'POST',
		        data:ajax_data,
		        async: true,
		        success:function(response){   

		        	console.log(response);
	        	
		        	
					setTimeout(function(){ window.location.reload(true); }, 5000);
							        

		        }
		    });

		});



		$('.fincon_woocommerce_ajax_create_sales_order').on('click', function(){

			var $_THIS_BUTTON = $(this);

			$('#the-overlay').addClass('show');

			var ajax_data = {
		    	action: 'fincon_woocommerce_ajax_create_sales_order',
		    	o: $(this).data('o')
		    };

			$.ajax({
		        url: fincon_params.ajax_url,
		        type:'POST',
		        data:ajax_data,
		        async: true,
		        success:function(response){   


		        	var data = $.parseJSON(response);
		        	
					if(data.status == 'no'){

						if(confirm('Errors prevented creation of Sales Order')){
							$_THIS_BUTTON.prev().html(data.errors);
							$('#the-overlay').removeClass('show');
						}

					}else{

						if(confirm('Sales Order ' + data.so + ' successfully created')){

							$_THIS_BUTTON.prev().html(data.text);
							$_THIS_BUTTON.remove();
							$('#the-overlay').removeClass('show');

						}

					}
							        

		        }
		    });

		});

	});

	

})( jQuery );
