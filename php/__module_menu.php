<?php
namespace SIM\RECIPES;
use SIM;

const MODULE_VERSION		= '8.0.0';
//module slug is the same as grandparent folder name
DEFINE(__NAMESPACE__.'\MODULE_SLUG', strtolower(basename(dirname(__DIR__))));

add_filter('sim_submenu_description', function($description, $moduleSlug){
	//module slug should be the same as the constant
	if($moduleSlug != MODULE_SLUG)	{
		return $description;
	}

	ob_start();
	?>
	<p>
		<strong>Auto created page:</strong><br>
		<a href='<?php echo home_url('/recipes');?>'>Recipes</a><br>
	</p>
	<?php
	return ob_get_clean();
},10,2);