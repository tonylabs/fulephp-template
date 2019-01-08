<footer class="footer-short">
    <div class="container">
        <hr>
        <nav class="row justify-content-between align-items-center">
            <div class="col-auto">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="#"><?php echo \Asset::img('logo.svg', array('width' => '24px;'));?></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><small><?php echo __('footer.lisence');?></small></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo \Uri::create('support/');?>"><small><?php echo __('footer.support');?></small></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><small><?php echo __('footer.term_of_service');?></small></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="<?php echo \Uri::create('about');?>"><small><?php echo __('footer.about');?></small></a>
                    </li>
                </ul>
            </div>
            <div class="col-auto text-sm-right">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <small class='text-muted'><?php echo __('footer.contact_us');?> <a href="mailto:support@tonylabs.com">support@tonylabs.com</a></small>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="row">
            <div class="col-7">
                <small>&copy; <?php echo \Date::forge(time())->format('%Y');?> <a href="//www.tonylabs.com">TONYLABS</a> Technology Co. Ltd. All Rights Reserved. &copy;上海拓朗信息技术有限公司 Ver.<?php echo \Fuel::VERSION;?></small>

            </div>
            <div class="col-5 text-right">
                <small><a href="http://www.miitbeian.gov.cn" target="_blank">沪ICP备14012658号</a></small>
            </div>
        </div>
    </div>
</footer>