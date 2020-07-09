<?php

$stream_context_options = stream_context_create(
	[
		'ssl'  => [
			'verify_peer'      => false,
			'verify_peer_name' => false,
		],
		'http' => [
			'user_agent' => 'WordPress.org Plugin Readme Parser',
		],
	]
);

$content = file_get_contents( 'https://meta.trac.wordpress.org/browser/sites/trunk/wordpress.org/public_html/wp-content/plugins/plugin-directory/readme/class-parser.php?format=txt', false, $stream_context_options );
if ( ! $content ) {
	echo '<h2>Error getting file contents</h2>';
}
if ( ! file_put_contents( __DIR__ . '/class-parser.php', $content ) ) {
	echo '<h2>Error updating class-parser.php</h2>';
} else {
	echo '<h2>class-parser.php updated</h2>';
}
