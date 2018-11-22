<?php

$content = file_get_contents( 'https://meta.trac.wordpress.org/browser/sites/trunk/wordpress.org/public_html/wp-content/plugins/plugin-directory/readme/class-parser.php?format=txt' );
if ( ! $content ) {
	echo '<h2>Error getting file contents</h2>';
}
if ( ! file_put_contents( 'class-parser.php', $content ) ) {
	echo '<h2>Error updating class-parser.php</h2>';
} else {
	echo '<h2>class-parser.php updated</h2>';
}
