<?php
/*
Plugin Name: WPaulina
Plugin URI: https://github.com/rudylps/partenariat-simplon
Description: Plugin pour ajouter un texte sous WordPress
Version: 0.3
Author: Rudy Lp2
Author URI: http://c2af1c718531478694c61bc8176d8c6c.yatu.ws/
License: LP2
*/

function WPaulinaShortcode() {
	return '<p>La publication de cet article est possible grâce à mon super partenaire <a href="https://simplon.co">simplon.co</a> - une entreprise de
l’économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose
des formations GRATUITES pour devenir développeur web.</p>';
}
add_shortcode('WPaulina', 'WPaulinaShortcode');




?>