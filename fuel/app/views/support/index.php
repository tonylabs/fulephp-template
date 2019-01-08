<nav aria-label="breadcrumb" role="navigation" class="bg-success text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo \Uri::base(); ?>"><?php echo __('breadcrumb.home'); ?></a></li>
                    <li class="breadcrumb-item"><?php echo __('breadcrumb.support'); ?></li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<section class="bg-success text-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-auto text-center">
                <span class="title-decorative"><?php echo __('support.subtitle'); ?></span>
                <h1 class="display-4"><?php echo __('support.title'); ?></h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <form class="card card-sm">
                    <div class="card-body row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="icon-magnifying-glass h4 text-body"></i>
                        </div>
                        <div class="col">
                            <?php echo \Form::input('keyword', NULL, array('class' => 'form-control form-control-lg form-control-borderless', 'placeholder' => __('support.search.placeholder')));?>
                        </div>
                        <div class="col-auto">
                            <?php echo \Form::input('submit', __('support.search.button'), array('class' => 'btn btn-lg btn-success', 'type' => 'submit'));?>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section>
    <div class='container'>
        <div class='row justify-content-center mb-5'>
            <div class='col-auto'>
                <h3 class='h4'><?php echo __('support.Browse topic by category'); ?></h3>
            </div>
        </div>
        <div class='row justify-content-center'>
            <div class='col-12 col-lg-10'>
                <ul class='feature-list feature-list-sm row'>
                    <?php if (!empty($categories)): ?>
                        <?php foreach ($categories as $category): ?>
                            <li class='col-6 col-md-4'>
                                <a class='card text-center'
                                   href='<?php echo \Uri::create('support/:category', array('category' => $category->slug)); ?>'>
                                    <div class='card-body'>
                                        <i class='<?php echo (!empty($category->icon)) ? $category->icon : NULL; ?> display-4'></i>
                                        <h6 class='title-decorative'><?php echo $category->name; ?></h6>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <li class='col-6 col-md-4'>
                        <a class='card text-center' href='<?php echo \Uri::create('support/resources'); ?>'>
                            <div class='card-body'>
                                <i class='icon-folder text-indigo display-4'></i>
                                <h6 class='title-decorative'><?php echo __('support.resources'); ?></h6>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class='flush-with-above'>
    <div class='container'>
        <div class='row justify-content-center mb-5'>
            <div class='col-auto'>
                <h3 class='h4'>Popular articles by category</h3>
            </div>
        </div>
        <ul class='feature-list feature-list-sm row'>
            <?php if (!empty($categories)): ?>
                <?php foreach ($categories as $category): ?>
                    <div class='col-12 col-md-6'>
                        <div class='card'>
                            <div class='card-header d-flex justify-content-between'>
                                <div>
                                    <span class='h6 text-bold'><?php echo $category->name; ?></span>
                                    <small class='badge badge-pill badge-secondary opacity-50 ml-1 mt-1'><?php echo (!empty($category->total_posts)) ? $category->total_posts : 0; ?></small>
                                </div>
                                <a href='<?php echo \Uri::create('support/:category', array('category' => $category->slug)); ?>'
                                   class='text-small text-capitalize'><?php echo __('support.view_all'); ?> &rsaquo;</a>
                            </div>
                            <div class='card-body'>
                                <ul class='list-unstyled list-spacing-sm'>
                                    <?php if (!empty($category->articles)): ?>
                                        <?php foreach ($category->articles as $article): ?>
                                            <li>
                                                <i class='icon-text-document text-muted mr-1'></i>
                                                <a href='<?php echo \Uri::create('support/:category/:title', array('category' => $category->slug, 'title' => $article->slug)); ?>'><?php echo \Str::truncate($article->title, 40, '...'); ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
        <div class='row justify-content-center text-center section-outro'>
            <div class='col-lg-4 col-md-5'>
                <h6>Didn't find what you were after?</h6>
                <p>As we’re always improving the knowledgebase, your feedback is much appreciated</p>
                <a href='mailto:support@managebus.com'>Contact support &rsaquo;</a>
            </div>
        </div>
    </div>
</section>

<section class="flush-with-above">
    <div class="container">
        <ul class="row mb-3 feature-list feature-list-sm">
            <li class="col-12 col-md-6 col-lg-4">
                <div class="card card-lg">
                    <a href="#">
                        <?php echo \Asset::cdn('img/authkey/datacenters/datacenter-china-hangzhou.jpg', array('class' => 'card-img-top')); ?>
                    </a>
                    <div class="card-body">
                        <a href="#">
                            <h4 class="card-title mb-3">China Server</h4>
                        </a>
                        <p class="card-text">Let's just say it was more of a lite-stroll.</p>
                    </div>
                </div>
            </li>
            <li class="col-12 col-md-6 col-lg-4">
                <div class="card card-lg">
                    <a href="#">
                        <?php echo \Asset::cdn('img/authkey/datacenters/datacenter-mid-east-dubai.jpg', array('class' => 'card-img-top')); ?>
                    </a>
                    <div class="card-body">
                        <a href="#">
                            <h4 class="card-title mb-3">Mid-East Server</h4>
                        </a>
                        <p class="card-text">New to the world of prototyping? Start here.</p>
                    </div>
                </div>
            </li>
            <li class="col-12 col-md-6 col-lg-4">
                <div class="card card-lg">
                    <a href="#">
                        <?php echo \Asset::cdn('img/authkey/datacenters/datacenter-erskine-park.jpg', array('class' => 'card-img-top')); ?>
                    </a>
                    <div class="card-body">
                        <a href="#">
                            <h4 class="card-title mb-3">US Server</h4>
                        </a>
                        <p class="card-text">Thoughts from our business manager</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>