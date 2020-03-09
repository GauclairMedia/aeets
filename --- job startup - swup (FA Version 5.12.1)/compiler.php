<?php
	$php_self = ltrim($_SERVER['PHP_SELF'], '/');
	$exploded_php_self = explode('/', $php_self);
	$project = $exploded_php_self[0];

	//Compile LESS/CSS & JS files
	include("lessphp/lessc.inc.php");
	require_once('minifier/minify/src/Minify.php');
	require_once('minifier/minify/src/JS.php');
	require_once('minifier/minify/src/Exception.php');
	require_once('minifier/path_converter/src/ConverterInterface.php');
	require_once('minifier/path_converter/src/Converter.php');

	use MatthiasMullie\Minify;

	$compile = true;
	if($compile){
		$compile_css = true;
		if($compile_css && filemtime('css/style.less') > filemtime('css/style.min.css')){
			//CSS/LESS
			$styles = array();
			$style_files = array(
				'css/imports/normalizer.less',
				'css/imports/fontAwesome/_variables.less',
				'css/imports/fontAwesome/_mixins.less',
				'css/imports/fontAwesome/_core.less',
				'css/imports/fontAwesome/_larger.less',
				'css/imports/fontAwesome/_fixed-width.less',
				'css/imports/fontAwesome/_list.less',
				'css/imports/fontAwesome/_bordered-pulled.less',
				'css/imports/fontAwesome/_animated.less',
				'css/imports/fontAwesome/_rotated-flipped.less',
				'css/imports/fontAwesome/_stacked.less',
				'css/imports/fontAwesome/_icons.less',
				'css/imports/fontAwesome/_screen-reader.less',
				'css/imports/fontAwesome/brands.less',
				'css/imports/fontAwesome/light.less',
				'css/imports/fontAwesome/duotone.less',
				'css/imports/fontAwesome/regular.less',
				'css/imports/fontAwesome/solid.less',
                'css/imports/animate.less',
                'css/imports/font.css',
				'plugins/selectric/selectric.css',
				'plugins/slick/slick.css',
				'plugins/slick/slick-theme.css',
                'plugins/fancybox/jquery.fancybox.min.css',
				'css/style.less',
			);

			foreach($style_files as $style_file){
				if(preg_match('/.less$/', $style_file)){
					$styles['less'] .= file_get_contents($style_file);
				}
				else if(preg_match('/.css$/', $style_file)){
					$styles['css'] .= file_get_contents($style_file);
				}
			}

			if($styles['less'] != ''){
				try {
					$less = new lessc;

					$compiled_css = $less->compile($styles['less']);

					if ($compiled_css) {
						$styles['css'] .= $compiled_css;
					}
				} catch (exception $e) {
					echo "LESS COMPILATION ERROR => " . $e->getMessage();
					exit;
				}
			}

			$myfile = fopen('css/style.min.css', "w") or die("Unable to open file!");
			fwrite($myfile, $styles['css']);
			fclose($myfile);

			require_once('minified.css.php');
		}

		$compile_js = true;
		if($compile_js && filemtime('scripts/scripts.js') > filemtime('scripts/scripts.min.js')){
			//JS
			$js_minifier = new Minify\JS();

			$scripts_files = array(
				'scripts/jquery_3.3.1.min.js',
                'plugins/swup/swup.min.js',
				'plugins/swup/SwupGaPlugin.min.js',
				'plugins/swup/SwupSlideTheme.min.js',
				'plugins/selectric/jquery.selectric.min.js',
				'plugins/slick/slick.min.js',
				'plugins/jquery.visible.min.js',
				'plugins/webfonts.js',
                'plugins/fancybox/jquery.fancybox.min.js',
				'scripts/scripts.js',
			);

			foreach($scripts_files as $scripts_file){
				$js_minifier->add($scripts_file);
			}

			$js_minifier->minify('scripts/scripts.min.js');
		}
	}
?>
