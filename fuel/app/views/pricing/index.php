<nav aria-label="breadcrumb" role="navigation" class="bg-success text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo \Uri::base(); ?>"><?php echo __('breadcrumb.home');?></a></li>
                    <li class="breadcrumb-item"><?php echo __('breadcrumb.pricing');?></li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<section>
    <div class="container">
        <div class="row justify-content-center text-center section-intro">
            <div class="col-12 col-md-9 col-lg-8">
                <span class="title-decorative"><?php echo __('pricing.subtitle');?></span>
                <h2 class="display-4"><?php echo __('pricing.title');?></h2>
                <span class="lead"><?php echo __('pricing.description');?></span>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-auto">
                <nav class="nav btn-group" role="tablist">
                    <a href="#pricing-monthly" class="btn btn-lg btn-outline-success active" id="pricing-monthly-tab" data-toggle="tab" aria-controls="pricing-monthly"><?php echo __('pricing.plans.monthly.title');?></a>
                    <a href="#pricing-yearly" class="btn btn-lg btn-outline-success" id="pricing-yearly-tab" data-toggle="tab" aria-controls="pricing-yearly"><?php echo __('pricing.plans.yearly.title');?></a>
                </nav>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="pricing-monthly" role="tab">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card pricing card-lg">
                            <div class="card-body">
                                <h5><?php echo __('pricing.plans.monthly.personal.title');?></h5>
                                <span class="display-3 price-collapse collapse show"><?php echo __('pricing.plans.monthly.personal.price');?></span>
                                <span class="text-small"><?php echo __('pricing.plans.monthly.personal.unit');?></span>
                                <span class="h6"><?php echo __('pricing.plans.includes');?>:</span>
                                <ul class="list-unstyled">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <a href="#" class="btn btn-lg btn-outline-success"><?php echo __('pricing.plans.purchase');?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card pricing card-lg bg-dark">
                            <div class="card-body">
                                <h5><?php echo __('pricing.plans.monthly.group.title');?></h5>
                                <span class="display-3"><?php echo __('pricing.plans.monthly.group.price');?></span>
                                <span class="text-small"><?php echo __('pricing.plans.monthly.group.unit');?></span>
                                <span class="h6"><?php echo __('pricing.plans.includes');?>:</span>
                                <ul class="list-unstyled">
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                                <a href="#" class="btn btn-lg btn-success"><?php echo __('pricing.plans.purchase');?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card pricing card-lg">
                            <div class="card-body">
                                <h5><?php echo __('pricing.plans.monthly.enterprise.title');?></h5>
                                <span class="display-3"><?php echo __('pricing.plans.monthly.enterprise.price');?></span>
                                <span class="text-small"><?php echo __('pricing.plans.monthly.enterprise.unit');?></span>
                                <span class="h6"><?php echo __('pricing.plans.includes');?>:</span>
                                <ul class="list-unstyled">
                                    <li></li>
                                </ul>
                                <a href="<?php echo \Uri::create('integration/inquiry');?>" class="btn btn-lg btn-outline-success"><?php echo __('pricing.plans.inquiry');?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pricing-yearly" role="tab">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card pricing card-lg">
                            <div class="card-body">
                                <h5><?php echo __('pricing.plans.yearly.personal.title');?></h5>
                                <span class="display-3 price-collapse collapse show">$0</span>
                                <span class="text-small">per user / month</span>
                                <span class="h6"><?php echo __('pricing.plans.includes');?>:</span>
                                <ul class="list-unstyled">
                                    <li>1 Active project</li>
                                    <li>2 Repositories</li>
                                    <li>2 Collaborators</li>
                                </ul>
                                <a href="#" class="btn btn-lg btn-outline-success">Download now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card pricing card-lg">
                            <div class="card-body">
                                <h5><?php echo __('pricing.plans.yearly.group.title');?></h5>
                                <span class="display-3">$19</span>
                                <span class="text-small">per user / month</span>
                                <span class="h6"><?php echo __('pricing.plans.includes');?>:</span>
                                <ul class="list-unstyled">
                                    <li>1 Active project</li>
                                    <li>2 Repositories</li>
                                    <li>2 Collaborators</li>
                                </ul>
                                <a href="#" class="btn btn-lg btn-success">Inquiry Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card pricing card-lg">
                            <div class="card-body">
                                <h5><?php echo __('pricing.plans.yearly.enterprise.title');?></h5>
                                <span class="display-3">$39</span>
                                <span class="text-small">per user / month</span>
                                <span class="h6"><?php echo __('pricing.plans.includes');?>:</span>
                                <ul class="list-unstyled">
                                    <li>
                                        Unlimited active projects
                                    </li>
                                    <li>
                                        Unlimited repositories
                                    </li>
                                    <li>
                                        Unlimited collaborators
                                    </li>
                                </ul>
                                <a href="#" class="btn btn-lg btn-outline-success">Inquiry Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row section-outro justify-content-center mb-5">
            <div class="col-auto">
                <h4><?php echo __('pricing.reviews.title');?></h4>
            </div>
        </div>
        <ul class="row feature-list justify-content-center">
            <li class="col-12 col-md-6 col-lg-5">
                <div class="media">
                    <?php echo \Asset::cdn('img/authkey/avatar-user.svg', array('class' => 'avatar'));?>
                    <div class="media-body">
                        <p class="mb-1">
                            “Let’s get one thing straight, this theme’s a straight-up winner. No posers here, just beautiful design and code.”
                        </p>
                        <small>Daniel Cameron</small>
                    </div>
                </div>
            </li>
            <li class="col-12 col-md-6 col-lg-5">
                <div class="media">
                    <?php echo \Asset::cdn('img/authkey/avatar-user.svg', array('class' => 'avatar'));?>
                    <div class="media-body">
                        <p class="mb-1">
                            “With Wingman, we were able to turn out a stunning landing page and compelling MVP for our SaaS web app in no time.”
                        </p>
                        <small>Caitlyn Halsy, Bench</small>
                    </div>
                </div>
            </li>
            <li class="col-12 col-md-6 col-lg-5">
                <div class="media">
                    <?php echo \Asset::cdn('img/authkey/avatar-user.svg', array('class' => 'avatar'));?>
                    <div class="media-body">
                        <p class="mb-1">
                            “Not only has it allowed us to get our product into the hands of customers quickly - it’s also saved us a ton of money.”
                        </p>
                        <small>Toby Marsh, Movend</small>
                    </div>
                </div>
            </li>
            <li class="col-12 col-md-6 col-lg-5">
                <div class="media">
                    <?php echo \Asset::cdn('img/authkey/avatar-user.svg', array('class' => 'avatar'));?>
                    <div class="media-body">
                        <p class="mb-1">
                            “Using other templates just doesn’t feel the same anymore - none have the polish and intuitive design of Wingman”
                        </p>
                        <small>Lucille Freebody, Product Designer</small>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<section>
    <div class="container">
        <div class="row justify-content-center section-intro">
            <div class="col-auto">
                <h2 class="h1"><?php echo __('faq.title');?></h2>
            </div>
        </div>
        <ul class="row feature-list feature-list-sm justify-content-center">
            <li class="col-12 col-md-6 col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h6><?php echo __('faq.activation.title');?></h6>
                        <p><?php echo __('faq.activation.description');?></p>
                    </div>
                </div>
            </li>
            <li class="col-12 col-md-6 col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h6><?php echo __('faq.lost.title');?></h6>
                        <p><?php echo __('faq.lost.description');?></p>
                    </div>
                </div>
            </li>
            <li class="col-12 col-md-6 col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h6>What do you mean by ‘unlimited’?</h6>
                        <p>
                            Quisque ultrices placerat cursus quisque ut. Tincidunt faucibus porta quisque eget pharetra. Aliquet nulla ut id risus auctor.
                        </p>
                    </div>
                </div>
            </li>
            <li class="col-12 col-md-6 col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h6>Do you cater to custom jobs?</h6>
                        <p>
                            Mi luctus et. Justo mauris mi turpis suspendisse rutrum. Eros natoque justo at nulla vitae mollis sapien ad. Sem tortor pellentesque magna nec et. Nibh dolor dolor et adipiscing fringilla. Sed eu aliquam.
                        </p>
                    </div>
                </div>
            </li>
            <li class="col-12 col-md-6 col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h6><?php echo __('faq.subscription.title');?></h6>
                        <p><?php echo __('faq.subscription.description');?></p>
                    </div>
                </div>
            </li>
            <li class="col-12 col-md-6 col-lg-5">
                <div class="card">
                    <div class="card-body">
                        <h6><?php echo __('faq.cancellation.title');?></h6>
                        <p><?php echo __('faq.cancellation.description');?></p>
                    </div>
                </div>
            </li>
        </ul>
        <div class="row justify-content-center text-center section-outro">
            <div class="col-lg-4 col-md-5">
                <h6>Did we miss something?</h6>
                <p>Feel free to drop us a line with any fruther questions. One of our support team will get back to you ASAP.</p>
                <a href="mailto:support@tonylabs.com">Get in touch &rsaquo;</a>
            </div>
        </div>
    </div>
</section>