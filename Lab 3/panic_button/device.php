<?php
require_once(config.php);
$wurflConfig = new WURFL_Configuration_XmlConfig($wurflConfigFile);
$wurflManagerFactory = new WURFL_WURFLManagerFactory($wurflConfig);
$wurflManager = $wurflManagerFactory->create();
$is_phone = ($device->getCapability('is_wireless_device') === 'true') ?
true : false;
?>