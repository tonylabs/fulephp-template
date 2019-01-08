<nav aria-label="breadcrumb" role="navigation" class="bg-success text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a
                                href="<?php echo \Uri::base(); ?>"><?php echo __('breadcrumb.home'); ?></a></li>
                    <li class="breadcrumb-item active"><?php echo __('breadcrumb.account'); ?></li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<section class="bg-white space-sm pb-4">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <h1 class="h2"><?php echo __('account.profile.title'); ?></h1>
            </div>
        </div>
    </div>
</section>
<section class="flush-with-above space-0">
    <div class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#general" role="tab"
                               aria-controls="general"
                               aria-selected="true"><?php echo __('account.profile.general.title'); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="keychain-tab" data-toggle="tab" href="#keychain" role="tab"
                               aria-controls="keychain"
                               aria-selected="false"><?php echo __('account.profile.keychain.title'); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="notifications-tab" data-toggle="tab" href="#notifications"
                               role="tab" aria-controls="notifications"
                               aria-selected="false"><?php echo __('account.profile.notification.title'); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="flush-with-above height-80 d-block">
    <div class="tab-content">
        <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
            <div class="container">
                <div class="row mb-4">
                    <div class="col">
                        <h5><?php echo __('account.profile.title'); ?></h5>
                    </div>
                </div>
                <?php echo \Messages::get(); ?>
                <div class="row">
                    <div class="col-12 col-md-4 order-md-2">
                        <div class="alert alert-info text-small" role="alert">
                            <i class="icon-shield"></i>
                            <span><?php echo __('account.profile.general.encryption');?></span>
                            <a href="#"><?php echo __('account.profile.general.privacy');?></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-8 order-md-1">
                        <?php echo \Form::open(array('action' => \Uri::current(), 'method' => 'post', 'class' => 'row')); ?>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="first_name"><?php echo __('account.profile.general.first_name');?>:
                                        <span class="text-red">*</span>
                                    </label>
                                    <?php echo \Form::input('profile_fields[first_name]', (!empty($current_user->profile_fields->first_name)) ? $current_user->profile_fields->first_name : NULL, array('class' => 'form-control form-control-lg', 'id' => 'first_name', 'required'));?>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <?php echo \Form::label(__('account.profile.general.last_name'), 'last_name');?>:
                                    <?php echo \Form::input('profile_fields[last_name]', (!empty($current_user->profile_fields->last_name)) ? $current_user->profile_fields->last_name : NULL, array('class' => 'form-control form-control-lg'));?>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email"><?php echo __('account.profile.general.email');?>:
                                        <span class="text-red">*</span>
                                    </label>
                                    <?php echo \Form::input('email', (!empty($current_user->email)) ? $current_user->email : NULL, array('class' => 'form-control form-control-lg', 'type' => 'email', 'id' => 'email', 'readonly', 'required'));?>
                                    <small><?php echo __('account.profile.general.email_help');?></small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <?php echo \Form::label(__('account.profile.general.city'), 'profile_fields[city]');?>:
                                    <?php echo \Form::input('profile_fields[city]', (!empty($current_user->profile_fields->city)) ? $current_user->profile_fields->city : NULL, array('class' => 'form-control form-control-lg'));?>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <?php echo \Form::label(__('account.profile.general.country'), 'profile_fields[country]');?>:
                                    <?php echo \Form::input('profile_fields[country]', (!empty($current_user->profile_fields->country)) ? $current_user->profile_fields->country : NULL, array('class' => 'form-control form-control-lg', 'required'));?>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <?php echo \Form::label(__('account.profile.general.website'), 'profile_fields[website]');?>:
                                    <?php echo \Form::input('profile_fields[website]', (!empty($current_user->profile_fields->website)) ? $current_user->profile_fields->website : NULL, array('class' => 'form-control form-control-lg', 'placeholder' => 'https://'));?>
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <?php echo \Form::label(__('account.profile.general.bio'), 'profile_fields[bio]');?>:
                                    <?php echo \Form::textarea('profile_fields[bio]', (!empty($current_user->profile_fields->bio)) ? $current_user->profile_fields->bio : NULL, array('class' => 'form-control form-control-lg', 'rows' => 4));?>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox custom-checkbox-switch">
                                        <?php echo \Form::checkbox('public', 1, false, array('class' => 'custom-control-input', 'id' => 'public'));?>
                                        <label class="custom-control-label" for="public"><?php echo __('account.profile.general.public');?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group text-right">
                                    <a href="<?php echo \Uri::create('account/destroy');?>" class="btn btn-danger" role="button"><?php echo __('account.profile.general.destroy');?></a>
                                    <button class="btn btn-success" type="submit"><?php echo __('account.profile.general.save');?></button>
                                </div>
                            </div>
                        <?php echo \Form::close();?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="keychain" role="tabpanel" arialabelledby="keychain-tab">
            <div class="container">
                <div class="row mb-4">
                    <div class="col">
                        <h5><?php echo __('account.profile.keychain.title'); ?></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <?php if (!empty($keys)):?>
                        <table class="table align-items-center">
                            <thead>
                            <tr>
                                <th scope="col"><?php echo __('account.profile.keychain.name'); ?></th>
                                <th scope="col"><?php echo __('account.profile.keychain.date'); ?></th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($keys as $key):?>
                            <tr>
                                <th scope="row">

                                </th>
                                <td>
                                    <span class="d-block"><?php echo \Str::truncate($key->handle, 10, '&bull;&bull;&bull;');?></span>
                                    <small class="text-muted"><?php echo date('d F, Y', $key->ctime);?></small>
                                </td>
                                <td class="text-right">
                                    <a href="Javascript:void(0);" role="button" class="btn btn-sm btn-success"
                                       data-toggle="modal" data-target="#modal-rename"><i
                                                class="icon-bookmark"></i> <?php echo __('account.profile.keychain.rename'); ?>
                                    </a>
                                    <a href="<?php echo \Uri::create(''); ?>" onclick="return confirm('?');"
                                       role="button" class="btn btn-sm btn-danger"><i
                                                class="icon-squared-cross"></i> <?php echo __('account.profile.keychain.remove'); ?>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                        <?php else:?>

                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-info text-small mb-0" role="alert">
                            <i class="icon-shield"></i>
                            <span>
                                            We will never distribute your email address to third parties. Read about email communication in our privacy policy.
                                        </span>
                            <a href="#">View privacy policy &rsaquo;</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <form>
                            <h5 class="mb-4">Notification Preferences</h5>
                            <div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="notify-mention" checked
                                           id="notify-mention">
                                    <label class="custom-control-label" for="notify-mention">Someone mentions me</label>
                                </div>
                            </div>
                            <div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="notify-request" checked
                                           id="notify-follow">
                                    <label class="custom-control-label" for="notify-follow">Someone follows me</label>
                                </div>
                            </div>
                            <div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="notify-share" checked
                                           id="notify-share">
                                    <label class="custom-control-label" for="notify-share">Someone shares my
                                        activty</label>
                                </div>
                            </div>
                            <div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="notify-message" checked
                                           id="notify-message">
                                    <label class="custom-control-label" for="notify-message">Someone messages me</label>
                                </div>
                            </div>
                            <div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="notify-adds" checked
                                           id="notify-adds">
                                    <label class="custom-control-label" for="notify-adds">Someone adds me to a
                                        project</label>
                                </div>
                            </div>
                            <div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="notify-sales"
                                           id="notify-sales">
                                    <label class="custom-control-label" for="notify-sales">Sales and promotions</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-secondary mt-4" disabled>Update preferences</button>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <form>
                            <h5>Notification Frequency</h5>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input id="notify-daily" type="radio" class="custom-control-input"
                                           value="notify-daily" name="notify-frequency">
                                    <label class="custom-control-label" for="notify-daily">Daily</label>
                                </div>
                            </div>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input id="notify-weekly" type="radio" class="custom-control-input"
                                           value="notify-weekly" name="notify-frequency" checked>
                                    <label class="custom-control-label" for="notify-weekly">Weekly</label>
                                </div>
                            </div>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input id="notify-monthly" type="radio" class="custom-control-input"
                                           value="notify-monthly" name="notify-frequency">
                                    <label class="custom-control-label" for="notify-monthly">Monthly</label>
                                </div>
                            </div>
                            <div>
                                <div class="custom-control custom-radio">
                                    <input id="notify-never" type="radio" class="custom-control-input"
                                           value="notify-never" name="notify-frequency">
                                    <label class="custom-control-label" for="notify-never">Never</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-secondary mt-4" disabled>Update frequency</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="modal-rename" tabindex="-1" role="dialog" aria-labelledby="rename" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-center-viewport" role="document">
        <div class="modal-content">
            <div class="modal-header modal-header-borderless justify-content-end">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-cross"></i></span>
                </button>
            </div>
            <div class="modal-body d-flex justify-content-center">
                <div class="text-center w-75">
                    <span class="h1">Howdy, I'm a modal</span>
                    <span class="lead">I'm centered inside the viewport for a more aesthetically pleasing experience.</span>
                    <?php echo \Form::input('name', NULL, array('class' => 'form-control form-control-lg', 'required'));?>
                </div>
            </div>
            <div class="modal-footer modal-footer-borderless justify-content-center">
                <button type="button" class="btn btn-lg btn-success my-4" data-dismiss="modal"><?php echo __('account.profile.keychain.save');?></button>
            </div>
        </div>
    </div>
</div>