<?php 
require_once('config.php');
$user_agent = (isset($_POST['useragent'])) ? $_POST['useragent'] :
$_SERVER['HTTP_USER_AGENT'];

$wurflConfig = new WURFL_Configuration_XmlConfig($wurflConfigFile);
$wurflManagerFactory = new WURFL_WURFLManagerFactory($wurflConfig);
$wurflManager = $wurflManagerFactory->create();
$device = $wurflManager->getDeviceForUserAgent($user_agent);

if ($device) {
	$groups = $wurflManager->getListOfGroups();
	$grouped_capabilities = array();
	foreach($groups as $a_group) {
		$grouped_capabilities[$a_group] = array();
		$capabilities = $wurflManager->getCapabilitiesNameForGroup($a_group);
		foreach ($capabilities as $cap) {
			$grouped_capabilities[$a_group][$cap] = $device->getCapability($cap);
		}
	}
}

$is_phone = ($device->getCapability('is_wireless_device') === 'true') ?
true : false;