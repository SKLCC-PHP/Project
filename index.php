<?php

/**
* 检测服务器环境，及路由控制。
* @since 2014-02-021
* @author iat.net.cn@gmail.com
*/

if(!file_exists('Data/Install/INSTALL.LOCK'))
{
    header('Location: ./Public/install/');
}
else
{
    include './Public/admin/index.php';
}
