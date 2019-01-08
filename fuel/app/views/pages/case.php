<nav aria-label="breadcrumb" role="navigation" class="bg-success text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo \Uri::base(); ?>"><?php echo __('breadcrumb.home'); ?></a></li>
                    <li class="breadcrumb-item"><?php echo __('breadcrumb.case'); ?></li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<section>
    <div class="container">
        <div class="row justify-content-center text-center section-intro">
            <div class="col-12 col-md-9 col-lg-8">
                <span class="title-decorative"><?php echo __('case.subtitle');?></span>
                <h2 class="display-4"><?php echo __('case.title');?></h2>
                <span class="lead"><?php echo __('case.description');?></span>
            </div>
        </div>
        <ul class="feature-list feature-list-sm row">
            <?php if (!empty($articles)): ?>
                <?php foreach ($articles as $article): ?>
                    <li class="col-12">
                        <a href="<?php echo \Uri::create('case/:slug', array('slug' => $article->slug)); ?>" class="case-study">
                            <div class="card card-lg bg-dark text-white">
                                <?php //echo \Asset::cdn('img/authkey/password-protection-hero.jpg', array('class' => 'bg-image opacity-20')); ?>
                                <div class="card-body">
                                    <div>
                                        <img alt="Image" src="https://image.flaticon.com/icons/png/512/1088/1088439.png"/>
                                    </div>
                                    <span class="h2"><?php echo $article->title;?></span>
                                    <span><?php echo \Str::truncate($article->content, 200, '...');?></span>
                                </div>
                            </div>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
</section>