<?php
$xml = file_get_contents ('php://input');
$fh = fopen ('js710x..xml', 'r+');
fwrite ($fh, $xml);
fclose ($fh);
?>