// Commom Plugins
(function($) {

	'use strict';

	// Scroll to Top Button.
	if ($.isFunction(theme.PluginScrollToTop.initialize)) {
		theme.PluginScrollToTop.initialize();
	}

	// Parallax
	if ($.isFunction(theme.PluginParallax.initialize)) {
		theme.PluginParallax.initialize();
	}

	// Tooltips
	if ($.isFunction($.fn['tooltip'])) {
		$('a[rel=tooltip]').tooltip();
	}

}).apply(this, [jQuery]);

// Animate
(function($) {

	'use strict';

	if ($.isFunction($.fn['themePluginAnimate'])) {

		$(function() {
			$('[data-plugin-animate], [data-appear-animation]').each(function() {
				var $this = $(this),
					opts;

				var pluginOptions = $this.data('plugin-options');
				if (pluginOptions)
					opts = pluginOptions;

				$this.themePluginAnimate(opts);
			});
		});

	}

}).apply(this, [jQuery]);

// Toggle
(function($) {

	'use strict';

	if ($.isFunction($.fn['themePluginToggle'])) {

		$(function() {
			$('[data-plugin-toggle]:not(.manual)').each(function() {
				var $this = $(this),
					opts;

				var pluginOptions = $this.data('plugin-options');
				if (pluginOptions)
					opts = pluginOptions;

				$this.themePluginToggle(opts);
			});
		});

	}

}).apply(this, [jQuery]);

// Word Rotate
(function($) {

	'use strict';

	if ($.isFunction($.fn['themePluginWordRotate'])) {

		$(function() {
			$('[data-plugin-word-rotate]:not(.manual), .word-rotate:not(.manual)').each(function() {
				var $this = $(this),
					opts;

				var pluginOptions = $this.data('plugin-options');
				if (pluginOptions)
					opts = pluginOptions;

				$this.themePluginWordRotate(opts);
			});
		});

	}

}).apply(this, [jQuery]);

// Commom Partials
(function($) {

	'use strict';

	// Nav Menu
	if ($.isFunction(theme.Nav.initialize)) {
		theme.Nav.initialize();
	}

}).apply(this, [jQuery]);



	// superslider
  $('#slides').superslides({
  	hashchange: false,
	play: 6000,
	animation: 'fade',
    slide_speed: 10000
  });