<?php
namespace SIM\RECIPES;
use SIM;

add_action( 'wp_enqueue_scripts', __NAMESPACE__.'\loadAssets');
function loadAssets(){
    wp_register_script('sim_plurarize_script',SIM\pathToUrl(MODULE_PATH.'js/recipe.min.js'), array(), MODULE_VERSION,true);
}