<?php
passthru('echo updating...');
echo get_current_user();
exec('sudo cd /var/www/leon-schroijen.ga/public_html; sudo ./deploy.sh;', $result);
print_r($result);
exit();
