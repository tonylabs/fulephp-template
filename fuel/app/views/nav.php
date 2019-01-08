<div class="bg-dark navbar-dark" data-sticky="top">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="<?php echo \Uri::base();?>">TONYLABS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="icon-menu h4"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?php echo \Uri::create('case/');?>" class="nav-link"><?php echo __('nav.case');?></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo \Uri::create('support/');?>" class="nav-link"><?php echo __('nav.support');?></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo \Uri::create('about/');?>" class="nav-link"><?php echo __('nav.about');?></a>
                    </li>
                </ul>
                <?php if (!empty($current_user)):?>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-toggle-no-arrow p-lg-0" href="http://example.com" id="nav-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo \Asset::cdn('img/authkey/avatar-user.svg', array('class' => 'avatar avatar-xs'));?>
                            <span class="badge badge-danger">0</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right" aria-labelledby="nav-user-dropdown">
                            <a class="dropdown-item" href="<?php echo \Uri::create('account/notifications');?>"><?php echo __('nav.user.notifications');?> <span class="badge badge-danger">0</span></a>
                            <a class="dropdown-item" href="<?php echo \Uri::create('account/profile');?>"><?php echo __('nav.user.profile');?></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo \Uri::create('auth/signout');?>"><?php echo __('nav.user.signout');?></a>
                        </div>
                    </li>
                </ul>
                <?php else:?>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="<?php echo \Uri::create('auth/signin');?>" class="nav-link"><?php echo __('nav.signin');?></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo \Uri::create('auth/signup');?>" class="nav-link"><?php echo __('nav.signup');?></a>
                        </li>
                    </ul>
                    <ul class='navbar-nav withshadow'>
                        <li class='nav-item dropdown'>
                            <a class='nav-link dropdown-toggle' href='#' role='button' data-toggle='dropdown'>
                                <?php
                                switch($lang)
                                {
                                    case 'en':
                                        echo \Asset::cdn('img/svg/nations/4x3/us.svg', array('class' => 'nation mr-1', 'width' => 20)) . '<small>English</small>';
                                        break;
                                    case 'zh':
                                        echo \Asset::cdn('img/svg/nations/4x3/cn.svg', array('class' => 'nation mr-1', 'width' => 20)) . '<small>中文（简体）</small>';
                                        break;
                                }
                                ?>
                            </a>
                            <div class='dropdown-menu' aria-labelledby='languages' id='languages'>
                                <a class='dropdown-item <?php echo ($lang == 'en') ? 'active' : NULL; ?>' lang='en-us' href='?lang=en'><?php echo \Asset::cdn('img/svg/nations/4x3/us.svg', array('class' => 'nation mr-1', 'width' => 20));?> <small>English</small></a>
                                <a class='dropdown-item <?php echo ($lang == 'zh') ? 'active' : NULL; ?>' lang='zh-cn' href='?lang=zh'><?php echo \Asset::cdn('img/svg/nations/4x3/cn.svg', array('class' => 'nation mr-1', 'width' => 20));?> <small>中文（简体）</small></a>
                            </div>
                        </li>
                    </ul>
                <?php endif;?>
            </div>
        </nav>
    </div>
</div>