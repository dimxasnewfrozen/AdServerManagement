
<?php
global $config;
?>

<script>
var base_url     = 'http://<?php echo $_SERVER["HTTP_HOST"] . $config["base_url"]; ?>/';
</script>
	

<script type="text/javascript" defer="defer" charset="utf-8" src="<?php echo MIN_URL . "/?g=main"; ?>" ></script>
<script type="text/javascript" defer="defer" charset="utf-8" src="<?php echo MIN_URL . "/?g=" . CONTORLLER; ?>" ></script>

</body>
</html>