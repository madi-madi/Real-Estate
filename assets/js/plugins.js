			$(function(){
  		// Handler for .ready() called.
  		$('#district-address option:not(:selected)').css({"display":"none"});
  	//	$('.district-khanyouns').css({"display":"none"});
  		
  		$('#main-address option').on('click', function(){
alert("Click");
  				var dat = $(this).attr("data-value");
  		//alert(dat);
  			  		var value =	$(this).val();
  			  		//alert(value);
  			  		if (value == dat) {
  			  			$('#district-address option:not(:selected)').css({"display":"none"});
  			  			$('.'+dat).css({"display":"block"});
  			  		}
  			//alert(value);
  		});


		});