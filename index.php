<?php
$GLOBALS['SKIP_AUTH'] = true;

include("config.php");
include("header.php");
?>

<?php if($cronofy->access_token == "") { ?>
<a class="btn btn-primary btn-success" href="oauth/">
  Login
</a>
<?php } else { ?>
  <a href="profiles/">Account Profiles</a>
  <br />
  <a href="channels/">Channels</a>
  <br />
  <a href="free_busy/">Free busy</a>
  <br />
  <a href="enterprise_connect/">Enterprise Connect</a>
  <br />
  <a href="availability/">Availability API</a>
<?php } ?>

<?php include("footer.php"); ?>
