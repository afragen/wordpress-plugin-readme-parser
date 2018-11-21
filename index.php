<?php

$content = file_get_contents( 'https://meta.trac.wordpress.org/browser/sites/trunk/wordpress.org/public_html/wp-content/plugins/plugin-directory/readme/class-parser.php?format=txt' );
file_put_contents( 'class-parser.php', $content );
echo '<h1>class-parser.php updated</h1>';
