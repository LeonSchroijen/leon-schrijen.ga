<?php
passthru('echo updating...');
echo get_current_user();
echo passthru('/var/www/leon-schroijen.ga/public_html/deploy.sh');
exit();
