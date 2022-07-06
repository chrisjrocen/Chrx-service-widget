<?php
/**
 * Add a custom widget on the dashboard
 *
 * @package chrx-service.
 */
function chrx_add_dashboard_widget() {

	remove_action( 'welcome_panel', 'wp_welcome_panel' );
	remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
	remove_meta_box( 'health_check_status', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );

	wp_add_dashboard_widget( 'chrx_dashboard', 'Chrx Service tag', 'chrx_display_static_dashboard_widget', null, null, 'normal', 'core' );
}

add_action( 'wp_dashboard_setup', 'chrx_add_dashboard_widget' );

function chrx_display_static_dashboard_widget() {
	echo '
	<div style="display:grid;justify-content:space-between;grid-template-columns:repeat(auto-fit,minmax(48%,1fr));grid-template-rows:1fr;grid-gap:20px;">
		<div>
			<img src="https://www.google.com/search?q=pic&client=opera&hs=4W2&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjB1vmLxJ_xAhW4RUEAHY0YA0UQ_AUoAXoECAEQAw&biw=1326&bih=627#imgrc=DzXNwqGpnLf-6M" style="border:1px solid #ccc;padding:2px;">
		</div>
		<div>
			<h2>Chris Ocen</h2>
			This Project is managed by <strong>Chris Ocen</strong>
			<ul>
				<li><a href="tel:+256788620379">0788620379</a></li>
				<li><a href="mailto:chrisocen4@gmail.com">ocenchris@gmail.com</a></li>
			</ul>
		</div>
		<div>

		<a class="twitter-timeline" href="https://twitter.com/ocen_chris?ref_src=twsrc%5Etfw">Tweets by ocen_chris</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

		</div>
	</div> ';
}
