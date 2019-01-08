<nav aria-label="breadcrumb" role="navigation" class="bg-success text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo \Uri::base(); ?>">Home</a></li>
                    <li class="breadcrumb-item">Support</li>
                </ol>
            </div>
        </div>
    </div>
</nav>
<section>
    <div class='container'>
        <div class='row justify-content-center mb-5'>
            <div class='col-auto'>
                <h3 class='h4'>Browse topic by category</h3>
            </div>
        </div>
        <div class='row justify-content-center'>
            <div class='col-12 col-lg-10'>
                <ul class='feature-list feature-list-sm row'>
                    <?php if (!empty($categories)): ?>
                        <?php foreach ($categories as $category): ?>
                            <li class='col-6 col-md-4'>
                                <a class='card text-center'
                                   href='<?php echo \Uri::create('support/:category', array('category' => \Inflector::friendly_title($category->name, '-', true))); ?>'>
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
                                    <small class='badge badge-pill badge-secondary opacity-50 ml-1 mt-1'><?php echo (!empty($category->total_posts)) ? $category->total_posts : 0;?></small>
                                </div>
                                <a href='<?php echo \Uri::create('support/:category', array('category' => $category->slug)); ?>' class='text-small text-capitalize'><?php echo __('support.view_all');?> &rsaquo;</a>
                            </div>
                            <div class='card-body'>
                                <ul class='list-unstyled list-spacing-sm'>
                                    <?php if (!empty($category->posts)): ?>
                                        <?php foreach ($category->posts as $post): ?>
                                            <li>
                                                <i class='icon-text-document text-muted mr-1'></i>
                                                <a href='<?php echo \Uri::create('support/:category/:title', array('category' => $category->slug, 'title' => $post->slug)); ?>'><?php echo \Str::truncate($post->title, 40, '...');?></a>
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