<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['protocol'] = 'smtp';  //mail, sendmail, or smtp
$config['smtp_host'] = 'smtp.163.com';
$config['smtp_user'] = 'q51970117@163.com';
$config['smtp_pass'] = 'cdnknakrv';
$config['smtp_port'] = '25';
$config['smtp_timeout'] = '5';
$config['smtp_keepalive'] = 'FALSE';//是否启用 SMTP 持久连接
$config['charset'] = 'utf-8';  //字符集（utf-8, iso-8859-1 等）
$config['wordwrap'] = TRUE;  //是否启用自动换行
$config['mailtype'] = 'text';  //text or html
$config['validate'] = true; //是否验证邮件地址
$config['priority'] = 1; //Email 优先级（1 = 最高. 5 = 最低. 3 = 正常）
$config['crlf'] = "\r\n";

//r5620517@163.com----dgbgknai
//q51970117@163.com----cdnknakrv
//lgptwi2286279@163.com----g1893655