<?php

#创建服务器
/**
 * SERVER_NAME主机名
 * SERVER_SOFTWARE服务器信息
 * DOCUMENT_ROOT根路径
 * HTTP_HOST http文件头
 * SCRIPT_NAME 当前文件路径
 * SCRIPT_FILENAME 文件绝对路径
 * PHP_SELF 当年文件本路径
 *
 */
$server = [
    'hostname' => $_SERVER['SERVER_NAME'],
    'server software' => $_SERVER['SERVER_SOFTWARE'],
    'Document root' => $_SERVER['DOCUMENT_ROOT'],
];

echo $server["Document root"];

#打印$server完整信息
print_r($server);

#localhost/phpsandbox/website2/server-info.php\

#创建客户端信息
$client = [
    'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
    'Client IP' => $_SERVER['REMOTE_ADDR'],
    'Remote Port' => $_SERVER['REMOTE_PORT'],
];
print_r($client);