<?php

add_action('wp_footer','as21_system_info');
function as21_system_info(){
	?>
	<div class="as21-system-info-overlay">
		<div class="as21-system-info">
			<a href="#" class="close" onclick="document.querySelector('.as21-system-info-overlay').style.display='none';">x</a>
			<h3>Информация</h3>
			<p>Сайт в разработке. Это черновая весрия,поисковики Яндекс и Google пока не видят сайт, поэтому здесь сейчас кроме как разработчика и заказчика никого не бывает</p>
<!-- 
			<div onclick="var el = this.getElementsByTagName('A')[0];el.style.display = (el.style.display == 'none') ? 'block' : 'none'" style="width:200px;height:30px;background-color:yellow;color:red;font-size:120%;border:1px solid black;text-align:center;line-height:30px">
				click <a href="#" onclick="return false">ссылка</a> me
			</div>
		-->			
	</div>
</div>
<?php
}

add_action( 'wp_enqueue_scripts', 'as21_css_js_for_theme' , 999);
function as21_css_js_for_theme(){
	wp_deregister_style('seocrawler-child-theme-style');
	wp_enqueue_style('seocrawler-child-theme-style', get_stylesheet_uri(),array('seocrawler-custom-style'));
}