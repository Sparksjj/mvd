$(function(){
	$('#search-button').on('click', function(){
		$('#search-button').css('display', 'none');
		$('#search-form').fadeToggle(200);
	});

	$('body').on('click', function(e){
		
		if ($('#search-button').css('display') == 'none' && e.target != $('#search-button img')[0] && e.target != $('#search-button')[0] && $(e.target).parents('#search-form').length == 0) {
			$('#search-form').fadeOut(200, function(){
				$('#search-button').css('display', 'block');
			});
		}

	});
})
