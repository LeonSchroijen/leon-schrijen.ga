<?php
passthru('echo updating...');
echo get_current_user();
passthru('sudo cd /var/www/leon-schroijen.ga/public_html; sudo git pull', $result);
echo $result;
exit();
