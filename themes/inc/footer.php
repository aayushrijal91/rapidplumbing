<script>
    let globalAssetList = '<?= $jsonEncodedArray ?>';
    var SITE_URL = "<?php echo V_CDN_URL; ?>";
</script>

<script src="<?php echo V_CDN_URL . V_THEME_DIR; ?>_assets/scripts/vendor.min.js?v=1.1"></script>
<script src="<?php echo V_CDN_URL . V_THEME_DIR; ?>_assets/scripts/scripts.min.js?v=1.2"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>


<?php if (isset($authentication_area['footer']) && !empty($authentication_area['footer'])) {
    echo str_replace(array('<br>', '</br>'), array("", ""), $authentication_area['footer']);
} ?>
</body>

</html>