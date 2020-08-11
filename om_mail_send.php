<?php
include_once($_SERVER["DOCUMENT_ROOT"].'/common.php');
include_once($_SERVER["DOCUMENT_ROOT"].'/config.php');

require_once G5_PATH.'/om_lib/autoload.php';
use Mail\Mail;

$om_mail_content = array($wr_1,$wr_2,$wr_3,$om_wr_sum4,$om_wr_sum5);
new Mail($om_mail_content, $bo_table);
?>
