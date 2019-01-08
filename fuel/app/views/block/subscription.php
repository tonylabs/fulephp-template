<section class="bg-dark" style="background:url('//cdn.tonylabs.com/assets/img/authkey/email_subscription_background.png') 50% 50% repeat">
    <div class="container">
        <div class="row section-intro">
            <div class="col-12 text-center">
                <p class='text-center'>
                    <?php echo \Asset::cdn('img/authkey/email_subscribe_animation.gif', array('class' => 'pb-3'));?>
                </p>
                <h3 class="h1"><?php echo __('subscription.title');?></h3>
            </div>
        </div>
        <?php echo \Form::open(array('action' => \Uri::create('subscribe/submit'), 'method' => 'post', 'id' => 'subscription')); ?>
        <div class="row mb-5">
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="form-group">
                    <label for="subscriber_name"><?php echo __('subscription.name');?></label>
                    <?php echo \Form::input('subscriber_name', NULL, array('class' => 'form-control form-control-lg text-capitalize', 'id' => 'subscriber_name', 'placeholder' => __('subscription.name_placeholder'), 'required')); ?>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="form-group">
                    <label for="subscriber_email"><?php echo __('subscription.email');?></label>
                    <?php echo \Form::input('subscriber_email', NULL, array('class' => 'form-control form-control-lg text-lowercase', 'id' => 'subscriber_email', 'placeholder' => __('subscription.email_placeholder'), 'type' => 'email', 'required')); ?>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="form-group">
                    <label for="button">&nbsp;</label>
                    <button id="button" type="submit" class="btn btn-lg btn-block btn-success"><?php echo __('subscription.button');?></button>
                </div>
            </div>
        </div>
        <?php echo \Form::close();?>
    </div>
</section>