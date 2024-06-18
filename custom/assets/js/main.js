$(document).ready(function () {
	/* smooth scroll*/
	var winWidth = $(window).width()
	$(' a.js-has-smooth[href*="#"]:not([href="#"])').click(function () {
		if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
			var target = $(this.hash)
			target = target.length ? target : $("[name=" + this.hash.slice(1) + "]")
			if (target.length) {
				if (winWidth > 991) {
					$("html, body").animate(
						{
							scrollTop: target.offset().top - 50,
						},
						1000
					)
				} else {
					$("html, body").animate(
						{
							scrollTop: target.offset().top,
						},
						1000
					)
				}
				return false
			}
		}
	})

	//sticky-footer
	function stickyFooter() {
		let stickyFooter = $('.sticky-footer');
		let stickyFooterHeight = stickyFooter.innerHeight();
		let siteFooter = $('.site-footer');
		siteFooter.css('margin-bottom', stickyFooterHeight);
	}

	stickyFooter();

	let debounceTimeout;

	$(window).on('resize', function () {
		clearTimeout(debounceTimeout);
		debounceTimeout = setTimeout(function () {
			stickyFooter();
		}, 250);
	});

	// slider-col2
	$(".slider-col-2").slick({
		arrows: true,
		dots: true,
		slidesToShow: 2,
		adaptiveHeight: true,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 10000,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 1,
				},
			},
		],
	})
})