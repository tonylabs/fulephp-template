<nav aria-label="breadcrumb" role="navigation" class="bg-success text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo \Uri::base(); ?>"><?php echo __('breadcrumb.home');?></a></li>
                    <li class="breadcrumb-item"><?php echo __('breadcrumb.authentication');?></li>
                    <li class="breadcrumb-item active"><?php echo __('breadcrumb.signup');?></li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<section class="bg-white space-sm pb-4 mb-4">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <h1 class="h2"><?php echo __('auth.signup.title');?></h1>
                <span class="lead"><?php echo __('auth.signup.subtitle');?></span>
            </div>
            <div class="col-auto text-right">
                <a href="<?php echo \Uri::create('auth/signin');?>" class="btn btn-success"><?php echo __('auth.signup.signin_button');?></a>
            </div>
        </div>
    </div>
</section>
<section class="flush-with-above height-80 d-block">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <p><?php echo __('auth.signup.description');?></p>
            </div>
        </div>
        <?php echo \Messages::get(); ?>
        <div class="row">
            <div class="col-12 col-md-4 order-md-2">
                <div class="alert alert-info text-small" role="alert">
                    <i class="icon-shield"></i>
                    <span><?php echo __('auth.signup.remark');?></span>
                </div>
            </div>
            <div class="col-12 col-md-8 order-md-1">
                <?php echo \Form::open(array('action' => \Uri::create('auth/signup'), 'method' => 'post', 'class' => 'row')); ?>
                <div class="col-12">
                    <div class="form-group">
                        <label for="register_email"><?php echo __('auth.signup.email');?>:
                            <span class="text-red">*</span>
                        </label>
                        <?php echo \Form::input('email', NULL, array('class' => 'form-control form-control-lg', 'id' => 'register_email', 'type' => 'email', 'required')); ?>
                        <small><?php echo __('auth.signup.email_help');?></small>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="register_password"><?php echo __('auth.signup.password');?>:
                            <span class="text-red">*</span>
                        </label>
                        <?php echo \Form::password('password', NULL, array('class' => 'form-control form-control-lg', 'id' => 'register_password', 'required')); ?>
                        <small><?php echo __('auth.signup.password_help');?></small>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="register_confirm"><?php echo __('auth.signup.confirm');?>:
                            <span class="text-red">*</span>
                        </label>
                        <?php echo \Form::password('confirm', NULL, array('class' => 'form-control form-control-lg', 'id' => 'register_confirm', 'required')); ?>
                        <small><?php echo __('auth.signup.confirm_help');?></small>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="captcha"><?php echo __('integration.application.captcha');?>:
                            <span class="text-red">*</span>
                        </label>
                        <?php echo \Form::input('captcha', NULL, array('class' => 'form-control form-control-lg', 'id' => 'captcha', 'required')); ?>
                    </div>
                </div>
                <div class="col-9">
                    <div class='form-group'>
                        <img src="<?= $captcha->generateImage($code) ?>" width="<?php $captcha->width;?>" height="<?php $captcha->height;?>" alt="Captcha" class="mt-3" />
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group text-right">
                        <button class="btn btn-success text-lowercase" type="submit"><?php echo __('auth.signup.next_button');?></button>
                    </div>
                </div>
                <?php echo \Form::close(); ?>
            </div>
        </div>
    </div>
</section>