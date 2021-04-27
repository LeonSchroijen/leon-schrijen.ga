<?php
passthru('echo updating...');
echo get_current_user();
exec('cd /var/www/leon-schroijen.ga/public_html; sudo ./deploy.sh;', $result);
echo json_encode($result);
exit();
