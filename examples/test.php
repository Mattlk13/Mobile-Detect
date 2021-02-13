<?php
require_once dirname(__FILE__) . '/../Mobile_Detect.php';
/*
$detect = new Mobile_Detect;
$detect->setUserAgent('Mozilla/5.0 (iPhone; CPU iPhone OS 8_0_2 like Mac OS X) AppleWebKit/600.1.4 (KHTML, like Gecko) CriOS/38.0.2125.59 Mobile/12A405 Safari/600.1.4');
var_dump($detect->version('Chrome'));
var_dump($detect->version('iPhone'));
*/

/*
$user_agents = array(
    'android' => 'Mozilla/5.0 (Linux; Android 4.2; Nexus 7 Build/JOP40C) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Safari/535.19',
    'iphone6' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 6_0_1 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A523 Safari/8536.25',
    'blackberry' => 'Mozilla/5.0 (BB10; Touch) AppleWebKit/537.10+ (KHTML, like Gecko) Version/10.0.9.2372 Mobile Safari/537.10+'
);
$mobile_detect = new Mobile_Detect;

foreach($user_agents as $user_agent)
{
    $mobile_detect->setUserAgent($user_agent);
    var_dump($mobile_detect->isAndroidOS());
}
*/

$detect = new Mobile_Detect;
//$detect->setUserAgent('Mozilla/5.0 (Linux; U; Android 4.1.1; cs-cz; HUAWEI G510-0200 Build/HuaweiG510-0200) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30');
$detect->setHttpHeaders(array(
    'HTTP_X_WAP_PROFILE' => '',
    'HTTP_USER_AGENT'       => 'Mozilla/5.0 (Linux; U; Android 4.1.1; cs-cz; HUAWEI G510-0200 Build/HuaweiG510-0200) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30',
));
var_dump($detect->isMobile());
var_dump($detect->isTablet());
//var_dump($detect->version('IE'));