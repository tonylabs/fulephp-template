<nav aria-label="breadcrumb" role="navigation" class="bg-success text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo \Uri::base(); ?>"><?php echo __('breadcrumb.home'); ?></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo \Uri::create('support');?>"><?php echo __('breadcrumb.support'); ?></a></li>
                    <?php if (!empty($category)): ?><li class="breadcrumb-item active" aria-current="page"><?php echo $category->name; ?></li><?php endif; ?>
                </ol>
            </div>
        </div>
    </div>
</nav>
<section class="space-sm">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9 mb-1 order-md-2">
                <div class="card card-sm">
                    <div class="card-header bg-secondary d-flex justify-content-between align-items-center">
                        <div>
                            <h6><?php echo (!empty($category)) ? $category->name : NULL; ?></h6>
                        </div>
                        <form class="d-flex align-items-center">
                            <span class="mr-2 text-muted text-small text-nowrap">Sort by:</span>
                            <select class="custom-select">
                                <option value="old-new" selected>Newest</option>
                                <option value="new-old">Popular</option>
                                <option value="most">Most Comments</option>
                            </select>
                        </form>
                    </div>
                    <div class="list-group list-group-flush">
                        <?php if (!empty($articles)):?>
                            <?php foreach ($articles as $article):?>
                            <a class="list-group-item list-group-item-action" href="<?php echo \Uri::create('support/:category/:title', array('category' => $article->category_slug, 'title' => $article->article_slug)); ?>">
                                <div class="media">
                                    <div class="media-body">
                                        <div>
                                            <h5 class="h6 mb-1"><?php echo $article->title;?>
                                                <span class="badge badge-indicator badge-success">&nbsp;</span>
                                            </h5>
                                            <ul class="list-inline text-small text-muted">
                                                <li class="list-inline-item"><i class="icon-message mr-1"></i>14</li>
                                                <li class="list-inline-item">
                                                    <small><?php echo __('article.updated');?>: <?php echo date('d F, Y', $article->ctime);?></small>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php endforeach;?>
                        <?php endif;?>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true"><i class="icon-chevron-left"></i>
                                                </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true"><i class="icon-chevron-right"></i>
                                                </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-1 order-md-1">
                <div class="card">
                    <div class="card-body">
                        <form class="">
                            <?php echo \Form::input('keyword', NULL, array('class' => 'form-control', 'placeholder' => __('category.search_placeholder'), 'type' => 'search'));?>
                        </form>
                    </div>
                </div>
                <div class="card card-sm">
                    <div class="card-header">
                        <span class="h6"><?php echo __('');?></span>
                    </div>
                    <div class="list-group list-group-flush">
                        <?php if (!empty($categories)): ?>
                            <?php foreach ($categories as $cat): ?>
                                <a class="list-group-item d-flex justify-content-between" href="">
                                    <div>
                                        <i class="<?php echo $cat->icon; ?> mr-1"></i>
                                        <span><?php echo $cat->name; ?></span>
                                    </div>
                                    <div>
                                        <i class="icon-chevron-right"></i>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>