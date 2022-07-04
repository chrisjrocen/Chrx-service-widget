<?php
/**
 * Replace default WP logo and URL
*/

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url("/wp-content/uploads/2022/01/clio-websites-logo-blue.svg"); /* change the URL to your own image */
		height:65px;
		width:320px;
		background-size: 320px 65px; /* adjust the dimensions */
		background-repeat: no-repeat;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );