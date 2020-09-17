<?php wp_footer();

$googleAnalytics = get_theme_mod('options_GA');

if ($googleAnalytics != '') {?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $googleAnalytics ?>"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', '<?php echo $googleAnalytics ?>');
</script>

<?php } else {}

?>

</body>

</html>