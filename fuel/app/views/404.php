<section class="space-sm">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <?php echo \Asset::cdn('img/authkey/logo-shield.svg', array('width' => '65px'));?>
            </div>
        </div>
    </div>
</section>
<section class="height-80 flush-with-above">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-md-6 mb-4">
                <?php echo \Asset::cdn('img/authkey/error-404.svg', array('class' => 'w-100'));?>
            </div>
            <div class="col-12 col-md-7 col-lg-5 mb-4 text-center text-md-left">
                <h1 class="display-3">404</h1>
                <h2 class="lead">Ooops, the page is missing.</h2>
                <a href="<?php echo \Uri::base();?>" class="btn btn-success btn-lg">Back Home</a>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-8">
            <small>&copy; <?php echo \Date::forge(time())->format('%Y');?> <a href="//www.tonylabs.com">TONYLABS</a> Technology Co. Ltd. All Rights Reserved. &copy;上海拓朗信息技术有限公司</small>
        </div>
        <div class="col-4 text-right">
            <small><a href="http://www.miitbeian.gov.cn" target="_blank">沪ICP备14012658号-2</a></small>
        </div>
    </div>
</div>