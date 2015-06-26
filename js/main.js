// main.js
// 20150625 taiti

//top image text表示
$(function() {
	$(document).ready(function(){
		$('top_image').({'position: relative;'})	
		$('top_image_text').({'
			position: absolute;
			background: url("/images/home_image/text_area.png") no-repeat top left;
			top: 100px;
			left: 80px;
		'});
	});

});