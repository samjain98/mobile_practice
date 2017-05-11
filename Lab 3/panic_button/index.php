?php 
require_once('../explore/device.php'); 
$device       = $wurflManager->getDeviceForHttpRequest($_SERVER);
$has_radio    = $device->getCapability('has_cellular_radio');
$phone_string = $device->getCapability('xhtml_make_phone_call_string');

// Determine if the requesting device is really a phone
$is_phone = false;

if ($has_radio === 'true' && $phone_string && $phone_string !== 'none') {
  $is_phone = true;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>I'm Freaking Out! : AcedIt! Test Prep Services</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<div id="content">
  <h1>I'm Freaking Out!</h1>

    <div id="panic_button">
      <img src="button.png" alt="HELP!" />
    </div>

    <h2>Help is only a phone call away.</h2>
    <div id="big_number">
    503-555-2939
    </div>

  <p>Pre-test late-night jitters? A math problem that just won't budge? Our expert on-call tutors are standing by to help you through tough moments.</p>
</div>
</body>
</html>