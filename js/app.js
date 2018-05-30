$(function() {
	// Variables, composants 
	var $nav = $('#nav-menu')
	var $navA = $nav.find('a')

	var $subMenu = $('#submenu')
	var $downArrow = $('#downArrow')
	var $toTop = $('#toTop')
	var $root = $('html, body') 
	var $linkAnchor = $('a[href*=\\#]')
	// Position top du menu et sous menu, 
	// le submenu sert à connaître la position bottom de la nav 
	var topNav =  $nav.offset().top
	var topSubMenu = $subMenu.offset().top
	var $figures = $('.hygiene').find('figure')

	var navHeight = $nav.outerHeight();
	var arraySection = $('#salon, #artistes, #hygiene, #contact')


	// Cette fonction permet à la nav de se fixer au scroll
	var fixedNavOnScroll = function() {
		$(window).on('scroll', function() {
			if($(this).scrollTop() > 0) {
				$nav.addClass('fixed')
				$toTop.fadeIn()
			} else {
				$nav.removeClass('fixed')
				$toTop.fadeOut()
			}
		})
	}

	var scrollToTop = function() {
		$toTop.on('click', function() {
			$root.animate({ scrollTop:0 }, 500)
		})
	}


	var scrollToAnchor = function() {
		$linkAnchor.on('click', function(e) {
			e.preventDefault()
			$root.animate({ scrollTop: $($.attr(this, 'href')).offset().top - 120}, 500)
		})
	}


	var menuHygiene = function() {
		$('.menu-soin').find('li').on('click', function() {
			var idMenu = $(this).attr('id')
			$figures.each(function() {
				var classFig = $(this).attr('class')
				if(idMenu == classFig) { // si l'id clické (sur la nav) est le même que la class de la figure 
					$($figures).removeClass('show') // on enleve la class show à toutes les figures 
					$(this).addClass('show') // on l'ajoute à l'élément voulu
				}
			})
		})
	}


	var changeActiveOnScroll = function() {
		$(window).on('scroll', function () {
			var wPositionTop = $(this).scrollTop()
			arraySection.each(function() {
				var top = $(this).offset().top - navHeight,
					bottom = top + $(this).outerHeight()
				if (wPositionTop >= top - 120 && wPositionTop <= bottom) {
					$navA.removeClass('active')
					$nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active')
				}
			})
		})
	}

	$('.menu__body-element .menu__body-link').click(function(){
		$( "#menu--toggle" ).prop( "checked", true );
		$( "#menu--toggle" ).prop( "checked", false );
	});
	menuHygiene()
	scrollToTop()
	fixedNavOnScroll()
	scrollToAnchor()
	changeActiveOnScroll()
});