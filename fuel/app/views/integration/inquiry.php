<nav aria-label="breadcrumb" role="navigation" class="bg-success text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo \Uri::base(); ?>"><?php echo __('breadcrumb.home');?></a></li>
                    <li class="breadcrumb-item"><?php echo __('breadcrumb.integration');?></li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<section class="bg-white space-sm pb-4">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <h1 class="h2"><?php echo __('integration.title');?></h1>
            </div>
            <div class="col-auto text-right">
                <a href="#" class="btn btn-success"><?php echo __('integration.choose_a_plan');?></a>
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
                            <a class="nav-link active" id="application-tab" data-toggle="tab" href="#application" role="tab" aria-controls="application" aria-selected="true"><?php echo __('integration.tabs.application_form');?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="requirement-tab" data-toggle="tab" href="#requirement" role="tab" aria-controls="requirement" aria-selected="false"><?php echo __('integration.tabs.document');?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="timeline-tab" data-toggle="tab" href="#timeline" role="tab" aria-controls="timeline" aria-selected="false"><?php echo __('integration.tabs.timeline');?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="fees-tab" data-toggle="tab" href="#fees" role="tab" aria-controls="fees" aria-selected="false"><?php echo __('integration.tabs.fees');?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="flush-with-above d-block">
    <div class="tab-content">
        <div class="tab-pane fade show active" id="application" role="tabpanel" aria-labelledby="application-tab">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 order-md-1">
                        <?php echo \Messages::get(); ?>
                        <?php echo \Form::open(array('action' => \Uri::current(), 'method' => 'post', 'class' => 'row')); ?>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="first_name"><?php echo __('integration.application.first_name');?>:
                                        <span class="text-red">*</span>
                                    </label>
                                    <?php echo \Form::input('first_name', NULL, array('class' => 'form-control form-control-lg', 'id' => 'first_name', 'required')); ?>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="last_name"><?php echo __('integration.application.last_name');?>:</label>
                                    <?php echo \Form::input('last_name', NULL, array('class' => 'form-control form-control-lg', 'id' => 'last_name')); ?>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="email"><?php echo __('integration.application.email');?>:
                                        <span class="text-red">*</span>
                                    </label>
                                    <?php echo \Form::input('email', NULL, array('class' => 'form-control form-control-lg', 'type' => 'email', 'id' => 'email', 'required')); ?>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="country"><?php echo __('integration.application.country');?>:
                                        <span class="text-red">*</span>
                                    </label>
                                    <?php echo \Form::input('country', NULL, array('class' => 'form-control form-control-lg', 'id' => 'country', 'required')); ?>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="platform"><?php echo __('integration.application.platform.label');?>:
                                        <span class="text-red">*</span>
                                    </label>
                                    <?php echo \Form::select('platform', '', array('' => __('integration.application.platform.select'), 'Application' => __('integration.application.platform.options.application'), 'CMS' => __('integration.application.platform.options.cms'), 'Third Party' => __('integration.application.platform.options.third_party'), 'Internal' => __('integration.application.platform.options.internal_system')), array('class' => 'form-control form-control-lg', 'id' => 'platform', 'required')); ?>
                                </div>
                            </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="programming_language"><?php echo __('integration.application.programming_language.label');?>:
                                    <span class="text-red">*</span>
                                </label>
                                <?php echo \Form::select('programming_language', '', array('' => __('integration.application.programming_language.select'), 'C' => 'C, C++, C#', 'Java' => 'Java', 'Python' => 'Python', 'PHP' => 'PHP'), array('class' => 'form-control form-control-lg', 'id' => 'programming_language', 'required')); ?>
                            </div>
                        </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="company"><?php echo __('integration.application.company');?>:
                                        <span class="text-red">*</span>
                                    </label>
                                    <?php echo \Form::input('company', NULL, array('class' => 'form-control form-control-lg', 'id' => 'company', 'required')); ?>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="contact[name]"><?php echo __('integration.application.contact_name');?>:
                                        <span class="text-red">*</span>
                                    </label>
                                    <?php echo \Form::input('contact[name]', NULL, array('class' => 'form-control form-control-lg', 'id' => 'contact_name', 'required')); ?>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="contact[email]"><?php echo __('integration.application.contact_email');?>:
                                        <span class="text-red">*</span>
                                    </label>
                                    <?php echo \Form::input('contact[email]', NULL, array('class' => 'form-control form-control-lg', 'type' => 'email', 'id' => 'contact_email', 'required')); ?>
                                    <small></small>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description"><?php echo __('integration.application.description');?>:
                                        <span class="text-red">*</span>
                                    </label>
                                    <?php echo \Form::textarea('description', NULL, array('class' => 'form-control form-control-lg', 'rows' => 8, 'id' => 'description', 'required')); ?>
                                    <small></small>
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
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox custom-checkbox-switch">
                                        <input type="checkbox" class="custom-control-input" name="copy_me" value="1" id="copy_me" />
                                        <label class="custom-control-label" for="copy_me"><?php echo __('integration.application.copy_me');?></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group text-right">
                                    <button class="btn btn-success" type="submit"><?php echo __('integration.application.submit');?></button>
                                </div>
                            </div>
                        <?php echo \Form::close();?>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="requirement" role="tabpanel" arialabelledby="requirement-tab">
            <div class="container">
                <div class="row mb-4">
                    <div class="col">
                        <h5><?php echo __('integration.tabs.requirements');?></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="table align-items-center">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Created</th>
                                <th scope="col">Author</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="text-small">
                                <th scope="row">
                                    <a href="#" class="d-flex align-items-center">


                                        <div class="thumbnail thumbnail-sm">
                                            <i class="icon-text-document-inverted text-primary h4"></i>
                                        </div>
                                        <span class="text-body">Cover letter draft</span>
                                    </a>
                                </th>
                                <td>28/11/2017</td>
                                <td>You</td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-sm btn-outline-primary dropdown-toggle dropdown-toggle-no-arrow" type="button" id="dropdownMenuButton-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-dots-three-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-sm" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Download</a>
                                            <a class="dropdown-item" href="#">Share</a>
                                            <a class="dropdown-item" href="#">Comment</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-small">
                                <th scope="row">
                                    <a href="#" class="d-flex align-items-center">


                                        <div class="thumbnail thumbnail-sm">
                                            <i class="icon-folder-video text-primary h4"></i>
                                        </div>
                                        <span class="text-body">Videos</span>
                                    </a>
                                </th>
                                <td>--</td>
                                <td>Anand</td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-sm btn-outline-primary dropdown-toggle dropdown-toggle-no-arrow" type="button" id="dropdownMenuButton-10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-dots-three-horizontal"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-sm" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Download</a>
                                            <a class="dropdown-item" href="#">Share</a>
                                            <a class="dropdown-item" href="#">Comment</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="card card-lg">
                            <div class="card-body">
                                <form class="wizard sw-main sw-theme-default">
                                    <ul class="nav nav-tabs text-center row justify-content-center step-anchor">
                                        <li class="col-3 col-md-2 active"><a href="#first" class="step-circle step-circle-sm">1</a>
                                        </li>
                                        <li class="col-3 col-md-2"><a href="#second" class="step-circle step-circle-sm">2</a>
                                        </li>
                                        <li class="col-3 col-md-2"><a href="#third" class="step-circle step-circle-sm">3</a>
                                        </li>
                                        <li class="col-3 col-md-2"><a href="#fourth" class="step-circle step-circle-sm">4</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content sw-container" style="min-height: 278px;">
                                        <div id="first" class="step-content" style="display: block;">
                                            <div class="row justify-content-around align-items-center">
                                                <div class="col-8 col-md-6 col-lg-4 mb-4">
                                                    <?php echo \Asset::cdn('img/authkey/file.svg', array('class' => 'w-100'));?>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-5 mb-4">
                                                    <div>
                                                        <h6 class="title-decorative mb-2">Step 1.</h6>
                                                        <h4 class="mb-2"><?php echo __('integration.timeline.step1.title');?></h4>
                                                        <p><?php echo __('integration.timeline.step1.description');?></p>
                                                    </div>
                                                    <button class="btn btn-success sw-btn-next" type="button"><?php echo __('integration.timeline.step1.button');?></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="second" class="step-content">
                                            <div class="row justify-content-around align-items-center">
                                                <div class="col-8 col-md-6 col-lg-4 mb-4">
                                                    <?php echo \Asset::cdn('img/authkey/solution.svg', array('class' => 'w-100'));?>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-5 mb-4">
                                                    <div>
                                                        <h6 class="title-decorative mb-2">Step 2.</h6>
                                                        <h4 class="mb-2"><?php echo __('integration.timeline.step1.title');?></h4>
                                                        <p><?php echo __('integration.timeline.step1.description');?></p>
                                                    </div>
                                                    <button class="btn btn-success sw-btn-next" type="button"><?php echo __('integration.timeline.step1.button');?></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="third" class="step-content">
                                            <div class="row justify-content-around align-items-center">
                                                <div class="col-8 col-md-6 col-lg-4 mb-4">
                                                    <?php echo \Asset::cdn('img/authkey/code.svg', array('class' => 'w-100'));?>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-5 mb-4">
                                                    <div>
                                                        <h6 class="title-decorative mb-2">Step 3.</h6>
                                                        <h4 class="mb-2"><?php echo __('integration.timeline.step1.title');?></h4>
                                                        <p><?php echo __('integration.timeline.step1.description');?></p>
                                                    </div>
                                                    <button class="btn btn-success sw-btn-next" type="button"><?php echo __('integration.timeline.step1.button');?></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="fourth" class="step-content">
                                            <div class="row justify-content-around align-items-center">
                                                <div class="col-8 col-md-6 col-lg-4 mb-4">
                                                    <?php echo \Asset::cdn('img/authkey/lock.svg', array('class' => 'w-100'));?>
                                                </div>
                                                <div class="col-12 col-md-6 col-lg-5 mb-4">
                                                    <div>
                                                        <h6 class="title-decorative mb-2">Step 4.</h6>
                                                        <h4 class="mb-2"><?php echo __('integration.timeline.step1.title');?></h4>
                                                        <p><?php echo __('integration.timeline.step1.description');?></p>
                                                    </div>
                                                    <button class="btn btn-success sw-btn-next" type="button"><?php echo __('integration.timeline.step1.button');?></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="fees" role="tabpanel" aria-labelledby="fees-tab">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success text-small mb-3" role="alert">
                            <i class="icon-shield"></i>
                            <span>We will never distribute your email address to third parties. Read about email communication in our privacy policy.</span><a href="#">View privacy policy &rsaquo;</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="table table-bordered table-responsive pricing">
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-dark">
    <div class="container">
        <div class="row justify-content-center text-center section-intro">
            <div class="col-12 col-md-9 col-lg-8">
                <span class="title-decorative"><?php echo __('client.subtitle');?></span>
                <h2 class="display-4"><?php echo __('client.title');?></h2>
                <span class="lead"><?php echo __('client.description');?></span>
            </div>
        </div>
    </div>
    <div class="main-carousel" data-flickity='{ "cellAlign": "center", "contain": true, "prevNextButtons": true, "pageDots":true, "wrapAround":true, "autoPlay":5000, "imagesLoaded":true }'>
        <div class="carousel-cell col-9 col-md-8 col-lg-3 text-center">
            <a href="#" class="d-block mb-3">
                <?php echo \Asset::cdn('img/authkey/partners/aliyun-logo.png', array('class' => 'img-fluid rounded'));?>
            </a>
            <span class="h6">AliYun</span>
        </div>
        <div class="carousel-cell col-9 col-md-8 col-lg-3 text-center">
            <a href="#" class="d-block mb-3">
                <?php echo \Asset::cdn('img/authkey/partners/microchip-logo.png', array('class' => 'img-fluid rounded'));?>
            </a>
            <span class="h6">Microchip</span>
        </div>
        <div class="carousel-cell col-9 col-md-8 col-lg-3 text-center">
            <a href="#" class="d-block mb-3">
                <?php echo \Asset::cdn('img/authkey/partners/siliconlabs-logo.png', array('class' => 'img-fluid rounded'));?>
            </a>
            <span class="h6">Silicon Labs</span>
        </div>
        <div class="carousel-cell col-9 col-md-8 col-lg-3 text-center">
            <a href="#" class="d-block mb-3">
                <?php echo \Asset::cdn('img/authkey/partners/microchip-logo.png', array('class' => 'img-fluid rounded'));?>
            </a>
            <span class="h6">Bench - Accounting for creative people</span>
        </div>
    </div>
</section>