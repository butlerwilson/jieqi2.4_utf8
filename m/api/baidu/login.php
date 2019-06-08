<?php

define('JIEQI_MODULE_NAME', 'system');
define('JIEQI_NEED_SESSION', 1);
require_once '../../global.php';
include_once JIEQI_ROOT_PATH . '/lib/OpenSDK/Baidu/Open.php';
include_once './config.inc.php';
include_once './functions.php';
include_once '../include/lang_userapi.php';
include_once '../include/funuserapi.php';
jieqi_api_logininit();
OpenSDK_Baidu_Open::init($apiConfigs[$apiName]['appid'], $apiConfigs[$apiName]['appkey']);
$url = OpenSDK_Baidu_Open::getAuthorizeURL($apiConfigs[$apiName]['callback'], 'code', $_SESSION['jieqiUserApi'][$apiName]['state'], $apiConfigs[$apiName]['display']);
header('Location: ' . jieqi_headstr($url));