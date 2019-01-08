<nav aria-label="breadcrumb" role="navigation" class="bg-success text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo \Uri::base(); ?>"><?php echo __('breadcrumb.home');?></a></li>
                    <li class="breadcrumb-item"><?php echo __('breadcrumb.authentication');?></li>
                    <li class="breadcrumb-item active"><?php echo __('breadcrumb.signin');?></li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<section class="bg-white space-sm pb-4">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <h1 class="h2"><?php echo __('auth.signin.title');?></h1>
                <span class="lead"><?php echo __('auth.signin.subtitle');?></span>
            </div>
            <div class="col-auto text-right">
                <a href="<?php echo \Uri::create('auth/signup');?>" class="btn btn-success"><?php echo __('auth.signin.signup_button');?></a>
            </div>
        </div>
    </div>
</section>
<section class="flush-with-above height-80 d-block">
    <div class="tab-content">
        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="general-tab">
            <div class="container">
                <div class="row mb-4">
                    <div class="col">
                        <p><?php echo __('auth.signin.description');?></p>
                    </div>
                </div>
                <?php echo \Messages::get(); ?>
                <div class="row">
                    <div class="col-12 col-md-4 order-md-2">
                        <div class="alert alert-info text-small" role="alert">
                            <i class="icon-shield"></i>
                            <span><?php echo __('auth.signin.remark');?></span>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 order-md-1">
                        <?php echo \Form::open(array('action' => \Uri::create('auth/signin'), 'method' => 'post', 'class' => 'row')); ?>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="register_email"><?php echo __('auth.signin.email');?>:
                                    <span class="text-red">*</span>
                                </label>
                                <?php echo \Form::input('email', NULL, array('class' => 'form-control form-control-lg', 'id' => 'register_email', 'type' => 'email', 'required')); ?>
                                <small><?php echo __('auth.signin.email_help');?></small>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="register_password"><?php echo __('auth.signin.password');?>:
                                    <span class="text-red">*</span>
                                </label>
                                <?php echo \Form::password('password', NULL, array('class' => 'form-control form-control-lg', 'id' => 'register_password', 'required')); ?>
                                <small><?php echo __('auth.signin.password_help');?></small>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <button class="btn btn-success text-lowercase" type="submit"><?php echo __('auth.signin.submit');?></button>
                            </div>
                        </div>
                        <?php echo \Form::close();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>