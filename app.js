$(function() {
	/*
	https://alvarotrigo.com/fullPage/#page1
	https://github.com/alvarotrigo/fullPage.js#usage
	 */
	var fullPage = $('#fullpage').fullpage({
		//options here
		autoScrolling:true,
		//scrollHorizontally: true

		anchors: ['home', 'presentation', 'prestations', 'exemples-menu', 'contact'],
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

	/*
	function updateHeaderMenu() {
		$('header a').removeClass('active');

		let currentSectionId = $('div.fp-section.active').prop('id');
		$('header a[href="#'+currentSectionId+'"]').addClass('active');
	}
*/
});