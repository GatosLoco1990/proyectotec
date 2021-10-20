<?php
require('Function_Backup.php');

echo backup_tables('us-cdbr-east-04.cleardb.com','b8d66d0a2ba985','6098f6f8','heroku_d3ef385f7a7a5ae');

$fecha=date("Y-m-d");
header("Content-disposition: attachment; filename=db-backup-".$fecha.".sql");
header("Content-type: MIME");
readfile("backups/db-backup-".$fecha.".sql");