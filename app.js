$(function() {
	let nbPhotos = 12;

	// https://alvarotrigo.com/fullPage/#page1
	// https://github.com/alvarotrigo/fullPage.js#usage
	var fullPage = $('#fullpage').fullpage({
		//options here
		autoScrolling:true,
		//scrollHorizontally: true

		anchors: ['home', 'presentation', 'prestations', 'exemples-menu', 'galerie', 'contact'],
		menu: '#menu',
		navigation: true,
		navigationPosition: 'right',
		controlArrows: true,
		showActiveTooltip: true,
		/*slidesNavigation: true,*/

		/*
		afterRender: function() {
			//updateHeaderMenu();
		},
		afterLoad: function(origin, destination, direction) {
			//var leavingSection = this;

			//console.log(destination.item);
			//updateHeaderMenu();
		},
		onLeave: function(origin, destination, direction) {
			//var leavingSection = this;

			//console.log(destination.item);
			//updateHeaderMenu();
		},
		*/
	});

	//let menuList = JSON.parse('menu.json');
	//console.log(menuList);

	// Menus
	fetch('menu.html')
		.then(response => response.text())
		.then(html => {
			let menuDiv = $('.menu_section');
			let menuList = $(html).find('div:not(.hidden)');
			console.log(menuList);

			for (let i = 0; i < menuList.length; i++) {
				if (typeof menuList[i] != 'undefined') {
					menuDiv.find('.menu_'+(i+1)).html($(menuList[i]).html());
				}
			}
		})
	;

	// Galerie
	const galerieDiv = $('.galerie_section .photos');
	for (let i = 0; i < nbPhotos; i++) {
		let photoUrl = 'images/galerie/photo_'+(i+1)+'.jpg';
		galerieDiv.append('<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3 photo"><a class="image-popup-vertical-fit" href="'+photoUrl+'" data-fancybox="gallery" title=""><img src="'+photoUrl+'" class="img-thumbnail rounded" alt=""></a></div>');
	}

	Fancybox.bind("[data-fancybox]", {
		// Your options go here
	});

	/*
	galerieDiv.magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Chargement',
		//mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			//tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			//titleSrc: function(item) {
			//	return item.el.attr('title');
			//}
			cursor: 'mfp-zoom-out-cur'
		}
	});
	*/

	/*
	function updateHeaderMenu() {
		$('header a').removeClass('active');

		let currentSectionId = $('div.fp-section.active').prop('id');
		$('header a[href="#'+currentSectionId+'"]').addClass('active');
	}
*/
});