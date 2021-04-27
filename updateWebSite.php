<?php
passthru('echo updating...');
echo get_current_user();
passthru('sudo /var/www/leon-schroijen.ga/public_html/deploy.sh');
exit();
