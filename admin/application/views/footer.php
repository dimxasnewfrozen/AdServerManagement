<?php
global $config;
?>

<script>
var base_url     = 'http://<?php echo $_SERVER["HTTP_HOST"] . $config["base_url"]; ?>/';
</script>
	
<script type="text/javascript" charset="utf-8" src="<?php echo MIN_URL . "/?g=main"; ?>" ></script>

<?php
if (CONTORLLER != "main")
{
	?><script type="text/javascript" charset="utf-8" src="<?php echo MIN_URL . "/?g=" . CONTORLLER; ?>" ></script><?php
}
?>

</body>
</html>