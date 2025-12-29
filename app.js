$(function() {
	let nbPhotos = 12;

	// https://alvarotrigo.com/fullPage/#page1
	// https://github.com/alvarotrigo/fullPage.js#usage

	new fullpage('#fullpage', {
		licenseKey: 'gplv3-license',
		anchors: [
			'home',
			'presentation',
			'prestations',
			'exemples-menu',
			'galerie',
			'contact'
		],
		menu: '#menu',
		scrollingSpeed: 700,
		autoScrolling: true,
		fitToSection: true,
		scrollBar: false,
		keyboardScrolling: true,
		responsiveWidth: 768,

		//navigation: true,
		//navigationPosition: 'right',
		//controlArrows: true,
		//showActiveTooltip: true,
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

	function formatPhoneFR(phone) {
		phone = phone.replace(/\D/g, '');   // garde uniquement les chiffres
		phone = phone.replace(/^33/, '0');   // remplace l’indicatif FR
		return phone.match(/.{1,2}/g).join(' ');
	}
	document.querySelectorAll('.phone-number').forEach(function (el) {
		el.textContent = formatPhoneFR(el.textContent);
	});

	/*
	document.querySelectorAll('#navbarSupportedContent .nav-link').forEach(function (link) {
		link.addEventListener('click', function () {
			var collapseEl = document.getElementById('navbarSupportedContent');
			if (collapseEl && collapseEl.classList.contains('show')) {
				var bsCollapse = bootstrap.Collapse.getInstance(collapseEl) || new bootstrap.Collapse(collapseEl, { toggle: false });
				bsCollapse.hide();
			}
		});
	});

	 */

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