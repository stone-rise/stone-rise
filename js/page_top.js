// page_top jQuery
// 20150623 taiti
$(function() {
	var showFlag = false;
	var topBtn = $('#page-top');
	topBtn.css('bottom', '-100px');
	var showFlag = false;
	// スクロールが100pxに達したらボタンを表示させる
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			if (showFlag == false) {
				showFlag = true;
				topBtn.stop().animate({'bottom' : '20px'}, 200);
			}
		} else {
			if (showFlag) {
				showFlag = false;
				topBtn.stop().animate({'bottom' : '-100px'}, 200);
			}
		}
	});
	// スクロールしてトップ
	topBtn.click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
	});
});