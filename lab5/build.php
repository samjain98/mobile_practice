<!DOCTYPE html> 
<html> 
	<head> 
	<meta charset="UTF-8" />
	<title>The Tartanator</title> 
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0rc1/jquery.mobile-1.0rc1.min.css" />
  <script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.0rc1/jquery.mobile-1.0rc1.min.js"></script>
  <link rel="stylesheet" href="tartans/tartans.css" />
</head> 
<body> 

<div data-role="header" data-position="fixed">
	  <a href="tartans.html" data-rel="back" data-icon="back"
data-role="button">Back</a>
		<h1>Tartan Builder</h1>
</div><!-- /header -->
    
<div data-role="content">
  <form id="tartanator_form">
    <ul data-role="listview" id="tartanator_form_list">
      <li data-role="list-divider">Tell us about your tartan</li>
        <li data-role="fieldcontain">
          <label for="tartan_name">Tartan Name</label>
          <input type="text" name="name" id="tartan_name"
placeholder="Tartan Name" />
        </li>
        <li data-role="fieldcontain">
          <label for="tartan_info">Tartan Info</label>
          <textarea cols="40" rows="8" name="tartan_info"
id="tartan_info" placeholder="Optional tartan description
or info"></textarea>
        </li>
    <li data-role="list-divider">Build your colors</li>
      <?php for ($i = 0; $i < 6; $i++): // 6 color fields ?>
      <li class="colorset">
        <div data-role="fieldcontain" class="color-input">
        <label class="select" for="color-<?php print $i ?>">
        Color</label>
          <select name="colors[]" id="color-<?php print $i ?>" >
            <option value="">Select a Color</option>
            <option value="#000000">Black</option>
            <option value="#ffffff">White</option>
          </select>
        </div>
        <div data-role="fieldcontain" class="size-input">
          <label for="size-<?php print $i ?>">Stitch Count</label>
          <input id="size-<?php print $i ?>" type="range" min="2"
step="2" max="72" autocomplete="off" name="sizes[]" value="2" />
        </div>
      </li>
      <?php endfor; ?>
    </ul>
  </form>
</div><!-- /content -->

<div data-role="footer" data-position="fixed" data-theme="c">
		Bring forrit the tartan!
</div><!-- /footer -->
</body>