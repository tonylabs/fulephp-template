<?php echo \Html::doctype('html5'); ?>
<html lang="<?php echo \Lang::get_lang(); ?>">
<head>
    <title><?php echo (!empty($title)) ? $title : false; ?> | TONYLABS 上海拓朗信息技术有限公司</title>
    <?php echo (!empty($head)) ? $head : false; ?>
</head>
<body>
<?php if (!empty($nav)): ?>
<div class="nav-container">
    <?php echo $nav;?>
</div>
<?php endif;?>
<div class="main-container">
    <?php echo (!empty($content)) ? $content : NULL;?>
    <?php if (!empty($footer)) echo $footer; ?>
</div>
<?php echo \Asset::js('jquery.smartWizard.min.js'); ?>
<?php echo \Asset::js('flickity.pkgd.min.js'); ?>
<?php echo \Asset::js('scrollMonitor.js'); ?>
<?php echo \Asset::js('smooth-scroll.polyfills.js'); ?>
<?php echo \Asset::js('prism.js'); ?>
<?php echo \Asset::js('zoom.min.js'); ?>
<?php echo \Asset::js('theme.min.js'); ?>
<script type='text/javascript' charset='utf-8'>
    $(function () {

    });
</script>
</body>
</html>