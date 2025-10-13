<?php
namespace SIM\RECIPES;
use SIM;

const MODULE_VERSION		= '8.0.6';

DEFINE(__NAMESPACE__.'\MODULE_PATH', plugin_dir_path(__DIR__));

//module slug is the same as grandparent folder name
DEFINE(__NAMESPACE__.'\MODULE_SLUG', strtolower(basename(dirname(__DIR__))));

add_filter('sim_submenu_recipes_description', __NAMESPACE__.'\moduleDescription');
function moduleDescription($description){
	ob_start();
	?>
	<p>
		<strong>Auto created page:</strong><br>
		<a href='<?php echo home_url('/recipes');?>'>Recipes</a><br>
	</p>
	<?php
	return $description.ob_get_clean();
}