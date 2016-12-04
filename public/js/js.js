$('#fail').hide();
$('#findMyWeather').click(function(event){
		event.preventDefault();
		var textInput=$('#textInput').val();
		var textInputValue=false;
		
		if(textInput != '')
		{
			   $('#findMyWeather').css('background','red')
				$.get('scraper.php?city='+textInput,function(data) {
				    	
				if(data==""){

					$('#fail').fadeIn();

				}
				else{

					 $('#succes').html(data).fadeIn();
					 $('#fail').hide();

				}	  
			})
			
			 
			
		}
		else {
			
			$('.cityError').append('<span>Please write yor city in.. </span>');
		}
	})

